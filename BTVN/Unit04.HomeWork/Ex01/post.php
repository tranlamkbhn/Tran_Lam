<?php 
	
	if (isset($_POST['msv'])) {
		$msv = $_POST['msv'];
	}
	if(isset($_POST['user'])){
		$user = $_POST['user'];
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	if (isset($_POST['phone'])) {
		$number = $_POST['phone'];
	}
	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
		
	}
	if(isset($_POST["check_male"])) {

		 echo $_POST["check_male"];
	}

	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}

	echo "<li>Mã sinh viên: " .$msv;
	echo "<li>Họ và tên: " .$user;
	echo "<li> Email: ". $email;
	echo "<li> Số điện thoại: ". $number;
	echo "<li> Giới tính: ". $gender;	
	echo "<li> Địa chỉ: ". $address;	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<br>
	<a href="index.php" class="submit">Đăng xuất</a>
	
</body>
</html>
