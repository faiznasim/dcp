<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
    fscanf(STDIN, "%s\n", $s);
    $size = strlen($s);
    for ($j = 0; $j < $size - 5; $j++)
    {
        if ($j > 0 && $s[$j] >= "A" && $s[$j] <= "Z")
        {
            $p[$j] = " ".$s[$j];
        }
        else
        {
            $p[$j] = $s[$j];
        }
    }
    $res = implode($p);
    fprintf(STDOUT, "Case #%d -> %s\n", $i, $res);
    unset($p);
}