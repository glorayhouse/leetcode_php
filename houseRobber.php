<?php
/**
 *You are a professional robber planning to rob houses along a street. Each house has a certain amount of money stashed, the only constraint stopping you from robbing each of them is that adjacent houses have security system connected and it will automatically contact the police if two adjacent houses were broken into on the same night.
 *Given a list of non-negative integers representing the amount of money of each house, determine the maximum amount of money you can rob tonight without alerting the police.
 *一般来说，给定一个规则，让我们求任意状态下的解，都是用动态规划。这里的规则是劫匪不能同时抢劫相邻的屋子，即我们在累加时，只有两种选择：
//1.如果选择了抢劫上一个屋子，那么就不能抢劫当前的屋子，所以最大收益就是抢劫上一个屋子的收益;2.如果选择抢劫当前屋子，就不能抢劫上一个屋子，所以最大收益是到上一个屋子的上一个屋子为止的最大收益，加上当前屋子里有的钱.
//dp[i]表示当前i下的最大收益，递推公式：dp[i] = max(dp[i-2]+nums[i], dp[i-1])
//本来我们是要用一个dp数组来保存之前的结果的。但实际上我们只需要上一次和上上次的结果，所以可以用两个变量就行了
 * @param $arr
 * @return int|mixed
 */
function houseRobber($arr) {
    $size = count($arr);
    if ($size <= 1)
        return $size == 0 ? 0 : $arr[0];
    $pre = $arr[0];
    $cur = max($arr[0], $arr[1]);
    for($i = 2; $i < $size; $i++) {
        $tmp = $cur;
        $cur = max($pre+$arr[$i], $cur);
        $pre = $tmp;
    }
    return $cur;
}

$arr = [1,2,5];
$ret = houseRobber($arr);
print_r($ret);
