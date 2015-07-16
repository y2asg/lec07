<html>	
  <head>
    <title>STEP CONVERT</title>
  </head>
  <body>
    <?php
       $msg = htmlspecialchars($_GET["message"]);
       
       $len = mb_strlen($msg);
       for($i = 0; $i < $len; ++$i){
	$asc = ord($msg[$i]);
	echo chr($asc + $i);
	}
     ?>
  </body>
</html>	
