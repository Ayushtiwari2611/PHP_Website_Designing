<?php

// Strings
$str = "This is string";

// To print the string
echo $str. "<br>";

// Length of the string
$lenn = strlen($str);
echo "The length of the string is : ". $lenn."<br>";

// Number of waords in a string
echo "The number of words in the string is : ". str_word_count($str)."<br>";

// Reverse of string
echo "The reverse of the string is : ". strrev($str)."<br>";

// Search in the string
echo "The search for is in the string is : ".strpos($str,"is")."<br>";

// Replaced string
echo " The replaced string is : ".str_replace("is","at",$str)."<br>";

?>