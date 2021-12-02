<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Operators</title>
</head>

<body>

<?php
	$num_01 = 7;
	$num_02 = 7;
	$num_03 = 7;

	echo "- 연산자에 의한 결과값은 ".($num_01 = $num_01 - 5)."입니다.<br>";
	echo "-= 연산자에 의한 결과값은 ".($num_02 -= 5)."입니다.<br>";
	echo "=- 연산자에 의한 결과값은 ".($num_03 =- 5)."입니다.";
?>

</body>

</html>