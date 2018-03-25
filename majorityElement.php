<?php
/*
 * Given an array of size n, find the majority element. The majority element is the element that appears more than ⌊ n/2 ⌋ times.
You may assume that the array is non-empty and the majority element always exist in the array.
 */
function majorityElement($arr){
    $len = count($arr);
    $map = [];
    for ($i = 0; $i < $len; $i++) {
        $map[$arr[$i]] += 1;
        if(2*$map[$arr[$i]] >= $len) {
            return $arr[$i];
        }
    }
}

$arr = [1,2,1,2,3,1,1];
$ret = majorityElement($arr);
print_r($ret);
