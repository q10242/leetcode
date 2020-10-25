/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */
<?
// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if($s == "") {
            return true;
        }
        switch ($s[0]) {
            case '(':
                $closeSymble = ")";
                break;
            case '[':
                $closeSymble = "]";
                break;
            case '{':
                $closeSymble = "}";
                break;
            default:
                return false;
                break;
        }
        $counter = 0;
        for ($i=0; $i < strlen($s); $i++) { 
            if($s[$i] == $s[0]) {
                $counter += 1;
            } elseif ($s[$i] == $closeSymble) {
                $counter -= 1;
            }
            
            if ($counter == 0) {
                if($i == strlen($s)-1) {
                    return $this->isValid(substr($s, 1, $i-1));
                }
                if($i == 1 ) {
                    return $this->isValid(substr($s, 2, strlen($s)-1));
                }
                return (
                    $this->isValid(substr($s, 1, $i-1)) && $this->isValid(substr($s, $i+1, strlen($s)-1))
                    );
            }
        }
    }
}
// @lc code=end

