<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Control</title>
</head>

<body>

<?php
	$arr = array(2, 4, 6, 8);
	foreach ($arr as $value) {
		echo "변수 value의 현재값은 {$value}입니다.<br>";
	}
	unset($value);
?>

</body>

</html>