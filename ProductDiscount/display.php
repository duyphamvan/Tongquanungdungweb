<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="1.css">
</head>
<body>
	<div id="content">
		<form action="display_discount.php" method="post">
			<h2>Product Discount Calculator</h2>
			<div id="data">
				<label>Product Description: </label><input type="text" name="description" id="pro" /><br>
				<label>List Price: </label><input type="text" name="price" id="pri"><br>
				<div>
					<label>Discount Precent: </label>
					<input type="text" name="discount"/ id="dis">
				</div>
				<input type="submit" value="Calculate Discount" id="button">
		</form>
	</div>
</body>
</html>