<?php
echo $a=10 ."<br>";

function add()
{
	$x=10;
	$y=20;
	echo $GLOBALS['z']=$x+$y."<br>";
}
add();
echo $z;


?>