<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%s", $s);
    if ($s == "ac")
    {
        fprintf(STDOUT,"Accepted\n");
    }
    else if ($s == "wa")
    {
        fprintf(STDOUT,"Wrong Answer\n");
    }
    else if ($s == "rte")
    {
        fprintf(STDOUT,"Run Time Error\n");
    }
    else
    fprintf(STDOUT,"Time Limit Exceeded\n");

}