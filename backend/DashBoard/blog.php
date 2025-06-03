<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATMABISWAS Blog Editor</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="css/blog.css">
</head>

<body>
    <div class="container">
        <div class="card editor-section">
            <h1>ATMABISWAS Blog Editor</h1>
            <form action="../blogUpload_process.php" method="POST" onsubmit="return handleFormSubmit(event)">
                <!-- Blog Metadata -->
                <input name="blog_title" type="text" id="blogTitle" placeholder="Blog Title" required>
                <select id="blogCategory" name="blog_category" required>
                    <option value="">Select Category</option>
                    <option value="tech">Technology</option>
                    <option value="life">Lifestyle</option>
                    <option value="travel">Travel</option>
                </select>

                <!-- Rich Text Toolbar -->
                <div class="toolbar">
                    <!-- Keep all text formatting controls but remove file upload -->
                    <select onchange="changeBlockFormat(this.value)">
                        <option value="p">📝 Normal Text</option>
                        <option value="h1">Heading 1</option>
                        <option value="h2">Heading 2</option>
                        <option value="h3">Heading 3</option>
                        <option value="blockquote">Quote</option>
                    </select>

                    <select onchange="changeFont(this.value)">
                        <option value="Arial">Arial</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Courier New">Courier New</option>
                        <option value="Verdana">Verdana</option>
                    </select>

                    <select onchange="changeFontSize(this.value)">
                        <option value="1">Small</option>
                        <option value="2">Medium</option>
                        <option value="3" selected>Large</option>
                        <option value="4">Extra Large</option>
                    </select>

                    <!-- Formatting buttons -->
                    <button type="button" onclick="formatText('strong')">
                        <i class="fas fa-bold"></i>
                    </button>
                    <button type="button" onclick="formatText('em')">
                        <i class="fas fa-italic"></i>
                    </button>
                    <button type="button" onclick="formatText('u')">
                        <i class="fas fa-underline"></i>
                    </button>

                    <input type="color" onchange="changeColor(this.value)" title="Text Color">

                    <!-- Alignment -->
                    <button type="button" onclick="alignText('left')">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button type="button" onclick="alignText('center')">
                        <i class="fas fa-align-center"></i>
                    </button>
                    <button type="button" onclick="alignText('right')">
                        <i class="fas fa-align-right"></i>
                    </button>
                    <button type="button" onclick="alignText('justify')">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <!-- Lists -->
                    <button type="button" onclick="formatText('insertUnorderedList')">
                        <i class="fas fa-list-ul"></i>
                    </button>
                    <button type="button" onclick="formatText('insertOrderedList')">
                        <i class="fas fa-list-ol"></i>
                    </button>

                    <!-- Indentation -->
                    <button type="button" onclick="formatText('indent')">
                        <i class="fas fa-indent"></i>
                    </button>
                    <button type="button" onclick="formatText('outdent')">
                        <i class="fas fa-outdent"></i>
                    </button>

                    <!-- Link -->
                    <button type="button" onclick="createLink()">
                        <i class="fas fa-link"></i>
                    </button>
                </div>

                <!-- Editor Content -->

                <!-- Summary of Blog -->
                <h1 style="font-size: 1.2rem;">Write atleast <strong>100 words</strong> Summary for this blog </h1>

                <div id="summary_editor" contenteditable="true" placeholder="Start writing your post..."
                    class="editor-content">
                </div>

                <!-- Main Blog Content -->

                <h1 style="font-size: 1.2rem;">Start writing Blog from here. </h1>

                <div id="editor" contenteditable="true" placeholder="Start writing your post..." class="editor-content">
                </div>

                <!-- Hidden input for sanitized content for blog -->
                <input type="hidden" id="sanitizedContent" name="blog_content">

                <!-- Hidden input for sanitized content for Summary -->

                <input type="hidden" id="summary_sanitizedContent" name="summary_content">

                <!-- Publish Button -->
                <button type="submit" class="publish-btn">
                    <i class="fas fa-paper-plane"></i> Publish Post
                </button>
            </form>
        </div>

    </div>

    <script>
    function sanitizeHTML(html) {
        const temp = document.createElement('div');
        temp.textContent = html;
        return temp.innerHTML;
    }

    async function handleFormSubmit(e) {
        e.preventDefault();

        const formData = new FormData(e.target);

        // Get and sanitize blog content
        const blogEditor = document.getElementById('editor');
        const blogContent = blogEditor ? blogEditor.innerHTML : '';
        const sanitizedBlogContent = sanitizeHTML(blogContent);
        formData.append('blog_content', sanitizedBlogContent);

        // Get and sanitize summary content
        const summaryEditor = document.getElementById('summary_editor');
        const summaryContent = summaryEditor ? summaryEditor.innerHTML : '';
        const sanitizedSummaryContent = sanitizeHTML(summaryContent);
        formData.append('summary_content', sanitizedSummaryContent);

        try {
            const response = await fetch(e.target.action, {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.status === 'success') {
                alert('Blog published successfully! Post ID: ' + result.post_id);
                window.location.href = '../DashBoard/blog_image.php?id=' + result.post_id;
            } else {
                throw new Error(result.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Error publishing post: ' + error.message);
        }
    }
    </script>


    <script src="js/blog.js">

    </script>
</body>

</html>