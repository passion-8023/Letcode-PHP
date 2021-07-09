<?php


namespace App\Http\Code_24;


class Solution_1
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function swapPairs($head) {
        if ($head == null || $head->next == null) {
            return $head;
        }
        $stack = [];
        $newNode = new ListNode(-1);
        $cur = $head;
        $head = $newNode;
        while ($cur != null && $cur->next != null) {
            //将两个节点放入栈中
            array_push($stack, $cur);
            array_push($stack, $cur->next);

            //让当前节点向前走两个
            $cur = $cur->next->next;

            //从栈中弹出两个节点
            $newNode->next = array_pop($stack);
            $newNode = $newNode->next;
            $newNode->next = array_pop($stack);
            $newNode = $newNode->next;
        }
        if ($cur != null) {
            $newNode->next = $cur;
        } else {
            $newNode->next = null;
        }
        return $head;
    }
}