<?php

function get_price($product, $price)
{


	$servername = "localhost";
	$username = "patels18";
	$password = "if9bre";
	$dbname = "patels18_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
  
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT price FROM products WHERE product = '$product'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) 
	{

             while($row = $result->fetch_assoc()) 
	 	 {
                      $p = $row["price"];
      	  	}
    	}
	 else
		 {
                     $p = null;
		     return NULL;	
        	}

    $conn->close();

if ($p == $price) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

?>


