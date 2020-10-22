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
    $prefixs = array("0701", "0702", "0703", "0704", "0705", "0706", "0708", "0802", "0803", "0804", "0805", "0806", "0807", "0808", "0809", "0810", "0811", "0812", "0813", "0814", "0815", "0816", "0817", "0818", "0901", "0902", "0903", "0904", "0905", "0906", "0907", "0908", "0909", "0913");
    
    $pre = substr($val, 0, 4); // get the first three value
    
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