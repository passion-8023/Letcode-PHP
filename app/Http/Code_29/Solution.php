<?php


namespace App\Http\Code_29;


class Solution
{
    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        $intMax = (1 << 31) - 1;
        $intMin = -1 << 31;

        //被除数为0，结果必定为0
        if ($dividend == 0) {
            return 0;
        }
        //除数为1，结果必定是被除数本身
        if ($divisor == 1) {
            return $dividend;
        }
        //除数为-1，当被除数大于最小值时，结果必定是被除数的相反数，否则统统取最大值
        if ($divisor == -1) {
            if ($dividend > $intMin) return -$dividend;
            return $intMax;
        }
        //判断结果是否为负数，被除数和除数有一个为负数则结果必定为负数
        $sign = 1;
        if (($dividend > 0 && $divisor < 0) || ($dividend < 0 && $divisor > 0)) {
            $sign = -1;
        }
        $dividend = $dividend > 0 ? $dividend : -$dividend;
        $divisor = $divisor > 0 ? $divisor : -$divisor;
        //被除数小于除数时，结果必定小于1，取整为0
        if ($dividend < $divisor) {
            return 0;
        }
        $res = $this->div($dividend, $divisor);
        if ($sign > 0) {
            return $res > $intMax ? $intMax : $res;
        } else {
            return -$res;
        }
    }

    function div($a, $b) {
        if ($a < $b) {
            return 0;
        }
        $num = 1;
        $tmp = $b;
        while (($tmp + $tmp) <= $a) {
            $num = $num + $num;
            $tmp = $tmp + $tmp;
        }
//        while (($tmp << 1) <= $a) {
//            $num = $num << 1;
//            $tmp = $tmp << 1;
//        }
        return $num + $this->div($a-$tmp, $b);
    }
}