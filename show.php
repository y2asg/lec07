<html>	
  <head>
    <title>STEP SHOW</title>
  </head>
  <body>
    <?php
       $peers = "http://step15-krispop.appspot.com/peers";
       $contents = file_get_contents($peers); 
       $pieces = explode("\n", $contents);
       $msg = htmlspecialchars($_GET["message"]);

       foreach($pieces as $num){
       $url = $num."/convert?message=".$msg;
       $ans = file_get_contents($url);
       echo "$num = <br/>";
       echo "$ans<br/></br/>";
       }
      
     ?>
  </body>
</html>	
