<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="calculator.css">
</head>
<body>
	<div id="content">
		<h2>Future Value Calculator</h2>
		<form action="future-value-calculator.php" method="post">
			<label>Investment Amount:</label><input type="text" name="amount" id="amount"><br>
			<label>Yearly Interest Rate:</label><input type="text" name="rate" id="rate"><br>
			<label>Number of Years:</label><input type="text" name="years" id="years"><br>
			<input type="submit" value="Calculate" id="submit">
		</form>
	</div>
</body>
</html>
