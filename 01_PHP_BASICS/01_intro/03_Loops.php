<?php
// <!-- "http://localhost/LearnPHP/01_intro/03_Loops.php"; -->
// 19 While Loop

$i = 1;
echo '<ol  type="a">';
while ($i <= 10) {
  echo '<li >' . $i . '</li>';
  $i++;
}
echo '</ol>';
?>

<?php
// 20 Do-While Loop

$i = 10;
echo '<ol  type="I" reversed>';
do {
  echo '<li >' . $i . '</li>';
  $i--;
} while ($i >= 1);
?>


<?php

// 21 For Loop
echo '<ul>';
for ($i = 1; $i <= 10; $i++) {
  echo '<li >'. $i. '</li>';
}
echo '</ul>';
?>

<?php

// 22 nested loop
echo "<table border='1' >";
for ($i = 1; $i <= 100; $i += 10) {
  echo '<tr>';
  for ($j = $i; $j < $i + 10; $j++) {
    echo '<td >' . $j . '</td>';
  }
  echo '</tr>';
}
echo "</table>"
?>

<?php

// 23 break continue goto
for ($i = 0; $i < 10; $i++) {
  if ($i == 5) {
    break;
  }
  echo $i . '<br>';
}
echo "After break";
for ($i = 0; $i < 10; $i++) {
  if ($i == 5) {
    continue;
  }
  echo $i . '<br>';
}

echo "After continue";
goto myLabel;
echo "This won't be executed";
myLabel:
echo "This is executed";

?>