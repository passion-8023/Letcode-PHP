<?php


namespace App\Http\Code_24;


class Solution_2
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function swapPairs($head) {
//        $newNode = new ListNode(-1, $head);
//        $tmp = $newNode;
//        $a = $newNode;
//        $b = $newNode;
//        while ($b != null && $b->next != null && $b->next->next != null) {
//            $a = $a->next;
//            $b = $b->next->next;
//            $tmp->next = $b;
//
//            //交换a 和 b 的位置
//            $a->next = $b->next;
//            $b->next = $a;
//
//            $tmp = $a;
//            $b = $a;
//        }
//        return $newNode->next;

        /**
         * 方法二
         */
        /**
         *
         *         list     tmp
         * head    0        1       2      3        4
         *
         */
        $head = new ListNode(0, $head);
        $list = $head;
        while ($list->next != null && $list->next->next != null) {
            $tmp = $list->next;
            $list->next = $list->next->next;
            $tmp->next = $list->next->next;
            $list->next->next = $tmp;

            $list = $tmp;
        }
        return $head->next;
    }
}