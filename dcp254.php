<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $p);
for($i = 0; $i < $p; $i++)
{
    fscanf(STDIN, "%d %d %d %d\n", $b, $s, $g, $r);
    $res[$i] = ($b * 1) + ($s * 3) + ($g * 10) - ($r * 5);
    if ($res[$i] < 0)
        fprintf(STDOUT, "Player %d: 0\n", $i+1);
    else
        fprintf(STDOUT, "Player %d: %d\n", $i+1, $res[$i]);
}

$size = sizeof($res);
$max = $res[0];
   for ($j = 1; $j < $size; $j++)
   {
        if ($res[$j] > $max)
        {
            $max = $res[$j];
        }
   }

fprintf(STDOUT, "High Score = %d\n", $max);