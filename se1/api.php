<?php
header("Content-Type:application");
require "data.php";

if(!empty($_GET['product']))
{
	$product=$_GET['product'];
	$price = get_price($product);
	
	if(empty($price))
	{
		response(NULL);
	}
	else
	{
		response($price);
	}	
}
else
{
	response(NULL);
}
function response($data)
{
	header("HTTP/1.1 ");
	
	echo $data;
}

?>



