<?php
echo(pi()), "<br>";
echo(min(0, 150, 30, 20, -8, -200)), "<br>";  
echo(max(0, 150, 30, 20, -8, -200)), "<br>";
echo(abs(-6.7)), "<br>"; 
echo(sqrt(64)), "<br>"; 
echo(round(0.60)), "<br>";  
echo(round(0.49)), "<br>"; 
echo(rand()), "<br>";
echo(rand(10, 100)), "<br>";
$str="hello";
echo md5($str)."<br>";
echo sha1($str, TRUE)."<br>";
echo sha1($str)."<br>";
echo md5($str, TRUE)."<br>";


?>