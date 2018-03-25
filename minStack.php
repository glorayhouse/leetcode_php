<?php
/**
 * Design a stack that supports push, pop, top, and retrieving the minimum element in constant time.

push(x) -- Push element x onto stack.
pop() -- Removes the element on top of the stack.
top() -- Get the top element.
getMin() -- Retrieve the minimum element in the stack.
Example:
MinStack minStack = new MinStack();
minStack.push(-2);
minStack.push(0);
minStack.push(-3);
minStack.getMin();   --> Returns -3.
minStack.pop();
minStack.top();      --> Returns 0.
minStack.getMin();   --> Returns -2.
 */

class MinStack {
    private $s1;
    private $s2;
    function __construct(){
        $this->s1 = new \Ds\Stack();
        $this->s2 = new \Ds\Stack();
    }

    function push($data){
        $this->s1->push($data);
        if ($this->s2->isEmpty() || $data < $this->getMin()) {
            $this->s2->push($data);
        }
    }

    function pop() {
        if ($this->s1->peek() == $this->getMin())
            $this->s2->pop();
        $this->s1->pop();
    }

    function top() {
        return $this->s1->peek();
    }
    function getMin() {
        return $this->s2->peek();
    }
}

$minStack = new MinStack();
$minStack->push(3);
$minStack->push(5);
$minStack->push(1);
$minStack->push(93);
print_r($minStack->getMin());
print_r($minStack->top());
