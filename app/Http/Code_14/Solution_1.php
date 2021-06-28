<?php


class Solution_1
{
    /**
     * 纵向扫描
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if ($strs == null || count($strs) == 0) {
            return '';
        }
        $len = strlen($strs[0]);
        $count = count($strs);
        for ($i = 0; $i < $len; $i++) {
            $char = $strs[0][$i];
            for ($j = 1; $j < $count; $j++) {
                if ($i == strlen($strs[$j]) || $strs[$j][$i] != $char) {
                    return substr($strs[0], 0, $i);
                }
            }
        }
        return $strs[0];
    }
}