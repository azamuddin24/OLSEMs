<?php

session_start();

// Unset all of the session variables.
$_SESSION = array();


//  destroy the session, and  session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


session_destroy();
header("location: ./login.php")
?>