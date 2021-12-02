<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$arr = array("apple", "banana", "orange");

	for($i = 0; $i < count($arr); $i++){
		echo $arr[$i]."<br>";
	}
?>

</body>

</html>