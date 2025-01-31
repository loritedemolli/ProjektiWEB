
<?php
session_start();
session_unset();
session_destroy();

setcookie(session_name(), '', time() - 3600, '/');


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

header ("Location: login.php");
exit;
?>
