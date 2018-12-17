<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Sắp xếp mảng theo thứ tự tăng dần</title>
</head>
<body style='text-align: center;'>
	<h1>Mảng tăng dần</h1>
	<?php 
		$arr = array(1,4,2,6,9,100,4,); asort($arr);
		foreach ($arr as $key => $value) {
			echo($value.', ');
		}
		
	 ?>
	
</body>
</html>