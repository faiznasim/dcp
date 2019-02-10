<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%d\n", $testcase); // reads number from STDIN
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d\n", $n);
   $p = $n * 3;
   $q = $p - 1;
   $r = $q - 1;
   if ($n % 2 == 1)
      fprintf(STDOUT, "Case #%d: %d %d %d\n",$i+1, $r, $q, $p);
   else
      fprintf(STDOUT, "Case #%d: %d %d %d\n",$i+1, $p, $q, $r);
}