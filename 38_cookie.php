<?php
//cookie :- in a cookie data not saved sensitively.
//session:- session is a secure
echo "Welcome to the world of Cookie";

//Syntax to set a cookie
// setcookie("name","value","expire-time(86400-second in a one day)","Domain where u use this cookie")
// echo time();
setcookie("category","Books",time() + 86400,"/");
echo "<br>The Cookie is set";
?>