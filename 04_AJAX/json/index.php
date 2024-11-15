<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="background-color: cadetblue;">

  <div id="load-data">

  </div>
<script src="../js/jquery.js"></script>
<script>
  $(document).ready(function(){
    // $.ajax({
    //   type: "GET",
    //   url: "test.json",
    //   success: function (data) {
    //     $.each(data,(key,value)=>{
          
    //       $("#load-data").append(value.id + " "+ value.body + "</br>");
    //     })
        
    //   }
    // });
    $.getJSON(
    "json_encode.php",
    (data)=>{
      $.each(data,(key,value)=>{
        $("#load-data").append(value.id + " "+ value.first_name + "</br>");
      })
    }
    );
  })
</script>
</body>
</html>