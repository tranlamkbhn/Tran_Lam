<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vẽ hình 03</title>
</head>
<body>

	<?php 
         for ($i = 5; $i >= 1; $i--) {
           for ($j = 5; $j > $i; $j--) {
               echo "&nbsp;&nbsp;";
           }
           for ($k = 1; $k <= $i; $k++) {
               echo "#";
           }
           echo "</br>";
        }
	 ?>
	
</body>
</html>