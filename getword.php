<html>	
  <head>
    <title>STEP GETWORD</title>
  </head>
  <body>
    <?php

       mt_srand(microtime(TRUE)*100000);

       $msg = htmlspecialchars($_GET["pos"]);
       $noun = array("Asia","Japan","almond","pillow","carrot","rabbit","music","computer","dice","drop","cherry","plum","score","fox","tone");
       $verb = array("add","append","expect","laugh","sing","light","sparkle","tell","swap","twist","purify","reap","dye","emit","enjoy"); 
       $adjective = array("sweet","dangerous","new","warm","enormous","cheap","trite","dramatic","sharp","mysterious","strong","arrogant","foolish","great","refined");
       $adverb = array("actually","also","below","closely","delightfully","ever", "fresh","ironically","loudly","obviously","rapidly","truly","well","dearly","gently");
       $conjunction = array("moreover","likewise","however","while","therefore","before","till","although","otherwise","nonetheless","like","as","if","since","whenever");
       $interjection = array("ah","bingo","cheers","eep","golly","ho-ho","yep","shoo","oy","jeez");
       $other = array("!","?",";_;","><;",":)",":(","@u@","(+o+)","(- -#)","*^^*");
       
       if($msg == "noun"){
         echo $noun[mt_rand(0,14)];
       }else if($msg == "verb"){
         echo $verb[mt_rand(0,14)];
       }else if($msg == "adjective"){
         echo $adjective[mt_rand(0,14)];
       }else if($msg == "adverb"){
         echo $adverb[mt_rand(0,14)];
       }else if($msg == "conjunction"){
         echo $conjunction[mt_rand(0,14)];
       }else if($msg == "interjection"){
         echo $interjection[mt_rand(0,9)];
       }else{
         echo $other[mt_rand(0,9)];
       }

     ?>
  </body>
</html>	
