<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($i =0; $i<$testcase; $i++)
{
   fscanf(STDIN, "%d\n", $a);
   $b = $a / 2;
   $k = (int)$b;
   $flag = 0;
   for ($j = 2; $j <= $k; $j++)
    {
        if ($a % $j == 0)
        {
            $flag = 1;
            break;
        }

    }
    if ($flag == 0 && $a!=0 && $a!=1)
        fprintf(STDOUT, "Yes\n");
    else
        fprintf(STDOUT, "No\n");
}