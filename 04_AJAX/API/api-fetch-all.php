<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include './config.php';

$sql = "SELECT * FROM sdata";

$result = mysqli_query($conn, $sql) or die('Error qwery failed');
if (mysqli_num_rows($result)) {
  $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo json_encode($output);
} else {
  echo json_encode(array(
    'message' => 'No results found',
    'status' => false
  ));
}
?>