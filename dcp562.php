<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%d %d\n", $a, $b);
    if ($a > $b)
    {
        fprintf(STDOUT, "Argentina %d - %d Brazil\n",$a, $b);
    }
    else
    {
        fprintf(STDOUT, "Brazil %d - %d Argentina\n",$b, $a);
    }
}