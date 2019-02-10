<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
    fscanf(STDIN, "%d\n", $n);
    fscanf(STDIN, "%s\n", $s);
    $flag = 0;
    $count = 0;
    if ($s[0] == "a" || $s[0] == "e" || $s[0] == "i" || $s[0] == "o" || $s[0] == "u")
        {
            $count++;
            $flag = 1;
        }
    for ($j = 1; $j < $n; $j++)
    {
        if (($s[$j] == "a" || $s[$j] == "e" || $s[$j] == "i" || $s[$j] == "o" || $s[$j] == "u") && $flag == 0)
        {
            $count++;
            $flag = 1;
        }
        else if(!($s[$j] == "a" || $s[$j] == "e" || $s[$j] == "i" || $s[$j] == "o" || $s[$j] == "u"))
        {
            $flag = 0;
        }
    }
    fprintf(STDOUT, "Case %d: %d\n", $i, $count);
}