<?php
// it is essentially a small text file that stores data on the user's computer (as opposed to a session that stores data on the server)
// as cookies are stored on the user’s computer, you should not use cookies to store sensitive data
// also, cookies may be disabled on the user’s browser. If the information to be stored is crucial or sensitive, you should use sessions instead
//
// Similar to the header() function covered in Chapter 3.3, the set_cookie() function must be called before your script generates any output
setcookie('userName', 'Joy', time() + 120);
#modifying a cookie
setcookie('userAge', 25, time() + 3600);
setcookie('userAge', 26, time() + 3600); // overwrites the previous one
#deleting a cookie
setcookie('userLevel', 3, time() + 3600);
setcookie('userLevel', 3, time() - 3600); // gets deleted when expired