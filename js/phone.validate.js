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
    var prefixs = ["080", "081", "070", "090"]; // prefixs
    var pre = val.substring(0, 3); // get the first three string

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