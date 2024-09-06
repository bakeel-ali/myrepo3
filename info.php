<?php
session_start();
if (isset($_SESSION['username']) AND $_SESSION['username'] != '')
{
header("location:Main.php");
exit();
}
?>