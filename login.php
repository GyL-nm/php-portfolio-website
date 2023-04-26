<?php
error_reporting(E_ALL & ~E_NOTICE);

$loginAttempts = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'db-connect.php';

    $conn = OpenCon();

    $sql = 'SELECT * FROM `nmacfoy-phase2`.`users` WHERE `email` = "'. $email . '" AND `password` = "'. $password . '";';
    // echo $sql;

    $queryResult = $conn->query($sql)->fetch_assoc();
    // echo $queryResult->fetch_row();
    // foreach($queryResult->fetch_field() as $value) {echo $value; };

    CloseCon($conn);


    $blogURL = "addpost.php";   
    if ($queryResult === null || $queryResult['email'] !== $email || $queryResult['password'] !== $password) {
        // echo '<p> Invalid username and password, this is a closed-registry blog and can only be accessed by authorised users. </p> 
        // <p> email: ' . $email . '</p>
        // <p> password: ' . $password;

        // echo (session_status() === PHP_SESSION_ACTIVE) ? '<p style="color:Red;">login: '. boolToString($_SESSION['login']).  ' - loginAttempt: ' . boolToString($_SESSION['loginAttempt']) . '</p>' : '<p style="color:Red;">NO SESSION ACTIVE</p>';
        
        $loginAttempts++; 
    } 
    else 
    {  
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['user'] = $email; 
        
        header('Location: '.$blogURL); 
    }
}

$indexURL = 'index.php';
if (session_status() === PHP_SESSION_ACTIVE) { session_start(); header('Location: '.$indexURL); }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login - Njabu Macfoy</title>

        <link rel="stylesheet" href="css/login.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Karla:ital,wght@0,300;0,600;1,300;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <?php require_once('topbar.php'); 
        require_once('footer.php') ?>

        
            <main class="container-grid collage">
                <div id="block1" class="block"></div>

                <div id="block2" class="block">
                    <section id="login">
                        <h1>Login</h1>
                        <form action="login.php" method="POST">
                            <fieldset>
                                <div class="login-field">
                                    <input type="email" name="email" id="login-email" placeholder="Email" pattern="\S+" required>
                                </div>

                                <div class="login-field">
                                    <input type="password" name="password" id="login-password" placeholder="Password" required pattern="\S+" required>
                                </div>
                            </fieldset>

                            <input type="submit" id="login-submit" value="Login">
                        </form>

                        <?php echo ($loginAttempts > 0) ? '<p id="error-msg"> incorrect username/password. </p>': ''; ?>
                    </section>
                </div>

                <div id="block3" class="block container-grid">
                    <div id="block4" class="block"></div>
                    <div id="block5" class="hover-block"></div>
                    <div id="block6" class="hover-block"></div>
                </div>
            </main>
        </div>
    </body>
</html>

<?php 

?>