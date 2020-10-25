/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */
<?
// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix  = "";
        if(count($strs) ==1) {
            return $strs[0];
        }        
        for ($i = 0; $i< strlen($strs[0]); $i++) {
            $temp = "";
            $add = true;
            $first_time = true;
            foreach ($strs as $str) {
                if($first_time) { 
                    $first_time = false;
                    continue;
                }
                if($strs[0][$i] ==  $str[$i] ) {
                    $temp = $str[$i];
                } else {
                    $add = ($add && false);
                }
            }

            if($add) {
                $prefix .= $temp;
            } else {
                break;
            }

        }    

        return $prefix;
    }
}
// @lc code=end

