<html>
<head>
	<title>Bản cửu chương</title>
</head>
<body>

	<table align="center" border="1" cellpadding="5" cellspacing="0">  
		<?php  
		for($i=1; $i <= 9; $i++)  
		{  
			echo "<tr>";  
			for ($j=1; $j <= 10; $j++)  
			{  
				echo "<td>$i * $j = ".$i*$j."</td>";  
			}  
			echo "</tr>";  
		}  
		?>  
	</table> 
	

</body>
</html>