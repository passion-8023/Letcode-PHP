<?php


namespace App\Http\Code_21;


class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $res = new ListNode(0);
        $cur = $res;
        while ((isset($l1)) && (isset($l2))) {
            if ($l1->val > $l2->val) {
                $cur->next = $l2;
                $l2 = $l2->next;
            } else {
                $cur->next = $l1;
                $l1 = $l1->next;
            }
            $cur = $cur->next;
        }
        if (!isset($l1)) {
            $cur->next = $l2;
        } else {
            $cur->next = $l1;
        }
        return $res->next;


//        if ($l1 == null) {
//            return $l2;
//        } elseif ($l2 == null) {
//            return $l2;
//        } elseif ($l1->val < $l2->val) {
//            $l1->next = $this->mergeTwoLists($l1->next, $l2)    ;
//            return $l1;
//        } else {
//            $l2->next = $this->mergeTwoLists($l1, $l2->next);
//            return $l2;
//        }
    }
}