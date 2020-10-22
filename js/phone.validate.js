function validate_phone(val)
{
    // @val is not Numeric String
    // Or if length is not eleven
    // @return false
    if (isNaN(val) || val.length != 11)
        return false;

    // set a default status
    var valid = false;  

    // Available prefixs
    // You can add as much
    var prefixs = ["0701", "0702", "0703", "0704", "0705", "0706", "0708", "0802", "0803", "0804", "0805", "0806", "0807", "0808", "0809", "0810", "0811", "0812", "0813", "0814", "0815", "0816", "0817", "0818", "0901", "0902", "0903", "0904", "0905", "0906", "0907", "0908", "0909", "0913"]; // prefixs
    var pre = val.substring(0, 4); // get the first three string

    // Iterate over each prefix 
    // to see if any match
    for (var i = 0; i < prefixs.length; i++) {
        if (pre == prefixs[i]) {
            valid = true; // true
            break; // stop loop
        }
    }

    return valid; // return true or false
}