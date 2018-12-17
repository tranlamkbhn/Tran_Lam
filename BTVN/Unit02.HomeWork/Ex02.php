<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>In ra tổng 10 số chẵn đầu tiên</title>
</head>
<body style="text-align: center">
	<h1>Viết phương trình in ra tổng 10 số chẵn đầu tiên</h1>
	<?php 	
		$tong = 0;
		for ($i=0; $i < 10 ; $i++) { 
			$tong+=$i*2;
		}
		echo "Tổng 10 số chẵn đầu tiên là: " . $tong;
 	?>
</body>
</html>