<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    $line = trim(fgets(STDIN));
    $l = strlen($line);
    $flag = 0;
    for ($p = 0; $p < $l; $p++)
    {
        if ($line[$p] == "r")
        {
            $flag = 1;
            break;
        }
    }
    if ($flag == 0)
        fprintf(STDOUT, "Vely easy\n");
    else
        fprintf(STDOUT, "Not vely easy\n");
}

