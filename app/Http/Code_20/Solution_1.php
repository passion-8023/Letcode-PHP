<?php


namespace App\Http\Code_20;


class Solution_1
{
    function isValid($s) {
        $len = strlen($s);
        if ($len <= 1 || $len%2 != 0) {
            return false;
        }

        $stack = [];
        $arr = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];

        for ($i = 0; $i < $len; $i++) {
           if (array_key_exists($s[$i], $arr)) {
                $stack[] = $arr[$s[$i]];
                continue;
           }
           if (empty($stack)) {
               return false;
           }
           if (array_pop($stack) != $s[$i]) {
               return false;
           }
        }
        if (empty($stack)) {
            return true;
        }
        return false;
    }
}