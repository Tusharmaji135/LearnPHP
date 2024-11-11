<?php
include './config.php';
if (isset($_FILES['fileToUpload'])) {
  $errors = array();
  $file_name = $_FILES['fileToUpload']['name'];
  $file_size = $_FILES['fileToUpload']['size'];
  $file_tmp = $_FILES['fileToUpload']['tmp_name'];
  $file_type = $_FILES['fileToUpload']['type'];
  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));
  $allowed_extensions = array('jpg', 'jpeg', 'png', 'pdf');
  if (in_array($file_ext, $allowed_extensions) === false) {
    $errors[] = "File '$file_name' is not allowed to be uploaded.";
  }
  if ($file_size > 2097152) { //2mb
    $errors[] = "File '$file_name' is too large";
  }
  $new_name = time()."-". basename($file_name);
  $target = "upload/" . $new_name;

  if (empty($errors) == true) {
    move_uploaded_file($file_tmp,$target);
  } else {
    print_r($errors);
    die();
  }
}
session_start();
$title = mysqli_real_escape_string($conn, $_POST['post_title']);
$description = mysqli_real_escape_string($conn, $_POST['postdesc']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$date = date('d M, Y');
$author = $_SESSION['user_id'];

$sql = "INSERT INTO post(title,description,category,post_date,author,post_img) VALUES ('{$title}','{$description}',{$category},'{$date}','{$author}','{$new_name}');";

$sql .= "UPDATE category SET post  = post + 1 WHERE category_id = {$category}";
if (mysqli_multi_query($conn, $sql)) {
  header("Location: {$hostname}/admin/post.php");
} else {
  echo "<div class='alert alert-danger'>failed to insert post</div>";
}
