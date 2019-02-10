<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$line = "never be so happy when you are happy and never be so sad when you are sad";

$arr = explode(" ", $line);
while(($input = trim(fgets(STDIN))) != null)
{
    $flag = 0;
    ;
    for ($i = 0; $i < sizeof($arr); $i++)
    {
        if ($arr[$i] == $input)
        {
            fprintf(STDOUT, "YES\n");
            $flag = 1;
            break;
        }
    }
    if($flag == 0)
    {
        fprintf(STDOUT, "NO\n");
    }

}