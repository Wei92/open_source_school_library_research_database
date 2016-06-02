<?php
setcookie("alertlog", "Log in failed, please retry", time()+10);
echo "<script language=javascript>location.href='admin.php'</script>";
?>