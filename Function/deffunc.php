<?php
function default_func($name,$country="India")
{
	echo "My name is ".$name."and my country is".$country."<br>";
}
default_func("Khushi");
default_func("Khushi","London");
default_func("Khushi",null);
?>