<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
//$testcase = 1;
for($i = 1; $i <= $testcase; $i++)
{
  fscanf(STDIN, "%d %d\n", $r, $c);
//  $r = 3;
//  $c = 3;
   $arr = array();
   for ($j = 0; $j < $r; $j++)
   {
       $arr[$j] = fgets(STDIN);
   }  
//  $arr[0] = "**#";
//  $arr[1] = "*$*";
//  $arr[2] = "###";
  fprintf(STDOUT, "Case %d:\n", $i);
   for ($m = 0; $m < $r; $m++)
   {
       for ($n = 0; $n < $c; $n++)
       {
            if ($arr[$m][$n] == "$");
            {
               fprintf(STDOUT, "%d,%d\n", $m+1, $n+1);
               // echo ($m+1).",".($n+1)."<br/>";
            }
            else
            {
               fprintf(STDOUT, "No Gold Found\n");
               echo "No Gold Found<br/>";
            }
       }
   } 
}