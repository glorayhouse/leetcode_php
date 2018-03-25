<?php
/*
 * Find the contiguous subarray within an array (containing at least one number) which has the largest sum.
 * For example, given the array [-2,1,-3,4,-1,2,1,-5,4],
 * the contiguous subarray [4,-1,2,1] has the largest sum = 6.
 */
function maxSumSubarray(array $arr) {
    $preMax = 0;
    $curMax = 0;
    $subarray = [];
    foreach ($arr as $val) {
        $preMax = max($preMax+$val,$val);
        $curMax = max($preMax, $curMax);
    }
    return $curMax;
}

$arr=[-2,1,-3,4,-1,2,1,-5,4];
$ret=maxSumSubarray($arr);
print_r($ret);
