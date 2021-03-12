<?php
 header("Content-Type: text/plain");

 $string = $_GET["text"];
 $pattern = '/(\s+)/i'; 
 $replacement = ' ';
 $cls = trim($string)
 echo preg_replace($pattern, $replacement, $cls);
?>
