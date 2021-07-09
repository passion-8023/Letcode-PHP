<?php


namespace App\Http\Code_28;


class Solution
{
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
//        if ($needle == '') {
//            return 0;
//        }
//        $n = strlen($haystack);
//        $m = strlen($needle);
//        $i = 0;
//        $j = 0;
//        while ($i < $n && $j < $m) {
//            if ($haystack[$i] == $needle[$j]) {
//                $i++;$j++;
//            } else {
//                $i = $i-$j+1;
//                $j = 0;
//            }
//        }
//        if ($j == $m) {
//            return $i - $j;
//        } else {
//            return -1;
//        }

        if ($needle == "") {
            return 0;
        }
        $n = strlen($haystack);
        $m = strlen($needle);
        $i = 0;
        $j = 0;
        $next = $this->getNext($needle);
        while ($i < $n && $j < $m) {
            if ($haystack[$i] == $needle[$j]) {
                $i++;
                $j++;
            } else {
                if ($j == 0) {
                   $i++;
                } else {
                    $j = $next[$j-1];
                }
            }
        }
        if ($j == $m) {
            return $i - $j;
        } else {
          return -1;
        }

    }

    function getNext($str) {
        $next[0] =  0;
        $len = strlen($str);
        $i = 0;
        $j = 1;
        while ($j < $len) {
            if ($str[$i] == $str[$j]) {
                $next[$j] = $i + 1;
                $i++;
                $j++;
            } else {
                if ($i == 0) {
                    $next[$j] = 0;
                    $j++;
                } else {
                    $i = $next[$i-1];
                }
            }
        }
        return $next;
    }
}



