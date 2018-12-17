<!DOCTYPE html>

<html>

<head>

	<title>Giải phương trình bậc nhất</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body style="text-align: center;" >

	<?php 

	$result = '';
	if (isset($_POST['calculate']))
	{
    //  Lấy thông tin
		$a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
		$b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
    //  tính toán
		if ($a == ''){
			$result = 'Bạn chưa nhập hệ số a';
		}
		else if ($b == ''){
			$result = 'Bạn chưa nhập hệ số b';
		}
		else if ($a == 0){
			$result = 'Hệ số a phải nhập khác 0';
		}
		else {
			$result = 'Phương trình có nghiệm là: X = ' .( -($b) / $a)	;
		}
	}

	?>

	<h1>Giải phương trình bậc nhất</h1>

	<form method="post" action="">

		<input type="text" style="width: 20px" name="a" value=""/> x +

		<input type="text" style="width: 20px" name="b" value=""/> = 0
			<br><br>
		<input type="submit" name="calculate" value="Tinh" />

	</form>

	 <?php echo $result; ?>

</body>

</html>