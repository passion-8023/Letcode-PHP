<?php


namespace App\Http\Code_22;


class Solution
{
    /**
     * 数字 n 代表生成括号的对数，请你设计一个函数，用于能够生成所有可能的并且 有效的 括号组合。
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        if ($n == 0) {
            return [];
        }
        $res = [];
            $res[0] = [null];
            $res[1] = ['()'];
            for ($i = 2; $i < $n + 1; $i++) {
                $tmp = [];
                for ($j = 0; $j < $i; $j++) {
                    $arr_1 = $res[$j];
                    $arr_2 = $res[$i - 1 - $j];
                    foreach ($arr_1 as $val_1) {
                        foreach ($arr_2 as $val_2) {
                            if ($val_1 == null) {
                                $val_1 = '';
                            }
                            if ($val_2 == null) {
                                $val_2 = '';
                            }
                            $el = '('.$val_1.')'.$val_2;
                            $tmp[] = $el;
                        }
                    }
                }
            $res[] = $tmp;
        }
        return $res[$n];
    }


    function arraySort($arr){
        $newArr = [];
        $res = [];
        for ($i = 0; $i < count($arr); $i++) {
            $newArr = array_merge($newArr, $arr[$i]);
        }
        rsort($newArr);
        $len = count($newArr);
        $i = 0;
        $tmp = true;
        foreach ($arr as $key => $value) {
            foreach ($value as $k => $v) {
                $res[$key][$k] = $newArr[$i];
                if ($len % 2 == 0) {
                    if ($i+1 == $len-1 && $tmp) {
                        $i++;
                        $tmp = false;
                        continue;
                    }
                } else {
                    if ($i == $len - 1 && $tmp) {
                        $i--;
                        $tmp = false;
                        continue;
                    }
                }
                $tmp ? $i += 2 : $i -= 2;
            }
        }
        return $res;
    }
}

