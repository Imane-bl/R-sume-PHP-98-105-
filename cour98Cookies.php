<?php

  /*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */

  //setcookie("style", "dark", time() + 60 * 60 * 24 * 30);


/*
  It looks like you're interested in creating an "infinite cookie" in PHP, which typically means setting a cookie that never expires. Here's a simple example of how to set such a cookie:




// Name of the cookie
$cookie_name = "infinite_cookie";

// Value of the cookie
$cookie_value = "This cookie will never expire";

// Time to expire - set to far future (e.g., year 2038 which is often used due to 32-bit UNIX time limitations)
$expire_time = time() + (20 * 365 * 24 * 60 * 60); // 20 years from now

// Set the cookie
setcookie($cookie_name, $cookie_value, $expire_time, "/");

// Check if the cookie is set and display it

if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '" . $cookie_name . "' is not set.";
}
*/