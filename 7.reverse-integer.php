/*
 * @lc app=leetcode id=7 lang=php
 *
 * [7] Reverse Integer
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {

        $symble= 1;
        if($x < 0) {
            $symble = -1;
        }

        $rev_of_x = (
            (int)
                (strrev(
                    (String)
                        (abs($x))
                    )
                )
            );
        if($rev_of_x > 2147483647 || $rev_of_x < -2147483648) {
            return 0;
        }
        return $symble* $rev_of_x;
        
    }
}
// @lc code=end

