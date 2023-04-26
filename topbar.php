<?php
// function boolToString($bool) {
//     return ($bool) ? 'true' : 'false';
// }

// echo '<p style="color:Red;">' . $_SESSION['previousPage'] . '</p>';
// echo (session_status() === PHP_SESSION_ACTIVE) ? '<p style="color:Red;">login: '. boolToString($_SESSION['login']).  ' - loginAttempt: ' . boolToString($_SESSION['loginAttempt']) . '</p>' : '<p style="color:Red;">NO SESSION ACTIVE</p>';

// if (session_status() === PHP_SESSION_ACTIVE) { session_start(); }

$sessionActive = session_status() == PHP_SESSION_ACTIVE;

$addBlogLink = ($sessionActive) ? 'addpost.php' : 'login.php';

$loginButton = '<div class="topbar-overlay" id="login-button"> <a href="login.php" id="link-login"> login </a> </div>';
$logoutButton = '<div class="topbar-overlay" id="logout-button"> <a href="logoutHandler.php" id="link-logout"> logout </a> </div>'
?>

<header id="topbar" class="flexbox">
    <div class="topbar-overlay"> <figure id="topbar-logo"> <a href="index.php" id="link-home"> <img src="img/logo.png" alt="logo"> </a> </figure> </div>
    <div class="outer">
        <nav class="inner">
            <a href="about.php" id="link-aboutme"> about me </a>
            <a href="experience.php" id="link-experience"> experience </a>
            <a href="skills.php" id="link-skills"> skills </a>
            <a href="" id="link-njabumacfoy"> njabu.macfoy </a>
            <a href="education.php" id="link-education"> education </a>
            <a href="projects.php" id="link-projects"> projects </a>
            <a href=<?php echo $addBlogLink ?> id="link-blog"> blog </a>
        </nav>
    </div>
    <?php echo ($sessionActive && $_SESSION['login'] === true) ? $logoutButton: $loginButton; ?> 
</header>
<div id="topbar-underlay"></div>