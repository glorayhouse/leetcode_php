<?php
/**
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * Example:
 * Given nums = [2, 7, 11, 15], target = 9,
 * Because nums[0] + nums[1] = 2 + 7 = 9,
 * return [0, 1].
 * @param $arr
 * @param $target
 * @return array
 */
function twoSum(&$arr, $target){
    $len = count($arr);
    $map = []; 
    for($i=0; $i<$len; $i++){
        if(array_key_exists($target-$arr[$i],$map)){
            return [$i, $map[$target-$arr[$i]]];
        }   
        $map[$arr[$i]] = $i; 
    }   
    return []; 
}

$arr = [2,7,11,15];
$target = 26; 
$ret = twoSum($arr,$target);
print_r($ret);
