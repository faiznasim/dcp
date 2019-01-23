<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$p = 603 / 3;
$q = (300 * 2) / 3;
$res = $p + $q + 1; 
fprintf(STDOUT, "%d\n", $res);