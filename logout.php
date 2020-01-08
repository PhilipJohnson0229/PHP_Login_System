<?php
//we are going to kill the session and send the user back to the index page
$past = time() - 3600;
session_start();
session_destroy();
session_write_close();
setcookie(session_name(), '', 0, '/');
session_regenerate_id(true);
header("Location: /Login_system/php_login_system/index.php");
?>

