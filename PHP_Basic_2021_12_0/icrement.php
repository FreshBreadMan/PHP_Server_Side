<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Operators</title>
</head>

<body>

<?php
	$x = 10;				// 8
	$y = $x-- + 5 + --$x;	// 23

	echo "변수 \\$x의 값은 ".$x."이고, 변수 \\$y의 값은 ".$y."으로 변경되었습니다.";
?>

</body>

</html>