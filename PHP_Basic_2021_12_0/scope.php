<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP Variable Type</title>
</head>
<body>

<?php
	$var = 10;			// 전역 변수로 선언함
	function varFunc()
	{
		#정적변수
		static $cnt = 0;
		echo "변수 cnt의 값은 {$cnt}입니다.<br>";
		echo "정적변수는 초기화가 한 번만 됩니다.<br>";
		$cnt++;

		#지역변수
		$abc = 6;
		echo "지역변수 abc이 값은 {$abc} 입니다.<br>";

		#전역변수
		global $var; 
		echo "함수 내에서 호출한 전역 변수 var의 값은 {$var}입니다.<br>";	
		echo "함수 내에서 호출한 전역 변수 var의 값은 {$var}입니다.<br>";
	}

	varFunc(); varFunc(); varFunc(); 
	echo "함수 밖에서 호출한 전역 변수 var의 값은 {$var}입니다.";
?>

</body>

</html>