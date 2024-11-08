<?php 
session_start();
$_SESSION["favcolor"] = "orange";
$_SESSION["nofavcolor"] = "red";
echo "Session variable 'favcolor' is set.";
?>