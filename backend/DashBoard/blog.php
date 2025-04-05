<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ATMABISWAS Blog Editor</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

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
          <button type="button" onclick="formatText('bold')">
            <i class="fas fa-bold"></i>
          </button>
          <button type="button" onclick="formatText('italic')">
            <i class="fas fa-italic"></i>
          </button>
          <button type="button" onclick="formatText('underline')">
            <i class="fas fa-underline"></i>
          </button>

          <input type="color" onchange="changeColor(this.value)" title="Text Color">

          <!-- Alignment -->
          <button type="button" onclick="formatText('justifyLeft')">
            <i class="fas fa-align-left"></i>
          </button>
          <button type="button" onclick="formatText('justifyCenter')">
            <i class="fas fa-align-center"></i>
          </button>
          <button type="button" onclick="formatText('justifyRight')">
            <i class="fas fa-align-right"></i>
          </button>
          <button type="button" onclick="formatText('justifyFull')">
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
        <div
          id="editor"
          contenteditable="true"
          placeholder="Start writing your post..."
          class="editor-content"></div>

        <!-- Hidden input for sanitized content -->
        <input type="hidden" id="sanitizedContent" name="blog_content">

        <!-- Publish Button -->
        <button type="submit" class="publish-btn">
          <i class="fas fa-paper-plane"></i> Publish Post
        </button>
      </form>
    </div>

    <!-- Posts Preview Grid -->
    <div class="preview-grid" id="postPreview"></div>
  </div>

  <script>
    // Form Submission Handler
    function handleFormSubmit(e) {
      e.preventDefault();

      // Get and sanitize content
      const editor = document.getElementById('editor');
      const sanitized = sanitizeHTML(editor.innerHTML);

      // Set hidden input value
      document.getElementById('sanitizedContent').value = sanitized;

      // Submit form
      e.target.submit();
    }

    // Basic HTML Sanitizer
    function sanitizeHTML(html) {
      const temp = document.createElement('div');
      temp.textContent = html;
      return temp.innerHTML;
    }

    // Text Formatting Functions
    function formatText(command, value = null) {
      document.execCommand(command, false, value);
      document.getElementById('editor').focus();
    }

    function changeBlockFormat(format) {
      document.execCommand('formatBlock', false, format);
    }

    function changeFont(font) {
      document.execCommand('fontName', false, font);
    }

    function changeFontSize(size) {
      document.execCommand('fontSize', false, size);
    }

    function changeColor(color) {
      document.execCommand('foreColor', false, color);
    }

    // Link Creation
    function createLink() {
      const url = prompt('Enter URL:');
      if (url) document.execCommand('createLink', false, url);
    }
  </script>

  <script src="js/blog.js">

  </script>
</body>

</html>