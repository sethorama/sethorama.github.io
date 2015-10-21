<?php

function get_list_view_html($product_id, $product){
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<p>' . $product["name"] . '</p>';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>"; 
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"name" => "Logo Shirt, Red",
	"img" => "img/shirts/shirt-101.jpg",
	"price" => 18,
	"paypal" => "PV4MEJFKTUES4",
    "sizes" => array("Small","Medium","Large","X-Large")	
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "Z6CGRD9G7DN2S",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "HX35YL4NEWUEG",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "AVMVWPF9X4KGC",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "GU5RUJ7HTK3EU",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" => "A7FXGXB2VG8JW",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => "MAX3WMW28CUCY",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => "FH66DF9SNP9VU",
    "sizes" => array("Large","X-Large")
);

?>