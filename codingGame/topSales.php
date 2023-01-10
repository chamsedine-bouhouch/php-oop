<?php
$array=array(-4,-5,4,1,2,4,0,9,-1);

/* Determine the periode most  */
$min=-1;
$max=count($array);
$sum=array_sum($array);
$sum_aux=0;
do {
    $sum=$sum_aux;
    $sum_aux=0;
    $min++;
    for ($i=$min+1; $i <$max ; $i++) { 
        $sum_aux=$sum_aux+$array[$i];
    }
    echo $sum_aux;
    print_r("\n");
    echo $min;
    print_r("\n");
} while ($sum< $sum_aux);

print_r("2nd loop \n");

do {
    $sum=$sum_aux;
    $sum_aux=0;
    $max--;
    for ($i=$min; $i <$max ; $i++) { 
        $sum_aux=$sum_aux+$array[$i];
    }
    echo $sum_aux;
    print_r("\n");
    echo $max;
    print_r("\n");
} while ($sum< $sum_aux);

