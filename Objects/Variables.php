<?php
$sessionUser = "Andrey";
/*
 * Role can be:
 *  Admin
 *  User
 *  Manager
 */
$sessionUserRole = "Admin";
/*
 * Operators: == equal?
 * != different than?
 */
/*
 * 1. Create a new file
 * 2. Extract the parameter userRole from
 * the query parameters and assign them
 * to a variable $userRole
 * 3. If the user is admin or manager -
 * say "hello boss"
 */
if($sessionUserRole == "Admin" || $sessionUserRole == "Manager") {
    echo "hey boss";
}
function pervertedEquation($parameter)
{
    if ($parameter % 2 == 0) {
        return $parameter / 2;
    } else {
        return $parameter * 2;
    }
}
if($sessionUserRole == "admin") {

} elseif ($sessionUserRole == "manager") {

} else {

}
//Best for checking a set of possible values
switch($sessionUserRole) {
    case "admin":
        echo "admin";
        break;
    case "manager":
        echo "manager";
        break;
    default:
        echo "This is a normal user";
}

$condition = !true == false && true == true;











