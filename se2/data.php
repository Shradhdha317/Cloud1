<?php

function get_price($product)
{
	$products = [
		"lehenga"=>110,
		"saree"=>75,
		"kurti"=>40,
		"Dupatta"=>15,
		"Salwar Kameez"=>50,
		"Chaniya Choli"=>155			
	];
	
	foreach($products as $productname=>$price)
	{
		if($productname==$product)
		{
			return $price;
			break;
		}
	}
}

function get_designer($product)
{
	$products = [
		"lehenga"=>"Manish Malhotra",
		"saree"=>"Anamika Khanna",
		"kurti"=>"Masaba",
		"Dupatta"=>"Rohit Bal",
		"Salwar Kameez"=>"Manish Arora",
		"Chaniya Choli"=>"Manish Malhotra"			
	];
	
	foreach($products as $productname=>$designer)
	{
		if($productname==$product)
		{
			return $designer;
			break;
		}
	}
}

?>

