<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <table id="main" border="0" cellspacing='0'>
    <tr>
      <td id="header">
        <h1>AJAX</h1>
      </td>

    </tr>
    <tr>
      <td id="table-load">
        <input type="button" value="load data" id="load-button">
      </td>
    </tr>
    <tr>
      <td id="table-data">
        
      </td>
    </tr>
  </table>
  <script src="./js/jquery.js"></script>
  <script>
    $(document).ready(function() {
      $('#load-button').click(function(e) {
        $.ajax({
          url: './ajaxLoad.php',
          type: 'GET',
          success: function(data) {
            $("#table-data").html(data)
          }
        })
      })
    })
  </script>
</body>

</html>