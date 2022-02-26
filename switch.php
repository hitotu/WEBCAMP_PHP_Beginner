<?php

$i = 1;
switch($1) {
    case 0:
        echo "iは0です \n";
        break;

    case 1:
        echo "iは1です \n";
        break;

    default:
        echo "iは0と1以外です \n";
        break;
}

$i = 2;
switch($1) {
    case '2a':
        echo "iは'2a'です \n";
        break;

    case '2';
        echo "iは'2'(string)です \n";
        break;

    case 2:
        echo "iは2(int)です \n";
        break;
}

$i = 2;
$s = match($i) {
    '2a' => "i は '2a'です \n",
    '2' => "i は '2'(string)です \n",
    2 => "i は 2(int)です \n",
};
//
echo $s;