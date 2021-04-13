<?php

function get_price($product)
{
	$products = [
		"kurti"=>40,
		"lehenga"=>110,
		"saree"=>75,
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

?>

