<?php
namespace App\Http\Code_13;

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $codeArr = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $num = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($codeArr[$s[$i]] >= $codeArr[$s[$i+1]]) {
                $num += $codeArr[$s[$i]];
            } else {
                $num -= $codeArr[$s[$i]];
            }
        }
        return $num;
    }
}