<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Variable Type</title>
</head>

<body>

<?php
	function varFunc()
	{
		#정적변수
		static $cnt = 0;
		#지역변수 
		$locVar = 0;
		$cnt++;
		$locVar++;

		echo "변수 cnt의 값은 = {$cnt} <br>";
		echo "변수 locVar의 값은 = {$locVar} <br>";
	}
	varFunc(); varFunc(); varFunc(); varFunc(); varFunc();
?>
</body>

</html>