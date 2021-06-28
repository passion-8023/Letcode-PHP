<?php
namespace App\Http\Code_17;

class Solution
{
    protected $arr = [
        '2' => 'abc',
        '3' => 'def',
        '4' => 'ghi',
        '5' => 'jkl',
        '6' => 'mno',
        '7' => 'pqrs',
        '8' => 'tuv',
        '9' => 'wxyz',
    ];

    protected $resArr = [];
    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
       if (strlen($digits) == 0) {
            return $this->resArr;
       }
       $this->backtrack($digits, 0, '');
       return $this->resArr;
    }

    function backtrack($digits, $index, $str) {
        if ($index == strlen($digits)) {
            $this->resArr[] = $str;
        } else {
            $digit = $digits[$index];
            $strs = $this->arr[$digit];
            for ($i = 0; $i < strlen($strs); $i++) {
                $this->backtrack($digits, $index+1, $str . $strs[$i]);
            }
        }
    }
}