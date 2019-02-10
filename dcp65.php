<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d\n", $x);
   $k = 1;
   $count = 0;
   $sum = 0;
   while($sum < $x)
   {
       $sum = $sum + $k;
       $k++;
       $count++;
   }
      fprintf(STDOUT, "%d\n", $count);
}