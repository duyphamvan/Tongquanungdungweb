<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="2.css">
</head>
<body>
	<div id="content">
		<h1>Simple Calculator</h1>
		<form action="" method="post" id="form">
			<h3>Calculator</h3>
			<label>First operand: </label><input type="text" name="first" placeholder="Nhap so" id="first"><br>
			<label>Operator: </label>
			<select name="name" id="select">
				<option > + </option>
				<option > - </option>
				<option > * </option>
				<option > / </option>
			</select><br>
			<label >Second operand</label><input type="text" name="second" placeholder="Nhap so" id="second"><br>
			<input type="submit" value="result" id="result"><br/>


			<?php 

				$first = $_POST['first'];
				$operator = $_POST['name'];
				$second = $_POST['second'];

				switch ($operator) {
					case '+':
						$result = $first + $second;
						break;
					case '-':
						$result = $first - $second;
						break;
					case '*':
						$result = $first * $second;
						break;
					case '/':
						if ($second==0) {
							echo "Errow";
						} else {
							$result = $first / $second;
						}
						break;
				}
		
				//var_dump($result);
				echo '<h4>Result is: '.$result.'</h4>';

			?>
		</form>
	</div>
	
</body>
</html>