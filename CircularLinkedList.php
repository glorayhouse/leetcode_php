<?php

/**
 * php circular linked list implementation
 */
class Node {
    public $data;
    public $link;
    function __construct($data, $next = NULL) {
        $this->data = $data;
        $this->link = $next;
    }
}

class CircularLinkedList {
    private $first;
    private $current;
    public $count;

    function __construct() {
        $this->first = null;
        $this->current = null;
        $this->count = 0;
    }

    function isEmpty() {
        return ($this->first == null);
    }

    function push($data) {
        $p = new Node($data);
        //var_dump($p);
        if ($this->isEmpty()) {
            $this->first = $p;
            $this->current = $this->first;
        } else {
            $q = $this->first;
            while ($q->link != null)
                $q = $q->link;
            $q->link = $p;
        }
        $this->count++;
    }

    function find($value) {
        $q = $this->first;
        while ($q->link != null) {
            if ($q->data == $value) {
                $this->current = $q;
                return true;
            }
            $q = $q->link;
        }
        return false;
    }

    function getNext(){
        $result = $this->current->data;
        $this->current = $this->current->link;
        return $result;
    }
}

$l = new CircularLinkedList();
$l->push(5);
$l->push(6);
$l->push(7);
$l->push(8);
echo $l->count.PHP_EOL;
var_dump($l->find(5));

for ($j = 0; $j<=30; $j++) {
    $result = $l->getNext();
    echo $result.PHP_EOL;
}
