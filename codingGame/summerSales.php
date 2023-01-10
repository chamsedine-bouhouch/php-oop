<?php

function calculateTotalPrice(array $prices, $discount) {
  // Write your code here
  // To debug (equivalent to var_dump): error_log(var_export($var, true));
  // error_log(var_export($prices, true));
$sum=0;
for($i=0;$i<count($prices);$i++)
{
  $sum=$sum+$prices[$i];

}  
  return floor( $sum-max($prices)*($discount)/100);
}
?>