<?php 
function boolToString($bool) {
    return ($bool) ? 'true' : 'false';
}

if (session_status() !== PHP_SESSION_ACTIVE) 
{
    session_start(['login','loginAttempt','previousPage']);
    $_SESSION['login'] = false;
    $_SESSION['loginAttempt'] = false;
    session_regenerate_id();

} else { session_start(['login','loginAttempt','previousPage']); session_regenerate_id(); }
$_SESSION['previousPage'] = $_SERVER['PHP_SELF'];


$email = $_POST['email'];
$password = $_POST['password'];

include 'db-connect.php';

$conn = OpenCon();

$sql = 'SELECT * FROM `nmacfoy-phase2`.`users` WHERE `email` = "'. $email . '" AND `password` = "'. $password . '";';
echo $sql;

$queryResult = $conn->query($sql)->fetch_assoc();
// echo $queryResult->fetch_row();
// foreach($queryResult->fetch_field() as $value) {echo $value; };

CloseCon($conn);


$blogURL = "addpost.php";
$loginURL = "login.php";
if ($queryResult['email'] !== $email || $queryResult['password'] !== $password) {
    echo '<p> Invalid username and password, this is a closed-registry blog and can only be accessed by authorised users. </p> 
    <p> email: ' . $email . '</p>
    <p> password: ' . $password;

    echo (session_status() === PHP_SESSION_ACTIVE) ? '<p style="color:Red;">login: '. boolToString($_SESSION['login']).  ' - loginAttempt: ' . boolToString($_SESSION['loginAttempt']) . '</p>' : '<p style="color:Red;">NO SESSION ACTIVE</p>';

    $_SESSION["login"] = false;
    $_SESSION["loginAttempt"] = true;
    header('Location: '.$loginURL);
} 
else 
{  
    $_SESSION["login"] = true;
    $_SESSION["loginAttempt"] = true;
    
    header('Location: '.$blogURL); 
}
?>
