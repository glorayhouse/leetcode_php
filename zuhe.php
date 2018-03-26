<?php
//全排列，组合

function swap(&$arr, $i, $j){
    $tmp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $tmp;
}

function premedi($arr,$start){
    $count = count($arr);
    //如果已经到了数组的最后一个元素，前面的元素已经排好，输出。
    if ($start == $count-1) {
        print_r($arr);
    }

    for ($i=$start; $i<$count; $i++){
        //把第一个元素分别与后面的元素进行交换，递归的调用其子数组进行排序
        swap($arr,$i,$start);
        premedi($arr,$start+1);
        //如果不交换回来会出错，比如说第一次1、2交换，第一个位置为2，子数组排序返回后如果不将1、2交换回来第二次交换的时候就会将2、3交换，因此必须将1、2交换使1还是在第一个位置
        swap($arr,$i,$start);
    }
}

$arr = [1,2,3,4];
premedi($arr,0);
