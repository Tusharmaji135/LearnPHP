<?php 
// addslashes
// $str = "Hello i am 'yahoo baba' ";
// echo $str."<br />";
// $nstr =  addslashes($str);
// echo stripslashes($nstr);

// addcslashes
// $str2 = "Hello i am 'yahoo baba' ";
// echo $str2."<br />";
// $nstr2 =  addcslashes($str2, "a..z");
// echo stripslashes($nstr2);

// htmlentities and htmlspecialchars
$str3 = "<a> <b>Hello</b> & 'World' </a>";
// echo $str3."<br />";
// echo htmlentities($str3)."<br />";
// echo htmlspecialchars($str3)."<br />";
// echo html_entity_decode(htmlentities($str3));
// echo htmlspecialchars_decode(htmlspecialchars($str3));

// echo "<pre>";
// print_r(get_html_translation_table(HTML_ENTITIES));
// echo "</pre>";

?>

<?php 
//md5 and sha1
// $str4 = "Hello World";
// // echo md5($str4)."<br />";
// // echo sha1($str4)."<br />";

// // convert_uuencode and convert_uudecode 
// $str5 = "Maji Tushar";
// $encoded = convert_uuencode($str5);
// echo "Encoded: ".$encoded."<br />";
// $decoded = convert_uudecode($encoded);
// echo "Decoded: ".$decoded."<br />";
?>

<?php 
//bin2hex and hex2bin
// $str6 = "Hello World";
// $hex = bin2hex($str6);
// echo "Hexadecimal: ".$hex."<br />";
// $bin = hex2bin($hex);
// echo "Binary: ".$bin."<br />";

//chr and ord
// $str7 = "Hello World";
// $ascii = ord($str7[1]);
// echo "ASCII: ".$ascii."<br />";
// $char = chr($ascii);
// echo "Character: ".$char."<br />";

?>

<?php 
//strip and wordwrap

$a = "Hello <b>WORLD</b> , Hello <i>EARTH</i>";
echo $a."<br />";
echo strip_tags($a)."<br />";
echo wordwrap($a,4,"<br/>",true);

?>