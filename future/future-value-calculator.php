<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="calculator.css">

</head>
<body>

	<?php 
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$amount = $_POST['amount'];
			$rate = $_POST['rate'];
			$years = $_POST['years'];
			$futureValue = $amount + ($amount*$rate*0.01*$years);
			echo '<div>';
			echo '<form>';
			echo '<h2>Future Value Calculator</h2><br>';
			echo '<label>Investment Amount:</label><span>'.'$'.$amount.'</span><br>';
			echo '<label>Yearly Interest Rate:</label><span>'.$rate.'%'.'</span><br>';
			echo '<label>Number of Year: </label><span>'.$years.'</span><br>';
			echo '<label>Future Value: </label><span>'.'$'.$futureValue.'</span>';
			echo '</form>';
			echo '</div>';
		}
	 ?>
	
</body>
</html>
	