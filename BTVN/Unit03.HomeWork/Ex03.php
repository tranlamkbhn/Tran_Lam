<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kiểm tra chuỗi Plindrome</title>
</head>
<body>

	<?php
        function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo kiem_tra_chuoi_palindrome('ZenttneZ')."<br>";
       ?>
       
	
</body>
</html>