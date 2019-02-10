<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $n);

$line = fgets(STDIN);
$arr = explode(" ", $line);
for ($j = 0; $j < sizeof($arr); $j++)
{
    $arr[$j] = intval($arr[$j]);
}
fscanf(STDIN, "%d %d\n", $x, $k);
$q = $x; // for position
$store = $arr[$x - 1];
$count = 0;
for ($p = 1; $p <= $k; $p++,$q++)
{
    if ($q == $n)
        break;
    if ($arr[$q] > $store)
    {
        $count++;
    }
}

$q = $x - 2;
for ($p = 1; $p <= $k; $p++,$q--)
{
    if ($q < 0)
        break;
    if ($arr[$q] > $store)
    {
        $count++;
    }
}

fprintf(STDOUT,"%d\n", $count);