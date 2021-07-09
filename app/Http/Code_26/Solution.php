<?php


namespace App\Http\Code_26;


class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
//        $len = count($nums);
//        $tmp = $nums[0];
//        for ($i = 1; $i < $len; $i++) {
//            if ($tmp == $nums[$i]) {
//                unset($nums[$i-1]);
//            }
//            $tmp = $nums[$i];
//        }
//        return count($nums);


        $len = count($nums);
        if ($len == 0) {
             return $len;
        }
        $low = 1;
        for ($fast = 1; $fast < $len; $fast++) {
            if ($nums[$fast] != $nums[$fast-1]) {
                $nums[$low] = $nums[$fast];
                $low++;
            }
        }
        return $low;
    }
}