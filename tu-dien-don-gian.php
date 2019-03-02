<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
 <style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
 </style>
<body>
	<form action="" method="post">
		<h2>Từ điển Anh - Việt</h2>
		<input type="text" name="english" placeholder="Nhap tu can tim">
		<input type="submit" value="Tim" id="submit">
		<hr>
	</form>
	
	<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$flag = 0;
		$word = $_POST['english'];
		$dictionary = [
				'hello'=>'xin chào',
				'korea'=>'hàn quốc',
				'japan'=>'nhật bản',
				'tokuda'=>'ông gìa'
				];
		foreach ($dictionary as $key => $values) {
			if ($word == $key) {
				echo 'Từ ' .$word. ' nghĩa là ' .$values;
				echo '<br>';
				$flag = 1;
			}
		}
		if ($flag==0) {
			echo 'File not found';	
		}	

	}	
			
		 
			
		

	 ?>
</body>
</html>