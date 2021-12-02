<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$arr = array(	// 1차원 배열을 3개 갖는 2차원 배열 선언과 동시에 초기화
		array("apple", "korea", 1000),
		array("banana", "philippines", 2000),
		array("orange", "us", 1500)
	);
	
	echo $arr[0][0].", ".$arr[0][1].", ".$arr[0][2]."<br>";
	echo $arr[1][0].", ".$arr[1][1].", ".$arr[1][2]."<br>";
	echo $arr[2][0].", ".$arr[2][1].", ".$arr[2][2]."<br>";
?>

</body>

</html>