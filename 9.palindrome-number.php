/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */
<?
// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0) {
            return false;
        }
        $str_x = (string)($x);
        return  $str_x == strrev($str_x);
        
    }
}
// @lc code=end

