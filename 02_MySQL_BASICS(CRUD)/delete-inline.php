<?php

$stu_id = $_GET['id'];

include 'config.php';
$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("QUERY FAILED");

header("Location: http://localhost/LearnPHP/02_MySQL_BASICS(CRUD)/index.php");
// header("Location: http://yourproject.infinityfreeapp.com/index.php");



mysqli_close($conn);
?>