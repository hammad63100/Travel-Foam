<?php
 $str = "this is in string";
 $len = strlen($str);
 echo"The length of the is string is ". $len. ". Thank you";
 echo"<br>";
 echo"The number  of  words in the string is ". str_word_count($str). ". Thank you";
 echo"<br>";
 echo"The Reverse  of  words in the string is:  ". strrev($str). ". Thank you";
 echo"<br>";
 echo"The position of  words in the string is ". strpos( $str, "string"). ". Thank you";
 echo"<br>";
 echo"The Replace of  words in the string ". str_replace("is" , "at",$str). ". Thank you";
 
?>


