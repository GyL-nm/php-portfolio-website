<?php
function OpenCon() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "nmacfoy-phase2";

    $conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}

function CloseCon($conn) { $conn -> close(); }
?>