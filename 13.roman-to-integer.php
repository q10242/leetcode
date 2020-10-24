/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */
<?
// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $dict = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $two_digit_dict = [
            'IV' => 4,
            'IX' => 9,
            'XL' => 40,
            'XC' => 90,
            'CD' => 400,
            'CM' => 900
            
        ];
        $result = 0;

        foreach($two_digit_dict as $key => $value) {
            $result += substr_count($s, $key) * $value;
            $s = str_replace( $key, '', $s);
        }

        for($i = 0; $i< strlen($s); $i++) {
            $result += $dict[$s[$i]];
        }
        return $result;
    }

}

// @lc code=end

