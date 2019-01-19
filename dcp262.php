<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%d\n", $n);
    $x = pow(2,$n) - 2;

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
        fprintf(STDOUT, "%d 110\n", $n);
}

