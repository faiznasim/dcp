<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

   fscanf(STDIN, "%d\n", $n);
   if ($n == 29 || $n == 30)
      fprintf(STDOUT, "YES\n");
   else
      fprintf(STDOUT, "NO\n");
