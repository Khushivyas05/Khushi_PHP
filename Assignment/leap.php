<?php
for($year=1901;$year<2017;$year++)
{
	if($year%4==0)
	{
		if($year%100!=0)
		{
			echo "$year : Leap year"."<br>";
		}
	}	
	else
	{
		echo "$year : Not a leap year"."<br>";
	}
}

?>