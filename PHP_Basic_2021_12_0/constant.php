<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>상수 연습</title>
</head>
<body>
   <?php
      function magicCons(){
      	 echo "현재 라인 번호는", __LINE__, "입니다.<br>";   
      	 //파일의 현재 줄 번호를 반환함.   
         echo __FUNCTION__;   //함수의 이름을 반환함.
         echo __METHOD__;   //클래스의 메소드 이름을 반환함.
         echo __DIR__; 
      }
      magicCons()
   ?>

</body>
</html>