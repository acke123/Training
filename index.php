<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <?php
    $number=[1,2,3,4,5];
    $num=Array(6,7,8,9);
    $mix=["Acke",40,false,null,[100,43,300]];
$number[]=100;
unset($number[1]);
$student=["js"=>[5,4],"php"=>[4,3],"html"=>[5,5]];
echo"<pre>";
echo "<p> HTML ocene:".var_dump($student["html"])."</p>";
unset($student["js"]);

echo"</pre>";
echo "<h1 title='ime'>$mix[0]</h1>";
var_dump ($student);


    //echo "<pre>"//;
    //var_dump($mix);
//  echo "</pre>";
   ?>

  </body>
</html>
