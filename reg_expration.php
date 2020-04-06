<?php

/**
 * 
 * Delimiters
 * https://www.php.net/manual/en/regexp.reference.delimiters.php

 * Pattern Modifiers
 * https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php
 * https://www.php.net/manual/en/regexp.reference.internal-options.php
 */
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


<?php
 
// modifier x 
/*
you can put (?x) the very start of the regex to make the remainder of the regex free-spacing.

In free-spacing mode, whitespace between regular expression tokens is ignored. */

$str = " Lorem Ipsum has been type and Lorem scrambled  it to make a type specimen book."; 

preg_match_all("~Lo rem.+~x",$str,$m);
print_r($m); echo "<br><br>";
 

preg_match_all("~Lo rem.+~",$str,$m);
print_r($m); echo "<br><br>";
 
 
?>

<?php
 
// modifier U  

$str = " Lo rem Ipsum has been type and Lorem scrambled <b>it</b>  <b> </b> to make a <b>type specimen</b> book."; 

// find all bolded sections  
preg_match_all("~<b>.+?</b>~",$str,$m);
print_r($m); echo "<br><br>";
 

// find all bolded sections preg_match_all('#.+#U', $html, $matches); 
preg_match_all('~<b>.+</b>~U', $str, $m);  
print_r($m); echo "<br><br>";


$html = '<b>I am bold.</b> <i>I am italic.</i> <b>I am also bold.</b>';
preg_match_all('#<b>(.+)</b>#', $html, $bolds);
print_r($bolds); 
echo "<br><br>";

preg_match_all('#<b>(.+)</b>#U', $html, $bolds);

print_r($bolds); 
?>
