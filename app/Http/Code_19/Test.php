<?php


namespace App\Http\Code_19;
require_once('app/Http/Code_19/ListNode.php');

class Test
{
    public $head; // 头节点

    public function __construct()
    {
        $this->head = new ListNode();
    }

    public function getNode($val = 0, $name = '', $nickname = '') {
        $node = new ListNode($val, $name, $nickname);
        return $node;
    }

    public function addElement($newNode) {
        $current = $this->head;
        $flag = true;
        while ($current->next != null) {
            if ($current->next->val > $newNode->val) {
                break;
            } elseif ($current->next->val == $newNode->val) {
                $flag = false;
                echo "</br>不要抢位置啊，". $current->next->val ."的位置，人家都已经占好的啦！";
            }
            $current = $current->next;
        }
        if ($flag) {
            $newNode->next = $current->next;
            $current->next = $newNode;
        }
    }

    public function delElement($val) {
        $current  =  $this->head;
        while ($current->next != null) {
            if ($current->next->val == $val) {
                break;
            }
            $current = $current->next;
        }
        if ($current->next == null) {
            echo "</br>没有你要删除的元素编号：". $val;
        } else {
            $current->next = $current->next->next;
        }
    }

    public function updateElement($newNode) {
        $current = $this->head;
        while ($current->next != null) {
            if ($current->next->val == $newNode->val) {
                break;
            }
            $current = $current->next;
        }
        if ($current->next == null) {
            echo "</br>你需要修改的：". $newNode->val."不存在";
        } else {
            $current->next->name =  $newNode->name;
            $current->next->nickname =  $newNode->nickname;
        }
    }

    public function showElement() {
        $current = $this->head;
        while ($current->next != null) {
            echo "</br>编号：" . $current->next->val . "姓名：" . $current->next->name . "昵称：" . $current->next->nickname;

            $current = $current->next;
        }
    }
}