<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%s", $s);
    if ($s[0] == "Q")
    {
        fprintf(STDOUT,"I am going to ask you this one time, where is Gamora?\n");
    }
    else if ($s[0] == "S")
    {
        fprintf(STDOUT,"I will do you one better, who is Gamora?\n");
    }
    else if ($s[0] == "D")
    {
        fprintf(STDOUT,"I will do you one better, why is Gamora?\n");
    }
    else
    fprintf(STDOUT,"What is Gamora?\n");

}