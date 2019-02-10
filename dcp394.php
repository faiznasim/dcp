<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
while(($line = trim(fgets(STDIN))) != null)
{
    
    $size = strlen($line);
  //  fprintf(STDOUT, "%d\n", $size);
    $p = $size - 1;
    if ($size == 1)
        fprintf(STDOUT, "81\n");
    else
    {
        for ($i = 0; $i < $p; $i++)
        {
            $arr[$i] = "9";
        }
        $arr[$i] = "8";
        $store = $i + 1;
        for ($i = 0; $i < $p; $i++)
        {
            $arr[$store] = "0";
            $store++;
        }
        $arr[$store] = "1";
        $p = implode($arr);

        fprintf(STDOUT, "%s\n", $p);
        unset($p);
        unset($arr);
    }

}
