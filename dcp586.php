<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%d %d %d", $b, $s, $g);
    $res = $b * 10 + $s * 50 + $g * 100;

    fprintf(STDOUT,"%d\n", $res);
}