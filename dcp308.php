<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    $line = fgets(STDIN);
    $res = (int)$line[18]*1000 + (int)$line[19]*100 + (int)$line[20]*10 + (int)$line[21];
    if ($line[16] == "a")
    {
        fprintf(STDOUT, "Shuvo nobo borsho %d\n",$res-650);
    }
    else
    {
        fprintf(STDOUT, "Shuva naya barsha %d\n",$res+650);
    }
}