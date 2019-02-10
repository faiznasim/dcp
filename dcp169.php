<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
  fscanf(STDIN, "%d %d\n", $r, $c);

   $arr = array();
   for ($j = 0; $j < $r; $j++)
   {
       $arr[$j] = fgets(STDIN);
   }  
   $flag = 0;
  fprintf(STDOUT, "Case %d:\n", $i);
   for ($m = 0; $m < $r; $m++)
   {
       for ($n = 0; $n < $c; $n++)
       {
            if ($arr[$m][$n] == "$")
            {
               fprintf(STDOUT, "%d,%d\n", $m+1, $n+1);
               $flag = 1;
            }
       }
   } 
   if($flag == 0)
   {
      fprintf(STDOUT, "No Gold Found\n");
   }
}