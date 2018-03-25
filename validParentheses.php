<?php
/*
 *Given a string containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 *The brackets must close in the correct order, "()" and "()[]{}" are all valid but "(]" and "([)]" are not.
 */
function validParentheses($str){
    $stack = new \Ds\Stack();
    $len = count($str);
    foreach(str_split($str) as $c){
        if ($c == '('||$c == '{'||$c == '['){
            $stack->push($c);
        } else {
            if ($c == ')'&& $stack->peek() != '('){
                return false;
            }
            if ($c == '}'&& $stack->peek() != '{'){
                return false;
            }
            if ($c == ']'&& $stack->peek() != '['){
                return false;
            }
            $stack->pop();
        }
    }
    return $stack->isEmpty();
}

$str='()[[}]]{}';
$ret = validParentheses($str);
var_dump($ret);
