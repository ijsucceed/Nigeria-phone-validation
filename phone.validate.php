<?php
/* Phone number validation function
 * This function validate
 * Nigeria Local phone number
 * Visit phpout.com for more Help
 */

function validate_phone($val) {
    /* Validate local phone number
     * $val Type String is the number passed
     * @return true if valid
     * else false if not valid
     */
    // Check value
    // if it Numeric type
    // If it up to 11
    // return false if it not
    if(!is_numeric($val) || strlen($val) != 11)
        return false;
    // Default prefixs
    // You can add as much
    $prefixs = array("080", "081", "070", "090");
    
    $pre = substr($val, 0, 3); // get the first three value
    
    // set valid to false
    $valid = false; 
    
    foreach ($prefixs as $prefix) {
        if($pre == $prefix) {
            $valid = true;
            break;
        }
    }
    return $valid; // return the result
}

?>
