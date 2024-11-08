<?php
// <!-- "http://localhost/LearnPHP/01_intro/02_Ifelse.php"; -->

// 10 Conditional statements

// if, else if, else
// switch
// ternary operator
//for eg:
$score = 90;
if($score >= 90){
  echo "Grade A";
} elseif($score >= 80){
  echo "Grade B";
} elseif($score >= 70){
  echo "Grade C";
} else{
  echo "Fail";
}

switch($score){
  case 90:
    echo "Grade A";
    break;
  case 80:
    echo "Grade B";
    break;
  case 70:
    echo "Grade C";
    break;
  default:
    echo "Fail";
}

$score = 90;
echo ($score >= 90)? "Grade A" : (($score >= 80)? "Grade B" : (($score >= 70)? "Grade C" : "Fail"));
?>


<?php
// 18 String Operator

$str1 = "Hello";
$str2 = " This is my";
$str3 = " World";
// echo $str1 . $str2;
$str1 .= $str2;
$str1 .= $str3;
echo $str1;
?>
