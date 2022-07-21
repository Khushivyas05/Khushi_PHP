<?php
$marks=array(40,50,20,30,20);
foreach($marks as $m)
{
	if($m==40)
	{
		continue;
	}
	echo $m."<br>";
}
?>