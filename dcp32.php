<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d %d %d %d\n", $x1, $y1, $x2, $y2);
   $res = abs($x2 - $x1) + abs($y2-$y1);
   fprintf(STDOUT, "Case %d: %d\n", $i+1, $res);
}