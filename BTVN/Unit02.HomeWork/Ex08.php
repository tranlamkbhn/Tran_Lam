<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm số nguyên lớn nhất trong mảng</title>
</head>
<body>
	
	
	<?php 
	$array = [3, 5, 6,45, 21, 45, 234, 547, 232, 43546, 232, 3545 , 3, 2, 4, 7, 10, 23];

	$max = null;
	$location = null;

	for ($i = 0; $i < count($array); $i++)
	{
		if ($max == null){
			$max = $array[$i];
			$location = $i;
		}
		else {
			if ($array[$i] > $max){
				$max = $array[$i];
				$location = $i;
			}
		}
	}

	echo "Số lớn nhất là: $max";
	?>

</body>
</html>