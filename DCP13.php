<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d %d %d %d\n", $x1, $x2, $y1, $y2);
   fscanf(STDIN, "%d %d %d %d\n", $x3, $x4, $y3, $y4);
   if($x1+$x2 > $y1+$y2 && $x3+$x4 > $y3+$y4)
       fprintf(STDOUT, "Banglawash\n");
   else
       fprintf(STDOUT, "Miss\n");
}