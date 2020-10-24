/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i = 0; $i < count($nums); $i++) {
            for($j = $i; $j < count($nums); $j++) {
                if( ($nums[$i] + $nums[$j] == $target) && ($i != $j) ) {
                    return [$i, $j];
                }
            }
        }
    }
}
// @lc code=end

