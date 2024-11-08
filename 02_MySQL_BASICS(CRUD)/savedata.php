<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

// Create connection
$conn = mysqli_connect("localhost", "root", "", "crud") or die("NOT CONNECTED...");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) 
        VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("QUERY FAILED");

header("Location: http://localhost/LearnPHP/02_MySQL_BASICS(CRUD)/index.php");

mysqli_close($conn);
