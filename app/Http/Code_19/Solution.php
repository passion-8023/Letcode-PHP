<?php


namespace App\Http\Code_19;

require_once('app/Http/Code_19/ListNode.php');


/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * 给你一个链表，删除链表的倒数第 n 个结点，并且返回链表的头结点。
     * 进阶：你能尝试使用一趟扫描实现吗？
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $first = new ListNode(0, $head);
        $len = $this->getListNodeSize($head);
        $cur = $first;
        for ($i = 1; $i < $len - $n + 1; $i++) {
            $cur = $cur->next;
        }
        $cur->next = $cur->next->next;
        $ans = $first->next;
        return $ans;
    }

    function getListNodeSize($head) {
        $len = 0;
        while ($head != null) {
            $len++;
            $head = $head->next;
        }
        return $len;
    }

}