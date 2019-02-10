<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
    fscanf(STDIN, "%d\n", $n);
    if($n == 1 || $n == 3)
        fprintf(STDOUT, "Case %d-> YES;\n", $i);
    else
        fprintf(STDOUT, "Case %d-> NO;\n", $i);
}