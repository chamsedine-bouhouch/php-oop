<?php
$fruit = array("apple","banana","mango","orange","strawbary");

sort($fruit);       //arrange in ascending order
echo "<pre>";
print_r($fruit);

rsort( $fruit);     //sort in descending order
foreach($fruit as $val)
{
    echo $val."<br>";
}

$girl = array("krisha"=>20,"yashvi"=>30,"ritu"=>4,"pinal"=>80);
asort($girl);       //sort in ascending order according to value
print_r($girl);

ksort($girl);   //sort in ascending order according to key
print_r($girl);     

arsort($girl);      //sort in descending order according to value
print_r($girl);

krsort($girl);      //sort in descending order according to key
print_r($girl);
?>