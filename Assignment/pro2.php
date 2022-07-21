<?php
$physics=60;
$chemistry=70;
$biology=80;
$maths=85;
$computer=90;
echo "Physics=".$physics."<br>"."Chemistry=".$chemistry."<br>"."Biology=".$biology."<br>"."Maths=".$maths."<br>"."Computer=".$computer."<br>";
$total=$physics+$chemistry+$biology+$maths+$computer;
echo "Total=".$total."<br>";
$per=($total*100)/500;
echo "Percentage=".$per."<br>";
if($per>=70)
{
	echo "Your grade is Distinction";
}
elseif($per>=60 && $per<70)
{
	echo "Your grade is First class";
}
elseif($per>=50 && $per<60)
{
	echo "Your grade is second class";
}
elseif($per>=40 && $per<30)
{
	echo "Your grade is third class";
}
else
{
	echo "You failed";
}
?>