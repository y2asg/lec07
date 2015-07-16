<html>	
  <head>
    <title>STEP MADLIB</title>
  </head>
  <body>
    <?php

       mt_srand(microtime(TRUE)*100000);

       $msg = htmlspecialchars($_GET["pos"]);
       $noun = array("Asia","Japan","almond","pillow","carrot","rabbit","music","computer","dice","drop","cherry","plum","score","fox","tone");
       $verb = array("add","throw","read","push","sing","light","sparkle","tell","swap","twist","purify","reap","dye","emit","enjoy"); 
       $adjective = array("sweet","dangerous","new","warm","enormous","cheap","trite","dramatic","sharp","mysterious","strong","arrogant","foolish","great","refined");
       $adverb = array("actually","closely","delightfully","ever","ironically","loudly","obviously","rapidly","truly","well","dearly","gently");
       $conjunction = array("moreover","likewise","however","while","therefore","before","till","although","otherwise","nonetheless","as","if","since","whenever");
       $other = array("!","?",";_;","><;",":)",":(","@u@","(+o+)","(- -#)","*^^*");
       
       echo $adjective[mt_rand(0,14)];
       echo " ";
       echo $noun[mt_rand(0,14)];
       echo " ";
       echo $verb[mt_rand(0,14)];
       echo " ";
       echo $noun[mt_rand(0,14)];
       echo " ";
       echo $adverb[mt_rand(0,11)];
       echo ". ";
       echo $conjunction[mt_rand(0,14)];
       echo " ";
       echo $adjective[mt_rand(0,14)];
       echo " ";
       echo $noun[mt_rand(0,14)];
       echo " ";
       echo $verb[mt_rand(0,14)];
       echo " ";
       echo $adjective[mt_rand(0,14)];
       echo " ";
       echo $noun[mt_rand(0,14)];
       echo " ";
       echo $other[mt_rand(0,9)];
       echo " ";


     ?>
  </body>
</html>	
