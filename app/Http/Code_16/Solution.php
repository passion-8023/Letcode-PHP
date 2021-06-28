<?php


class Solution
{
    /**
     * 给定一个包括 n 个整数的数组 nums 和 一个目标值 target。找出 nums 中的三个整数，使得它们的和与 target 最接近。返回这三个数的和。假定每组输入只存在唯一答案。
     * 来源：力扣（LeetCode）
     * 链接：https://leetcode-cn.com/problems/3sum-closest
     * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        $res = 10000000;
        $len = count($nums);
        sort($nums);
        foreach ($nums as $k => $val) {
            if ($k > 0 && $nums[$k] == $nums[$k - 1]) {
                continue;
            }
            $left = $k + 1;
            $right = $len - 1;
            while ($left < $right) {
                $tmp = $val + $nums[$left] + $nums[$right];
                if ($tmp == $target) {
                    return $target;
                }
                if (abs($tmp - $target) < abs($res - $target)) {
                    $res = $tmp;
                }
                if ($tmp > $target) {
                    $start = $right - 1;
                    while ($left < $start && $nums[$start] == $nums[$right]) {
                        $start--;
                    }
                    $right = $start;
                } else {
                    $start = $left + 1;
                    while ($start < $right && $nums[$start] == $nums[$left]) {
                        $start++;
                    }
                    $left = $start;
                }
            }
        }
        return $res;
    }
}