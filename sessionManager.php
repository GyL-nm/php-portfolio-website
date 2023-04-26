<?php
function checkSession() {
    session_start();
    if (isset($_SESSION['login'])) { return true; }
    return false;
}
?>