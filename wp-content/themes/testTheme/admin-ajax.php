<?php

// valid email check
$email = $_POST['email'];
$re1='((?:[a-z][a-z0-9_]*))';
$re2='(@)';
$re3='((?:[a-z][a-z0-9_]*))';
$re4='(\\.)';
$re5='((?:[a-z][a-z0-9_]*))';

if (preg_match_all ("/".$re1.$re2.$re3.$re4.$re5."/is", $email, $matches))
{
	echo true;
}else{
	echo false;
}

?>