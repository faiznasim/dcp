<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i<= $testcase; $i++)
{
   fscanf(STDIN, "%lf %lf\n", $r, $s);
   $p = $r * 2;   //diameter of circle
   $q = sqrt(2) * $s;
   $y = number_format($p, 2);
   $z = number_format($q, 2);
 //  fprintf(STDOUT, "%lf\n", $y);
  // fprintf(STDOUT, "%lf\n", $z);
  echo $y;
  echo $z;
   if ($y == $z)
        fprintf(STDOUT, "Yes\n");
   else
        fprintf(STDOUT, "No\n");
}