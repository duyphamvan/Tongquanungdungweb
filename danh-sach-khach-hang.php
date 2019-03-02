<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
			table {
			    border-collapse: collapse;
			    width: 100%;
			    border:5px solid gray;
			}
			th, td {
			    padding: 8px;
			    text-align: left;
			    border-bottom: 1px solid #ddd;
			}
			.thumbnail{
                height: 60px;
                width: 100px;
                overflow: hidden;
            }
            .thumbnail img{
                width:100%;
            }
	</style>
</head>
<body>
	<table  >
		<caption><h2>Danh sách khách hàng</h2></caption>
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Ảnh</th>
		</tr>
	<?php 
		$listEmployees =[

			'1'=>[
				'ten'=>'Eden Hazard',
				'ngaysinh'=>'1992-10-12',
				'diachi'=>'London',
				'anh'=>'images/1.jpg'

			],
			'2'=>[
							'ten'=>'David Luiz',
							'ngaysinh'=>'1990-10-12',
							'diachi'=>'Brazil',
							'anh'=>'images/2.jpg'

						],
			'3'=>[
							'ten'=>'Englo Kante',
							'ngaysinh'=>'1991-11-12',
							'diachi'=>'France',
							'anh'=>'images/3.jpg'

						],
			'4'=>[
							'ten'=>'Ruidiger',
							'ngaysinh'=>'1994-10-12',
							'diachi'=>'Germany',
							'anh'=>'images/4.jpg'

						],
			'5'=>[
							'ten'=>'Willian',
							'ngaysinh'=>'1995-10-12',
							'diachi'=>'Korea',
							'anh'=>'images/5.jpg'

						]
			

		];

		foreach ($listEmployees as $key => $values) {
			echo '<tr>';
			echo '<td>'.$key.'</td>';
			echo '<td>'.$values['ten'].'</td>';
			echo '<td>'.$values['ngaysinh'].'</td>';
			echo '<td>'.$values['diachi'].'</td>';
			echo "<td><div class='thumbnail'><image src = '".$values['anh']."'/></div></td>";
			echo '</tr>';
		}

	 ?>
	</table>
</body>
</html>