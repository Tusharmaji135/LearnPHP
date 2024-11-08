<?php
//count() and sizeof() and array_count_values()

// $a = ["ram", "syam", "gdydy","ram"];
// // echo count($a);

// $food = [
//   "veg" => ["carrot", "potato"],
//   "non-veg" => ["chicken", "beef"],
//   "dessert" => ["ice-cream", "chocolate"]
// ];
// $len =  count($a);
// // for ($i=0; $i <$len; $i++) { 
// //   // echo $a[$i];
// // }
// echo"<pre>";
// print_r(array_count_values($a)) ;
// echo"</pre>";
?>


<?php
// intersect

// $food = [
//   "veg" => "carrot",
//   "non-veg" => "chicken",
//   "dessert" => "ice-cream"
// ];

// $a = [
//   "a" => "ice-cream",
//   "dessert"=>"cream-pie",
//   "dessert" => "ice-cream"
// ];

// function compare($a, $b) {
//  if ($a === $b){
//   return 0;
//  }
//  return ($a > $b)? 1 : -1;
// };

// // $nArray = array_intersect($food, $a);
// // $nArray = array_intersect_key($food, $a);
// // $nArray = array_intersect_assoc($food, $a);
// // $nArray = array_intersect_uassoc($food, $a,"compare");
// // $nArray = array_uintersect_assoc($food, $a,"compare");
// // $nArray = array_intersect_ukey($food, $a,"compare");
// // $nArray = array_uintersect($food, $a,"compare");


// echo "<pre>";
// print_r($nArray);
// echo "</pre>";


?>


<?php 
// diff

// function cmp($a,$b){
//   if ($a=== $b){
//     return 0;
//   }
//   return ($a > $b)? 1 : -1;
// }

// $a = [
//   "veg" => "carrot",
//   "non-veg" => "chicken",
//   "dessert" => "ice-cream"
// ];

// $b = [
//   "a" => "ice-cream",
//   "dessert"=>"cream-pie",
//   "veg" => "ice-cream",
//   "dessert" => "ice-cream"
// ];

// $nArray = array_diff($a,$b);
// $nArray = array_diff_key($a,$b);
// $nArray = array_diff_assoc($a,$b);
// $nArray = array_diff_uassoc($a,$b,"cmp");
// $nArray = array_udiff_assoc($a,$b,"cmp");
// $nArray = array_diff_ukey($a,$b,"cmp");
// $nArray = array_udiff($a,$b,"cmp");


// echo "<pre>";
// print_r($nArray);
// echo "</pre>";

?>

<?php 
// $a = ["a"=>"trom", "B"=>"bluxur", "c"=>"coman"];

// echo "<pre>";
// // print_r(array_values($a));  
// // print_r(array_unique($a));
// // print_r(array_flip($a))
// print_r(array_change_key_case($a,CASE_UPPER));
// echo "</pre>";
?>

<?php 
// $a = [4,5,1,8,2,10,30,40];
// $veg =["potato","tea","juer","coffee","lamp","sugar","orange"];


// echo "<pre>";
// // print_r(array_sum($a));
// // print_r(array_product($a));
// // print_r($veg[array_rand($veg)]);
// shuffle($veg);
// print_r($veg);
// echo "</pre>";
?>

<?php 
//sort 

$food = array('orange','banana','apple','yogurt','cherry');
$food2 = array('a'=>'orange','b'=>'banana','c'=>'apple','d'=>'yogurt','e'=>'cherry');

$im = ['im1.png','im2.png','im10.png','im12.png'];

echo "<pre>";
// sort($food);//ascending
// rsort($food2);//descending

// asort($food);//ascending
// arsort($food2);//descending

// ksort($food2);
// krsort($food2);

// natsort($im);  //natural sort 
// array_multisort($food,$im);

$rev = array_reverse($food);//reverse


print_r($rev); 
echo "</pre>";
?>