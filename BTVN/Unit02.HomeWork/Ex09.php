<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mảng đảo ngược</title>
</head>
<body style="text-align: center;">
	<h1>Mảng đảo ngược</h1>
	<?php 
		$colors = array("23", "546", "21", "54");  
		rsort($colors);  
		foreach ($colors as $key => $value) {
			echo($value.', ');
		}
	?>
	
</body>
</html>


