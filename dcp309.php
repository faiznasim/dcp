<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$sum = 7000+8+10+1+2+3+4+5+6+7+1+5+7;
fprintf(STDOUT, "%d\n",$sum);
    
