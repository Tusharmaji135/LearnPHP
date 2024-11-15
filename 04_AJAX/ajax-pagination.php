<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");
$limit = 5;
$page = "";

if (isset($_POST["pno"])) {
  $page = $_POST["pno"];
} else {
  $page = 1;
};

$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM students LIMIT $offset, $limit";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if (mysqli_num_rows($result) > 0) {
  $output .= '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

  while ($row = mysqli_fetch_assoc($result)) {
    $output .= "<tr>
    <td align='center'>{$row["id"]}</td>
    <td>{$row["first_name"]} {$row["last_name"]}</td>
    <td align='center'><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td>
    <td align='center'><button Class='delete-btn' data-id='{$row["id"]}'>Delete</button></td>
    </tr>";
  };

  $output .= "</table>";

  $sql_total = "SELECT * FROM students";
  $result_total = mysqli_query($conn, $sql_total) or die("SQL Query Failed.");
  $total_records = mysqli_num_rows($result_total);
  $total_pages = ceil($total_records / $limit);

  $output .= '</br> <tr>
    <td>
      <div id="pagination">
  
        <!-- <a href="#">Previous</a> -->';
  for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $page) {
      $output.= "<a class='active' id='{$i}' href=''>{$i}</a>";
    } else {
      $output.= "<a id='{$i}' href='#'>{$i}</a>";
    }
  }
  $output .= '<!-- <a id="" href="#">Next</a> -->
  
      </div>
    </td>
  </tr>';




  mysqli_close($conn);

  echo $output;
} else {
  echo "<h2>No Record Found.</h2>";
}
