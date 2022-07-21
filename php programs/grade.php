<h1>Marksheet</h1>
<?php
$maths=80;
$science=60;
$ss=82;
$english=65;
echo "<h3>Marks : </h3>"."<br>";
echo "Maths = ".$maths."<br>"."Science = ".$science."<br>"."SS = ".$ss."<br>"."English = ".$english."<br>";

$total=$maths+$science+$ss+$english;
echo "Total = ".$total."<br>";

$per=($total*100)/400;
echo "Percentage = ".$per."<br>";

if($per>=70)
	echo "Your class is Distinction class";
elseif($per>=60 && $per<70)
	echo "Your class is First class";
elseif($per>=50 && $per<60)
	echo "Your class is Second class";
elseif($per>=40 && $per<50)  
	echo "Your class is Third class";
else
	echo "You failed.";
?>