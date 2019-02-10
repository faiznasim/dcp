<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d %d %lf %d %d\n", $cx, $cy, $r, $px, $py);
   $d = sqrt(pow($px-$cx,2) + pow($py-$cy,2));
   if($d < $r)
        fprintf(STDOUT, "Case %d: Inside\n", $i+1);
   else if($d > $r)
        fprintf(STDOUT, "Case %d: Outside\n", $i+1);
   else
        fprintf(STDOUT, "Case %d: OnCircle\n", $i+1);
}