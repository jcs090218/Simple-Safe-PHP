<?php
/**
* 
*/
function JCS_PrintLine($text)
{
	echo $text . "<br>";
}
/**
* Error Check, usually for defense programming.
*/
function JCS_Error($text)
{
	$errorText = "**** [Error] ". $text . " ****";
	JCS_PrintLine($errorText);
}


?>