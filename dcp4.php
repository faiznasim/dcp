<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
while(fscanf(STDIN, "%d %d\n", $hrs, $n)!=null)
{
    $sum = 0;
    for ($i = 0; $i < $n; $i++)
    {
        fscanf(STDIN, "%d\n", $arr[$i]);
        $sum += $arr[$i];
    }
    $res = $hrs / $sum;
    $final_res = ceil($res);
    if ($final_res == 1)
        fprintf(STDOUT, "Project will finish within 1 day.\n");
    else
        fprintf(STDOUT, "Project will finish within %d days.\n", $final_res);

}
