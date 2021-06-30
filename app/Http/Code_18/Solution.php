<?php


namespace App\Http\Code_18;


class Solution
{
    /**
     *
     * 给定一个包含 n 个整数的数组 nums 和一个目标值 target，判断 nums 中是否存在四个元素 a，b，c 和 d ，使得 a + b + c + d 的值与 target 相等？找出所有满足条件且不重复的四元组。
     * 注意：答案中不可以包含重复的四元组。
     * 来源：力扣（LeetCode）
     * 链接：https://leetcode-cn.com/problems/4sum
     * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     *
     * nums = [1,0,-1,0,-2,2], target = 0   [-2, -1, 0, 0, 1, 2]
     */
    function fourSum($nums, $target) {
        $res = [];
        $len = count($nums);
        if ($nums == null || $len < 4) {
            return $res;
        }
        sort($nums);
        for ($i = 0; $i < $len - 3; $i++) {
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }
            if ($nums[$i] + $nums[$i+1] + $nums[$i+2] + $nums[$i+3] > $target) {
                break;
            }
            if ($nums[$i] + $nums[$len-3] + $nums[$len-2] + $nums[$len-1] < $target) {
                continue;
            }

            for ($j = $i + 1; $j < $len - 2; $j++) {
                if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) {
                    continue;
                }
                if ($nums[$i] + $nums[$j] + $nums[$j+1] + $nums[$j+2] > $target) {
                    break;
                }
                if ($nums[$i] + $nums[$j] + $nums[$len-2] + $nums[$len-1] < $target) {
                    continue;
                }
                $left = $j + 1;
                $right = $len - 1;
                while ($left < $right) {
                    $sum = $nums[$i] + $nums[$j] + $nums[$left] + $nums[$right];
                    if ($sum == $target) {
                        $res[] = [$nums[$i], $nums[$j], $nums[$left], $nums[$right]];
                        while ($left < $right && $nums[$left] == $nums[$left+1]) {
                            $left++;
                        }
                        $left++;
                        while ($left < $right && $nums[$right] == $nums[$right-1]) {
                            $right--;
                        }
                        $right--;
                    } else if ($sum > $target) {
                        $right--;
                    } else {
                        $left++;
                    }
                }

            }
        }
        return $res;
    }
}