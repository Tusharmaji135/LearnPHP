<?php 
//date
// echo date('dS-D-M-Y')."<br/>";


//time
// date_default_timezone_set("Asia/Kolkat0a");
// echo date('h:i:sa e');

//mktime and gmmktime
echo date("d-m-y,h:i:sa",mktime(0,0,0,03,01,2005)).'<br/>';  

//datecreate
$date = date_create("2035-03-01",timezone_open("Asia/Kolkata"));
echo date_format($date,"d-m-Y");


?>