<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$arr = array();				// 배열의 생성
	$arr[10] = "banana";		// 인덱스 10에만 배열 요소를 추가함.
	
	var_dump($arr);
	echo "<br>";
	var_dump($arr[0]);			// NULL
	echo "<br><br>";

	var_dump(isset($arr[0]));	// false
	echo "<br>";
	var_dump(isset($arr[10]));	// true
?>

</body>

</html>