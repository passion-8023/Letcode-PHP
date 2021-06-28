<?php
namespace App\Http\Code_14;

class Solution
{
    /**
     * 编写一个函数来查找字符串数组中的最长公共前缀。
     * 如果不存在公共前缀，返回空字符串 ""。
     *
     * 横向扫描
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if ($strs == null || count($strs) == 0) {
            return '';
        }
        $res = $strs[0];
        for ($i = 1; $i < count($strs); $i++) {
            $res = $this->getPrefix($res, $strs[$i]);
            if (strlen($res) == 0) {
                break;
            }
        }
        return $res;
    }

    function getPrefix($str1, $str2) {
        //获取两个字符串中最小的字符串的长度
        $length = min(strlen($str1), strlen($str2));
        //开始索引
        $index = 0;
        //按最短字符串长度遍历，判断对应索引下的字符是否相等，相等则进行下一个
        while ($index < $length && $str1[$index] == $str2[$index]) {
            $index++;
        }
        //截取字符串的前index位
        return substr($str1, 0, $index);
    }
}