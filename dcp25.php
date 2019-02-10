<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($j = 1; $j <= $testcase; $j++)
{
   fscanf(STDIN, "%s\n", $l);
   $p = strtolower($l);
   $q = strlen($p);
   $z = $q - 1;
   $r = $q / 2;
   $s = (int)$r;
   $flag = 0;
   for ($i = 0; $i < $s; $i++)
   {
       if ($p[$i] == $p[$z])
       {
           $flag = 0;
           $z--;
       }
       else
       {
           $flag = 1;
           break;
       }
   }
   if ($flag == 0)
    fprintf(STDOUT, "Yes\n");
   else 
   fprintf(STDOUT, "No\n");
}