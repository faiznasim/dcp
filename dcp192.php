<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($p = 1; $p <= $testcase; $p++)
{
    fscanf(STDIN, "%d\n", $n);
    for ($j = 0; $j < $n; $j++)
    {
        for ($k = 0; $k < 1; $k++)
        {
            fscanf(STDIN, "%d %d\n", $arr[$j][$k], $arr[$j][$k+1]);
        }
    }
    for ($i=0; $i<$n; $i++)
    {
        for ($j=0; $j<$n-1; $j++)
        {
            if ($arr[$j][0] > $arr[$j+1][0])
            {
                $g = $arr[$j][0];
                $arr[$j][0] = $arr[$j+1][0];
                $arr[$j+1][0] = $g;

                $q = $arr[$j][1];
                $arr[$j][1] = $arr[$j+1][1];
                $arr[$j+1][1] = $q;
            }
        }
    }
    $r = $arr[0][0];
    $min = $arr[0][1];
    for ($i=1; $i<$n; $i++)
    {
        if($r == $arr[$i][0] && $arr[$i][1] < $min)
        {
            $min = $arr[$i][1];
        }
    }

   fprintf(STDOUT, "Case %d: %d %d\n", $p, $r, $min);
}