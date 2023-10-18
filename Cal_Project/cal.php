<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Cal.php</title>
</head>
<body>
   <?php
   echo "Welcome to cal.php", "<br>";
   $x = $_POST['input_1'];
   $y=  $_POST['input_2'];

   echo "value of input_1 is :".$x. "<br>";
   echo "value of input_2 is :".$y. "<br>";

   $z = $x + $y;
   echo "Total sum is : ".$z;
   ?> 
</body>
</html>