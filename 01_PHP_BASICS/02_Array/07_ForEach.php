<?php
// <!-- "http://localhost/LearnPHP/02_Array/07_ForEach.php"; -->
// 34 foreach 

$arr = ['apple', 'banana', 'cherry', 'date'];

foreach ($arr as $key => $value) {                         // to include keys also in arrays
  // echo "Key: $key, Value: $value<br>";
}

// echo "<br>" . "================================" . "<br>";

foreach ($arr as $val) {
  // echo $val . "<br>";                                       // to not include keys in arrays
}
?>


<?php
// 35 multidimensional array

$fr = [
  ['1', 'banana', '5000'],
  ['2', 'elderberry', '200'],
  ['3', 'honeydew', '70000']
];

// echo "<pre>";
// print_r($fr);
// echo "</pre>";
echo '<table border="1">';

foreach ($fr as $row) {
  echo "<tr>";
  foreach ($row as $val) {
    echo "<td>$val</td>";
  }
  echo "</tr>";
}
echo '</table>';
?>