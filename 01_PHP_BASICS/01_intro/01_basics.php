<?php
// <!-- "http://localhost/LearnPHP/01_intro/01_basics.php"; -->
// 03 echo

echo 'hi' . 'iii...';   //concatenate .
echo ('<h1>hi'), ' Baba</h1>';
echo '<h1>hi</h1>';
print '<b>hi</b>';
echo 455 + 7888;
?>


<?php
// 05 Variables

$A = "Tushar";
$a = 40;
$b = 20;

echo $A;
echo "SUM OF $a & $b = ".$a+$b ;
echo sprintf("SUM OF %d & %d = %d", $a, $b, $a + $b);
?>

<?php
// 06 Data Types

$x = 10;
$y = 50.89;
$arr = array("HTML","CSS","PHP","JS");
$n = null;
// $o = new Myclass();
echo gettype($arr);
echo var_dump($arr);
$z = $x + $y;
// echo "The sum of $x and $y is $z";
// echo $arr[1];
?>


<?php
// 07 Comments
?>


<?php
// 08 Constants
define("name",50)

?>

<?php
// 09 operators
// Arithmetic operators: +, -, *, /, %
// Assignment operators: =, +=, -=, *=, /=, %=
// Comparison operators: ==, ===,!=, <, >, <=, >=
// Logical operators: &&, ||,!, empty(), isset()
// Bitwise operators: &, |, ^, ~, <<, >>

$a = 10;
$b = 5;
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;
$a += $b;
echo $a;
echo $a <=> $b ? "true" : "false";
echo $b;
?>
