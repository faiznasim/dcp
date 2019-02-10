<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d\n", $x);
   $arr = [];
   $arr2 = [];
   for($j=0; $j < $x; $j++)
   {
      fscanf(STDIN, "%s %d\n", $arr[$j], $arr2[$j]);
   }
   $max = $arr2[0];
   $m1 = 0;
   for ($k=1; $k<sizeof($arr2); $k++)
   {
        if($arr2[$k] > $max)
        {
            $max = $arr2[$k];
            $m1 = $k;
        }
   }

   $min = $arr2[0];
   $m2 = 0;
   for ($k=1; $k<sizeof($arr2); $k++)
   {
        if($arr2[$k] < $min)
        {
            $min = $arr2[$k];
            $m2 = $k;
        }
   }
   fprintf(STDOUT, "%s %s\n", $arr[$m1], $arr[$m2]);
}