<?php


namespace App\Http\Code_20;


class Solution
{
    /**
     * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串 s ，判断字符串是否有效。
     * 有效字符串需满足：
     * 左括号必须用相同类型的右括号闭合。
     * 左括号必须以正确的顺序闭合。
     * 来源：力扣（LeetCode）
     * 链接：https://leetcode-cn.com/problems/valid-parentheses
     * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        //第一步：定义一个空栈
        $stack = [];
        $dic = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];
        //第二步：遍历字符串，入栈，入栈时判断是否和栈顶元素相同，相同则抵消出栈
        $len = strlen($s);
        if ($len % 2 != 0) {
            return false;
        }
        for ($i = 0; $i < $len; $i++) {
            if (isset($dic[$s[$i]])) {
                if (count($stack) == 0 || $dic[$s[$i]] != end($stack)) {
                    return false;
                }
                array_pop($stack);
            } else {
                array_push($stack, $s[$i]);
            }
        }
        return count($stack) == 0;
    }
}