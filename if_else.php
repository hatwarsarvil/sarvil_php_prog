<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else</title>
</head>
<body>

<?php
$a1 = 30;
$t = date("h");
echo "value of t is : ".$t;
if($a1=30)
{    
echo "Value of a1 is 30";
}


else
{
echo "Value of a1 is not 30";
}


?>   

<h2> Example of for </h2>
<?php

for($s1=0; $s1<10; $s1++)
{
  echo "Value of s1 is : $s1 <br>";
}
?>

<?php
echo strlen("Sarvil");
echo "<br>";
echo strrev("Sarvil"); 
echo "<br>";
echo (pi());
echo "<br>";
echo (sqrt(64))
?>

<?php
print "Print example : Sarvil";
$h1 = "Hatwar";
print "<h1>".$h1. "</h1>"; 
?>
</body>
</html>