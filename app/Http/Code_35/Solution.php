<?php


namespace App\Http\Code_35;


class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
//        for ($i = 0; $i < count($nums); $i++) {
//            if ($nums[$i] >= $target) {
//                return $i;
//            }
//        }
//        return $i;

        //二分查找
        $len = count($nums);
        $left = 0;
        $right = $len - 1;
        while ($left <= $right) {
            $mid = intval(($right - $left) >> 1) + $left;
            if ($target == $nums[$mid]) {
                return $mid;
            } elseif ($target > $nums[$mid]) {
                $left = $mid + 1;
            } elseif ($target < $nums[$mid])  {
                $right = $mid - 1;
            }
        }
        return $right + 1;
    }
}