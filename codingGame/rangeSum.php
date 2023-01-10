<?php 
    /**
     * @return integer the sum of integers whose index is between n1 and n2
     */
    function calc($array, $n1, $n2) {
        $sum=0;
        for($i=$n1;$i<=$n2;$i++){
            $sum=$sum+$array[$i];
        }
        return $sum;
    }
?>