<?php /* PHP 7 code below */ ?>
<?php

function closestToZero(array $ints)
{
    if (count($ints) == 0) return 0;
    else {
        $min = (int) $ints[0];
        for ($i = 1; $i < count($ints); $i++) {
            if (abs($ints[$i]) < abs($min)) {
                $min = (int) $ints[$i];
            } else if ($ints[$i] == -$min) {
                $min = (int) abs($ints[$i]);
            } else if ($ints[$i] == $min) {
                // $min = (int) $ints[$i];
            }
        }
    }
    echo $min;
}
$ints = array(-5, 5);
closestToZero($ints);
?>