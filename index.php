<?php
$w = 15;
$x = 32;
$y = 20;
$z = 5;
$x %= $w;
$y += $x - 6;
$y++;
$w++;
$z = $y - $w;
echo "$w : $x : $y : $z";