<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vẽ hình 04</title>
</head>
<body>
	
		<?php 
			for ($i = 10; $i >= 1; $i--) {
				for ($j = 1; $j < $i; $j++) { 
					echo "&nbsp;&nbsp;";
				}
				for ($k = 10; $k >= $i; $k--) {
					echo "#";
				}
				echo "<br>";
			}

		?>

</body>
</html>