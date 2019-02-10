<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
   fscanf(STDIN, "%d\n", $n);
   $p = $n*($n+1)/2;
   fprintf(STDOUT, "%d\n", $p);
}