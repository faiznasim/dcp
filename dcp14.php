<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%lf %lf %lf\n", $ab, $bc, $cd);
   $res = sqrt(pow($ab,2)+ pow($bc,2) + pow($cd,2));
   // $x = round($res, 2);
   fprintf(STDOUT, "%.2lf\n", $res);
}