<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
    fscanf(STDIN, "%s\n", $s);
    $size = strlen($s);
    $res = 0;
    for ($j = 0; $j < $size; $j++)
    {
        $a = ord($s[$j]);
        $res = $res + $a;
    }
    if($res % 20 == 0)
        fprintf(STDOUT, "Yes\n");
    else
        fprintf(STDOUT, "No\n");
}