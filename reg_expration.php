<?php
$str= "http://prahlad/bloge/1";

preg_match("#/bloge/#",$str,$m);
print_r($m);

preg_match("/\\/prahlad\\//",$str,$m); 

$str= "http://Prahlad/bloge/1";
preg_match("/\\/prahlad\\//i",$str,$m);
echo preg_replace("/\\/prahlad\\//i","/pm/",$str);
print_r($m);
?>



<?php

// modifier m
$str = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem

Lorem Ipsum has been  type and scrambled it to make a type specimen book. 

It has survived not  essentially unchanged. 

It was popularised in the 1960s with  of Lorem Ipsum."; 

preg_match_all("~^Lorem~m",$str,$m);
print_r($m); echo "<br><br>";

preg_match_all("~Lorem$~m",$str,$m);
print_r($m); echo "<br><br>";

// not any use without  ^ OR $
preg_match_all("~Lorem~m",$str,$m);
print_r($m); echo "<br><br>";
?>


<?php

// modifier s
$str = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem

Lorem Ipsum has been  type and Lorem scrambled 
it to make a type specimen book. 

It has survived not  essentially unchanged. 

It was popularised in the 1960s with  of Lorem Ipsum."; 

preg_match_all("~Lorem.+~s",$str,$m);
print_r($m); echo "<br><br>";
 

preg_match_all("~Lorem.+~",$str,$m);
print_r($m); echo "<br><br>";
 
?>
