<?php
//
$i = 0;
$x = 1;
//
echo "{$i} \n";
echo "{$x} \n";
//
do {
    $y = $i + $x;
    echo "{$y} \n";
    $i = $x;
    $x = $y;
} while ($y <= 10000);