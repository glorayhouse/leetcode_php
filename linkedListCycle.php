<?php
/*
 * Given a linked list, determine if it has a cycle in it.
Follow up:
Can you solve it without using extra space?
 */

class Node {
    public $data;
    public $link;
    function __construct($x) {
        $this->data = $x;
        $this->link = null;
    }
}

function hasCircle (Node $head) {
    if ($head == null || $head->link == null) return false;
    $one = $head;
    $two = $head;
    while ($two && $two->link){
        if ($one == $two)
            break;
        $one = $one->link;
        $two = $two->link->link;
    }
    return !($two == null || $two->next == null);//只要有一个为空，就说明无环
}
