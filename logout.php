<?php
// created by Wei Wei
session_start();
session_unset();
session_destroy();
setcookie("alertlog", "Log out successfully", time()+3);
echo "<script language=javascript>location.href='admin.php'</script>";


?>