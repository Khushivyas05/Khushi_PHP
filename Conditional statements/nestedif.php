<?php
$a=1000;
$b=250;
$c=360;
echo "a=".$a."<br>"."b=".$b."<br>"."c=".$c."<br>";
if($a<$b)
{
	if($a<$c)
	{
		echo "a is smallest";
	}
	else
	{
		echo "a is medium";
	}
}
else
{
	echo "a is greater of all";
}

?>