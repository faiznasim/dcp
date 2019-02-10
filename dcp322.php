<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%s %s", $a, $b);
    $size1 = strlen($a);
    $size2 = strlen($b);
    $str1 = $a;
    $str2 = $b;
    $flag = 0;
    if (strcmp($str1, $str2) == 0)
    {
        $flag = 1;
    }
    else if ($size1 == $size2)
    {
        for ($j = 0; $j < $size1-1; $j++)
        {
            $z = $str1[0];
            $str1 = substr($str1, 1, $size1-1);
            $str1 = $str1.$z;
            if (strcmp($str1, $str2) == 0)
            {
                $flag = 1;
                break;
            }
        }
    }
    
    if ($flag == 1)
        fprintf(STDOUT, "Yes\n");
    else
        fprintf(STDOUT, "No\n");
}




/*
<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);
for($i = 1; $i <= $t; $i++)
{
    fscanf(STDIN, "%s %s", $a, $b);
    
    $size1 = strlen($a);
    $size2 = strlen($b);
    $min = $size1;
    if ($size2 < $min)
    {
        $min = $size2;
    }
    $str1 = $a;
    $str2 = $b;
    $flag = 0;
    for ($j = 1; $j <= $min; $j++)
    {
        $size1 = strlen($str1);
        $size2 = strlen($str2);
        if ($size1 > 1 && $size2 > 1) // this condition will be applied for input => jaber kibria
        {
            $str1 = substr($str1, 1, $size1-1);
            $str2 = substr($str2, 0, $size2-1);
            fprintf(STDOUT, "For j = %d, %s\n", $j, $str1);
            fprintf(STDOUT, "For j = %d, %s\n", $j, $str2);
        }
        if (strcmp($str1, $str2) == 0)
        {
            $flag = 1;
            break;
        }
    }
    if ($flag == 1)
        fprintf(STDOUT, "Yes\n");
    else
        fprintf(STDOUT, "No\n");
}

*/