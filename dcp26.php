<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%d\n", $testcase); // reads number from STDIN
for($i =0; $i<$testcase; $i++)
{
    $line = trim(fgets(STDIN));
    $res = strrev($line);

    fprintf(STDOUT, "%s\n", $res);
}