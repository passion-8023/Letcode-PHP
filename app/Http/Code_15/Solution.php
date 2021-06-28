<?php


class Solution
{
    /**
     * 给你一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？请你找出所有和为 0 且不重复的三元组。
     * 注意：答案中不可以包含重复的三元组。
     * 来源：力扣（LeetCode）
     * 链接：https://leetcode-cn.com/problems/3sum
     * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
     *
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        if (empty($nums) || count($nums) < 3) {
            return [];
        }
        $res = [];
        sort($nums);    // [-1,0,1,2,-1,-4] => [-4,-1,-1,0,1,2]
        $count = count($nums); // 6
        for ($first = 0; $first < $count; $first++) {
            if ($first > 0 && $nums[$first] == $nums[$first-1]) {
                continue;
            }
            $third = $count - 1; // 5
            $target = -$nums[$first]; // 4
            for ($second = $first + 1; $second < $count; $second++) {
                if ($second > $first + 1 && $nums[$second] == $nums[$second - 1]) {
                    continue;
                }
                // 1
                while ($second < $third && $nums[$second] + $nums[$third] > $target) {
                    $third--;
                }
                if ($second == $third) {
                    break;
                }
                if ($nums[$second] + $nums[$third] == $target) {
                    $res[] = [$nums[$first], $nums[$second], $nums[$third]];
                }
            }
        }
        return $res;
    }



    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum1($nums){
        $res = [];
        $len = count($nums);
        if (!$nums || $len < 3){
            return $res;
        }
        sort($nums);
        foreach($nums as $k => $v){
            if( $v > 0){
                break;
            }
            if ($k > 0 && $v === $nums[$k-1]){
                continue;
            }

            $l = $k+1;
            $r = $len-1;
            while($l < $r){ //[-4,-1,-1,0,1,2]
                $sum = $v + $nums[$l] + $nums[$r];
                if ($sum > 0){
                    $r--;
                }else if ($sum < 0){
                    $l++;
                }else{
                    $res[]= [$v,$nums[$l],$nums[$r]];
                    $l++;
                    while($nums[$l] === $nums[$l-1]){
                        $l++;
                    }
                }
            }
        }

        return $res;

    }
}