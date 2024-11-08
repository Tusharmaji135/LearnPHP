<?php
$products = [
  [
    "Laptop",
    60000,
    "Dell",
    "Electronics",
    10
  ],
  [
    "Smartphone",
    30000,
    "Samsung",
    "Electronics",
    15
  ],
  [
    "Headphones",
    2000,
    "Sony",
    "Accessories",
    50
  ]
];

foreach ($products as list($a, $b, $c, $d, $e)) {
  echo "$a $b $c $d $e"."<br />";
}
echo "</br>";

$pro = [
  [
    "name" => "Laptop",
    "price" => 60000,
    "brand" => "Dell",
    "category" => "Electronics",
    "quantity" => 10
  ],
  [
    "name" => "Smartphone",
    "price" => 30000,
    "brand" => "Samsung",
    "category" => "Electronics",
    "quantity" => 15
  ],
  [
    "name" => "Headphones",
    "price" => 2000,
    "brand" => "Sony",
    "category" => "Accessories",
    "quantity" => 50
  ]
];

foreach ($pro as list("name"=>$a,"price"=> $b,"brand"=> $c,"category"=> $d,"quantity"=> $e)) {
  echo "$a $b $c $d $e"."<br />";
}
