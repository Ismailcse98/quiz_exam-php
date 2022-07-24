<?php
setcookie('email',"", time()-10000);
header("Location:login.php");
?>