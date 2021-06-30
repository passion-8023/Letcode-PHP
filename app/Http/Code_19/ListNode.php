<?php


namespace App\Http\Code_19;


class ListNode {
    public $val = 0;
    public $name = '';
    public $nickname = '';
    public $next = null;
    function __construct($val = 0, $name = '', $nickname = '', $next = null) {
        $this->val = $val;
        $this->name = $name;
        $this->nickname = $nickname;
        $this->next = $next;
    }
}