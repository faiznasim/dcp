<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%d\n", $n);
    $x = pow(2,$n) - 2;
    $store = $x;
    $c = 0;
    while($store != 0 && $x > 3) 
    {
        $arr[$c] = $store % 2;
        $store = (int) $store/2;
        $c++;
    }
    if ($x == 0)
    {
        fprintf(STDOUT, "%d 000\n", $n);
    }
    else if($x == 1)
    {
        fprintf(STDOUT, "%d 001\n", $n);
    }
    else if($x == 2)
    {
        fprintf(STDOUT, "%d 010\n", $n);
    } 
    else if($x == 3)
    {
        fprintf(STDOUT, "%d 011\n", $n);
    }
    else
        fprintf(STDOUT, "%d %d%d%d\n", $n, $arr[2], $arr[1], $arr[0]);
}

