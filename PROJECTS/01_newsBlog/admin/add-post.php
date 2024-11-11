<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form id="postForm" action="save-post.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control">
                              <option value="" disabled> Select Category</option>
                              <?php 
                              include './config.php';
                              $sql = "SELECT * FROM category";

                              $result = mysqli_query($conn, $sql) or die("Query Failed.");
                            
                              if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                }}
                              ?>
                          </select>
                      </div>
                      
                      <!-- Drag-and-Drop Image Upload -->
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post Image</label>
                          <div id="drop-area" style="border: 2px dashed #ccc; padding: 20px; text-align: center;">
                              <p>Drag & Drop Image Here</p>
                              <p>or</p>
                              <input type="file" name="fileToUpload" id="fileToUpload" style="display:none" required>
                              <button type="button" onclick="document.getElementById('fileToUpload').click()">Select File</button>
                          </div>
                          <div id="preview"></div> <!-- Optional: Image preview area -->
                      </div>

                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>

<script>
// Drag and Drop Feature
const dropArea = document.getElementById('drop-area');
const fileInput = document.getElementById('fileToUpload');

// Prevent default drag behaviors
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults (e) {
    e.preventDefault();
    e.stopPropagation();
}

// Highlight on drag enter/over
['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, () => dropArea.classList.add('highlight'), false);
});

// Remove highlight on drag leave/drop
['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, () => dropArea.classList.remove('highlight'), false);
});

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;

    if (files.length) {
        fileInput.files = files; // Assign files to file input
        previewFile(files[0]); // Optional: Preview
    }
}

// Optional: Preview the image
function previewFile(file) {
    const preview = document.getElementById('preview');
    preview.innerHTML = ''; // Clear existing preview
    const img = document.createElement('img');
    img.src = URL.createObjectURL(file);
    img.onload = () => URL.revokeObjectURL(img.src); // Free memory
    img.style.maxWidth = '100%';
    preview.appendChild(img);
}
</script>

<?php include "footer.php"; ?>
