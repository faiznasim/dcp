<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($pagla = 1; $pagla <= $testcase; $pagla++)
{
    fscanf(STDIN, "%s\n", $s);
    $size = strlen($s);
    $d=0;$c=0;$p=0;$r=0;$o=0;$g=0;$a=0;$m=0;$i=0;$n=0;
    for ($j = 0; $j < $size; $j++)
    {
        if ($s[$j] == "p")
        {
            $p++;
        }
        else if ($s[$j] == "r")
        {
            $r++;
        }
        else if ($s[$j] == "o")
        {
            $o++;
        }
        else if ($s[$j] == "g")
        {
            $g++;
        }
        else if ($s[$j] == "a")
        {
            $a++;
        }
        else if ($s[$j] == "m")
        {
            $m++;
        }
        else if ($s[$j] == "i")
        {
            $i++;
        }
        else if ($s[$j] == "n")
        {
            $n++;
        }
        else if ($s[$j] == "c")
        {
            $c++;
        }
        else if ($s[$j] == "d")
        {
            $d++;
        }
    }
    if ($p>=1 && $r>=2 && $o>=1 && $g>=2 && $a>=1 && $m>=2 && $i>=1 && $n>=1)
        fprintf(STDOUT, "Yes\n");
    else if ($c>=1 && $o>=1 && $d>=1 && $i>=1 && $n>=1 && $g>=1)
        fprintf(STDOUT, "Yes\n");
    else
        fprintf(STDOUT, "No\n");
}