<?php 
$indexURL = "index.php";

include 'sessionManager.php';
if (!checkSession()) { header('Location: '.$indexURL); }

session_destroy();

header('Location: '.$indexURL);
?>
