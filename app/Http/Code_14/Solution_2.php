<?php


class Solution_2
{
    /**
     *
     * 分治方法
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if ($strs == null || count($strs) == 0) {
            return '';
        } else {
            return $this->getStr($strs, 0, count($strs) - 1);
        }
    }

    function getStr($strs, $start, $end)
    {
        if ($start == $end) {
            return $strs[$start];
        } else {
            $mid = intval(($end - $start) / 2 + $start);
            $leftStr = $this->getStr($strs, $start, $mid);
            $rightStr = $this->getStr($strs, $mid+1, $end);
            return $this->getPrefix($leftStr, $rightStr);
        }
    }

    function getPrefix($leftStr, $rightStr) {
        $minLen = min(strlen($leftStr), strlen($rightStr));
        for ($i = 0; $i < $minLen; $i++) {
            if ($leftStr[$i] != $rightStr[$i]) {
                return substr($leftStr, 0, $i);
            }
        }
        return substr($leftStr, 0, $minLen);
    }
}