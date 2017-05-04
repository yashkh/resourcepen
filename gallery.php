<?php

session_start();

if(!isset($_SESSION['Username']))
{
	echo "you need to login first";
	echo "<br>";
	echo ('<a href="login.php" >Login </a>');
}
else
{

	$string2=$_SESSION['Username'];

	if (strlen($string2)==11 &&  substr_compare($string2, '60003', 0,4)==0)
	{
		echo "hi djite";
	}
	else
	{
		echo "You are not authorized to view this page";
	}

}

?>
