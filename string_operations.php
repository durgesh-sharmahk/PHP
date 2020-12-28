<?php
// 1. to find length of a string
$x="Hello world!";
echo strlen($x), "<br>";
echo strlen("hello world!"), "<br>";
//2. To count words in string
echo str_word_count($x), "<br>";
echo str_word_count(" My beautiful world"), "<br>";
//3. To reverse a string
echo strrev($x), "<br>";
// 4. To replace a word in a string
echo str_replace("world", "durgesh", "Hello world"), "<br>";
echo str_replace("world", "Dolly", "Hello world!"), "<br>";
echo str_replace("world", "Harshala", $x), "<br>";
//5. to find position of a word
echo strpos("hello World", "hello"), "<br>";
//6. To concatenate strings
$a="hello";
$b=$a."world";
echo $b, "<br>"; 
//7. to concatenate without new variable
$a="hello ";
$a.="this ";
$a.="is my place ";
echo $a; 
?>