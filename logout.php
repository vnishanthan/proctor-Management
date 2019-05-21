<?php
session_start();
unset($_SESSION["password"]);
unset($_SESSION["name"]);
session_destroy();
header("Location:phpconn.php");
?>
