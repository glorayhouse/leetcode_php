<?php
/*
 *Given a binary tree, check whether it is a mirror of itself (ie, symmetric around its center).

For example, this binary tree [1,2,2,3,4,4,3] is symmetric:

    1
   / \
  2   2
 / \ / \
3  4 4  3
But the following [1,2,2,null,3,null,3] is not:
    1
   / \
  2   2
   \   \
   3    3
 */
class TreeNode{
    var $val;
    var $left = null;
    var $right = null;
    function __construct($x) {
        $this->val = $x;
    }
}
function symmetricTree(TreeNode $root){
    if (!$root) return true;
    return helper($root->left, $root->right);
}

function helper(TreeNode $left, TreeNode $right){
    if(!$left && !$right){
        return true;
    } else if (!$left || !$right) {
        return false;
    }
    if($left->val != $right->val)
        return false;
    return helper($left->left, $right->right) && helper($left->right, $right->left);
}

