<?php 
	$name = explode(' ', 'Trần Minh Lãm'); 
	$Ho_ten = array_shift($name);
	$Ten = array_pop($name);
	$Dem = implode(' ', $name);

	echo 'Họ: &nbsp;&nbsp;' . $Ho_ten . '<br> ';
	echo 'Tên đệm: &nbsp;&nbsp;' . $Dem . '<br> ';
	echo 'Tên: &nbsp;&nbsp;' . $Ten . '<br> ';
?>