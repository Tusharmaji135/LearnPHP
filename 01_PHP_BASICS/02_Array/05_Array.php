<?php
// <!-- "http://localhost/LearnPHP/01_PHP_BASICS/02_Array/05_Array.php"; -->
// 32 Arrays

$numbers = array(1, 2, 3, 4, 'abcdefghijklmnopqrstuvwxyz');
// echo $numbers[3]; // Output: 4

$names = ['John', 'Alice', 'Bob', 1];
// echo $names[1]; // Output: Alice

$names[4] = "red";
$names[5] = "yellow";
$names[6] = "green";

echo "<pre>";
print_r($names); //  print_r is used to print
echo "</pre>";

echo "<ul>";
for ($i = 0; $i <= 5; $i++) {
  echo "<li>$names[$i]</li>";
}
echo "</ul>";
?>

