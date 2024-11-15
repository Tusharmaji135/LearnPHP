<?php 
$conn = mysqli_connect("localhost","root","","test") or die("Couldn't connect");
$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("Couldn't execute");

$output = mysqli_fetch_all($result,MYSQLI_ASSOC);

$json_data =  json_encode($output,JSON_PRETTY_PRINT);

$fname = "my-". date("d-m-Y") . ".json";

if(file_put_contents($fname,$json_data)){
  echo "Data exported successfully to $fname";
}
else{
  echo "Failed to export data";
}
?>