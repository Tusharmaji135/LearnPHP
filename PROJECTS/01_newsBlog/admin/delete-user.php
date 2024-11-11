<?php 
include './config.php';
session_start();
if (isset($_SESSION['username'])) {
    header("Location: {$hostname}/admin/post.php");
      // to prevent further execution of the script.
}
$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = {$userid}";

if (mysqli_query($conn, $sql)) {
  header("Location: {$hostname}/admin/users.php");
}else{
  echo "<p>Unable to delete</p>";
}

mysqli_close($conn);
?>