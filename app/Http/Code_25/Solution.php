<?php


namespace App\Http\COde_25;
require_once('app/Http/Code_25/ListNode.php');


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
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function reverseKGroup($head, $k) {
        $newNode = new ListNode(0, $head);
        $pre = $newNode;
        $end = $newNode;
        while ($end->next != null) {
            for ($i = 0; $i < $k && $end != null; $i++) {
                $end = $end->next;
            }
            if ($end == null) break;
            $start = $pre->next;
            $next = $end->next;
            $end->next = null;
            $pre->next = $this->reverseNode($start);
            $start->next = $next;
            $pre = $start;
            $end = $pre;
        }
        return $newNode->next;
    }

    function reverseNode($head) {
        $cur = $head;
        $node = null;
        while ($cur != null) {
            $next = $cur->next;
            $cur->next = $node;
            $node = $cur;
            $cur = $next;
        }
        return $node;
    }
}