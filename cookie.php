<?php
// Creating Cookie
//setcookie("user","Jagrut",time() + 300);

// Edit the cookie
//setcookie("user","Developer",time() + 300);

// Deleting the Cookie
//setcookie("user","Jagrut",time() + 300);

// Encrypt the Cookie
//OriginalString + letters/symbol/numbers + 

// Evaluate / Creating
function enc_cookie($data)
{
    $data = $data . "3454%$";
    setcookie("user","$data",time() + 300);
    echo $_COOKIE["user"];
}

enc_cookie("Jagrut");



?>