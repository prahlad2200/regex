<?php


/**
 * 
 * Meta-characters
 * https://www.php.net/manual/en/regexp.reference.meta.php
 * 
*   \	general escape character with several uses
*   ^	assert start of subject (or line, in multiline mode)
*   $	assert end of subject or before a terminating newline (or end of line, in multiline mode)
*   .	match any character except newline (by default)
*   [	start character class definition
*   ]	end character class definition
*   |	start of alternative branch
*   (	start subpattern
*   )	end subpattern
*   ?	extends the meaning of (, also 0 or 1 quantifier, also makes greedy quantifiers lazy (see repetition)
*   *	0 or more quantifier
*   +	1 or more quantifier
*   {	start min/max quantifier
*   }	end min/max quantifier
*/
  
//    \	general escape character with several uses
$str = "Lorem Ipsum is simply [ dummy text of the printing and typesetting industry. Lorem";  
preg_match_all("~\[~",$str,$m);
print_r($m); echo "<br><br>";


///    ^	assert start of subject (or line, in multiline mode)
preg_match_all("~^Lorem Ipsum~",$str,$m);
print_r($m); echo "<br><br>";


///$	assert end of subject or before a terminating newline (or end of line, in multiline mode)
$str = "1 line Lorem Ipsum is simply  dummy text of the printing and typesetting.

2 line Lorem Ipsum is simply  dummy text of the printing and typesetting industry.";   

preg_match_all("~.+industry.\$~",$str,$m);
print_r($m); echo "<br><br>";


//*   .	match any character except newline (by default) 
$str = "Lorem Ipsum is simply [ dummy text of the printing and typesetting industry. Lorem"; 
preg_match_all("~^Lorem Ipsum.....~",$str,$m);  // number of chars "....."
print_r($m); echo "<br><br>"; 


/*   
    [	start character class definition
    ]	end character class definition
*/ 
$str = "Lorem Ipsum is simply [ dummy text of the printing and typesetting industry. Lorem"; 
preg_match_all("~[Lorem]~",$str,$m);  
print_r($m); echo "<br><br>";

preg_match_all("~[LI\[]~",$str,$m); 
print_r($m); echo "<br><br>";

$str = "12345678910";
preg_match_all("~[19]~",$str,$m); 
print_r($m); echo "<br><br>";

 
//   |	start of alternative branch
$str = "Lorem Ipsum is simply [ dummy text of the printing and typesetting industry. Lorem"; 
preg_match_all("~is|printing~",$str,$m); 
print_r($m); echo "<br><br>";



/*
*   {	start min/max quantifier
*   }	end min/max quantifier
*/
$str = "Lorem Ipsum 1234 of the printing 5689 and typesetting industry"; 
preg_match_all("~\d{4}~",$str,$m); 
print_r($m); echo "<br><br>";


/*
*  ?	extends the meaning of (, also 0 or 1 quantifier, also makes greedy quantifiers lazy (see repetition) 
*/
$str = "Lorem Ipsum 1234___ of the printing 5689 and 4567_ typesetting industry"; 
preg_match_all("~\d{4}_?~",$str,$m); 
print_r($m); echo "<br><br>";



/*
*        *  0 or more quantifier
*/
$str = "Lorem Ipsum 1234___ of the printing 5689 and 4567_ typesetting industry"; 
preg_match_all("~\d{4}_*~",$str,$m); 
print_r($m); echo "<br><br>";


/*
*       +   1 or more quantifier
*/
$str = "Lorem Ipsum 1234___ of the printing 5689 and 4567_ typesetting industry"; 
preg_match_all("~\d{4}_+~",$str,$m); 
print_r($m); echo "<br><br>";
?>

 