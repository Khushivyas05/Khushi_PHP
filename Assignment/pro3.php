<?php
$a=10;
$b=200;
$c=30;
$lar=($a>$b)?($a>$c?$a:$c):($b>$c?$b:$c);
echo "The largest number among". $a.",".$b.",".$c."is:".$lar;
?>