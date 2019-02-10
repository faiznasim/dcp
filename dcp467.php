<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
    fscanf(STDIN, "%s\n", $s);
    $size = strlen($s);
    if ($size == 12)
    {
        fprintf(STDOUT, "Happy New Year-2018\n");
    }
    else
    {
        $p = $size - 12;
        $res = 2018 + $p;
        fprintf(STDOUT, "Happy New Year-%d\n", $res);
    }

}