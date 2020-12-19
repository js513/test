<?php

$sec = 1216;
$in = 10000;
$fi = 99999999;

$n1 = intdiv($in, $sec) + 1;
$n2 = intdiv($fi, $sec);
echo "Random Value is ". rand($n1, $n2) * $sec;
?>
