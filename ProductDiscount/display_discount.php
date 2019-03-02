<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$description = $_POST['description'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];
	}
	function result($price, $discount)
	{
		$discountAmount = $price*$discount*0.01;
		return $discountAmount;
	}

	$newPrice = $price - result($price, $discount);
	result($price, $discount);
	echo '<h2>Produc Discount Calculator</h2><br/>';
	echo 'Product Description: '.$description.'<br/>';
	echo 'Price: ' .$price.'$'.'<br/>';
	echo 'Discount Percent: ' .$discount .'%'.'<br/>';
	echo 'Discount Amount: '.result($price, $discount).'$'.'<br/>';
	echo 'Discount Price: ' .$newPrice.'$';


 ?>