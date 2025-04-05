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
      <form action="">
        <input type="text" id="blogTitle" placeholder="Blog Title" />
        <select id="blogCategory">
          <option value="">Select Category</option>
          <option value="tech">Technology</option>
          <option value="life">Lifestyle</option>
          <option value="travel">Travel</option>
        </select>

        <!-- Advanced Toolbar -->
        <div class="toolbar">
          <!-- Paragraph/Heading Dropdown -->
          <select onchange="changeBlockFormat(this.value)">
            <option value="p">📝 Normal Text</option>
            <option value="h1">Heading 1</option>
            <option value="h2">Heading 2</option>
            <option value="h3">Heading 3</option>
            <option value="blockquote">Quote</option>
          </select>

          <!-- Font Family Dropdown -->
          <select onchange="changeFont(this.value)">
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Georgia">Georgia</option>
            <option value="Courier New">Courier New</option>
            <option value="Verdana">Verdana</option>
          </select>

          <!-- Font Size Dropdown -->
          <select onchange="changeFontSize(this.value)">
            <option value="1">Small</option>
            <option value="2">Medium</option>
            <option value="3" selected>Large</option>
            <option value="4">Extra Large</option>
          </select>

          <!-- Bold, Italic, Underline -->
          <button onclick="formatText('bold')">
            <i class="fas fa-bold"></i>
          </button>
          <button onclick="formatText('italic')">
            <i class="fas fa-italic"></i>
          </button>
          <button onclick="formatText('underline')">
            <i class="fas fa-underline"></i>
          </button>

          <!-- Text Color -->
          <input
            type="color"
            onchange="changeColor(this.value)"
            title="Text Color" />

          <!-- Text Alignment -->
          <button onclick="formatText('justifyLeft')">
            <i class="fas fa-align-left"></i>
          </button>
          <button onclick="formatText('justifyCenter')">
            <i class="fas fa-align-center"></i>
          </button>
          <button onclick="formatText('justifyRight')">
            <i class="fas fa-align-right"></i>
          </button>
          <button onclick="formatText('justifyFull')">
            <i class="fas fa-align-justify"></i>
          </button>


          <!-- Lists -->
          <button onclick="formatText('insertUnorderedList')">
            <i class="fas fa-list-ul"></i>
          </button>
          <button onclick="formatText('insertOrderedList')">
            <i class="fas fa-list-ol"></i>
          </button>

          <!-- Indent/Outdent -->
          <button onclick="formatText('indent')">
            <i class="fas fa-indent"></i>
          </button>
          <button onclick="formatText('outdent')">
            <i class="fas fa-outdent"></i>
          </button>

          <!-- Link -->
          <button onclick="createLink()"><i class="fas fa-link"></i></button>

          <!-- Upload Image -->
          <button onclick="triggerUpload()">
            <i class="fas fa-image"></i>
          </button>
          <input type="file" id="imageUpload" hidden accept="image/*" />
        </div>

        <!-- Editor Area -->
        <div
          id="editor"
          contenteditable="true"
          ondragover="handleDragOver(event)"
          ondrop="handleDrop(event)"
          ondragleave="handleDragLeave(event)"
          placeholder="Start writing your post...">
        </div>

        <!-- Publish Button -->
        <button type="submit" class="publish-btn" onclick="savePost()">
          <i class="fas fa-paper-plane"></i> Publish Post
        </button>
      </form>
    </div>

    <!-- Posts Preview Grid -->
    <div class="preview-grid" id="postPreview"></div>
  </div>

  <script src="js/blog.js">

  </script>
</body>

</html>