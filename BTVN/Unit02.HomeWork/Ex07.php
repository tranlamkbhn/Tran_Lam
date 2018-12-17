<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!</title>
</head>
<body>

	<?php 
		$sum = 0;
		$giaithua = 1;
		for ($i=1; $i <= 5 ; $i++) { 
			$giaithua *= $i;
			$sum += ($i/(float)$giaithua);
		}
			echo("Tổng = " . $sum);

	 ?>
	
</body>
</html>