<?php


namespace App\Http\Code_19;


class Solution_1
{
    function removeNthFromEnd($head, $n) {
       $first = new ListNode(0, $head);
       $p = $first;
       $q = $first;
       for ($i = 0; $i < $n + 1; $i++) {
           $q = $q->next;
       }

       while ($q != null) {
           $p = $p->next;
           $q = $q->next;
       }
       $p->next = $p->next->next;
       $ans = $first->next;
       return $ans;
    }
}
