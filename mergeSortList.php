<?php
/*
 * Merge two sorted linked lists and return it as a new list. The new list should be made by splicing together the nodes of the first two lists
 * 合并两个有序数组，其中a1的空间足够大
 */
function mergeSortedList(array &$a1, array $a2) {
    $len1 = count($a1);
    $len2 = count($a2);
    $len = $len1+$len2;
    $tail1 = $len1-1;
    $tail2 = $len2-1;
    $tail = $len-1;
    while ($tail1 >= 0 && $tail2 >= 0) {
        if ($a1[$tail1] > $a2[$tail2]) {
            $a1[$tail] = $a1[$tail1];
            $tail1--;
        } else {
            $a1[$tail] = $a2[$tail2];
            $tail2--;
        }
        $tail--;
    }
    while ($tail2 >= 0) {
        $a1[$tail--] = $a2[$tail2--];
    }
}

$a1 = [2,5,6,9];
$a2 = [1,4,7,30,33];
mergeSortedList($a1,$a2);
print_r($a1);
