<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d\n", $n);
   if ($n >= 120)
      fprintf(STDOUT, "Good Boy Sifat\n");
   else
      fprintf(STDOUT, "Naughty Boy Sifat\n");
}