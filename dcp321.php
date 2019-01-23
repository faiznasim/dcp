<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    $line = trim(fgets(STDIN));
    
    $size = strlen($line);
    for ($j=0; $j<$size; $j++)
    {
        if (ctype_upper($line[$j]))
        {
            $line[$j] = strtolower($line[$j]);
        }
        else
        {
            $line[$j] = strtoupper($line[$j]);
        }
    }
    
    fprintf(STDOUT, "%s\n", $line);
}