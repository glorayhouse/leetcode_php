<?php
/**
 * Given an array of integers, every element appears twice except for one. Find that single one.
Note:
Your algorithm should have a linear runtime complexity. Could you implement it without using extra memory?
 * @param $arr
 * @return int
 */
function singleNumber($arr) {
    $res = 0;
    foreach ($arr as $val) {
        $res ^= $val;
    }
    /*
    for ($i = 1; $i < sizeof($arr); $i++) {
        $res = $res ^ $arr[$i];
    }
     */
    return $res;
}

$arr = [1122,3,3,2,5,434,1,2,434,1,5];
$ret = singleNumber($arr);
print_r($ret);
