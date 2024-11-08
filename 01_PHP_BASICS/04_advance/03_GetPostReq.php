<?php
//super global variables

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM PAGE</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="fname">First Name:</label><br>
    <input type="text" id="fname" name="fname" required><br>
    <label for="age">Age:</label><br>
    <input type="text" id="age" name="age" required><br>
    <input type="submit" value="Submit" name="save">
  </form>
    <?php 
    if(isset($_POST['save'])){
      echo $_POST['fname'].'<br>';
      echo $_POST['age'].'<br>';
    }
    ?>
</body>

</html>