<?php


namespace App\Http\COde_25;


class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }

    function addElement($head, $val) {
        $cur = $head;
        while ($cur->next != null) {
            $cur = $cur->next;
        }
        $cur->next = $val;
    }
}