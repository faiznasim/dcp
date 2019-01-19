<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%d\n", $n);
    $x = pow(2,$n) - 2;
    $b = decbin($x);
    $arr = str_split($b);
    $size = sizeof($arr);
    if ($size == 1)
    {
        fprintf(STDOUT, "%d 00%d\n", $n, $arr[0]);
    }
    else if($size == 2)
    {
        fprintf(STDOUT, "%d 0%d%d\n", $n, $arr[0], $arr[1]);
    }
    else
        fprintf(STDOUT, "%d %d%d%d\n", $n, $arr[$size-3], $arr[$size-2], $arr[$size-1]);
}

