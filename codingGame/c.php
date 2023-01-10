<?php
$ts=[-15, -7, -9, -14, -12];
public function computeClosestToZero(array $ts) {
  // Write your code here
  // To debug (equivalent to var_dump): error_log(var_export($var, true));
  $min=$ts[0];
  error_log(var_export($ts, true));
  if (count($ts)===0) return 0;

  for($i=0;$i<count($ts);$i++){
     if(abs($ts[$i])<$min) $min=$ts[$i];
  }

//   for($i=0;$i<count($ts);$i++){
//     if($ts[$i]===-$min) return abs( $min);
//  }
  echo $min;
}
 GlobalComputeClosestToZero(array (-15, -7, -9, -14, -12));
?>