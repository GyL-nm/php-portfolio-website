<?php
error_reporting(E_ALL & ~E_NOTICE);

function boolToString($bool) {
    return ($bool) ? 'true' : 'false';
}


$indexURL = 'index.php';

// session_start();
// if ($_SESSION['login'] === false) { session_destroy(); }
include 'sessionManager.php';
if (!checkSession()) { session_destroy(); }
if(session_status() !== PHP_SESSION_ACTIVE) { header('Location: '.$indexURL); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $postBody = $_POST['body'];
    $user = $_SESSION['user'];

    include 'db-connect.php';

    $conn = OpenCon();

    $userIdQuery = 'SELECT `id` FROM `nmacfoy-phase2`.`users` WHERE `email` = "' .$user. '";';
    $userIdResult = $conn->query($userIdQuery);
    $userId = $userIdResult->fetch_assoc()['id'];

    echo '<p style="color:red">' .$userId;

    $sql = 'INSERT INTO `nmacfoy-phase2`.`blog` (`userId`,`title`,`body`)
    VALUES (' .$userId. ', "' .$title. '", "' .$postBody. '");';

    echo $sql;

    $queryResult = $conn->query($sql);

    echo boolToString($queryResult) . '</p>';

    CloseCon($conn);

    $postSuccessURL = 'postSuccess.php';
    if ($queryResult) { header('Location: ' .$postSuccessURL); }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Post - Njabu Macfoy</title>

        <link rel="stylesheet" href="css/addpost.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Karla:ital,wght@0,300;0,600;1,300;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>

        <?php require_once('topbar.php'); 
        require_once('footer.php') ?>
        
        <main class="container-grid collage">

            <div id="block1" class="block">
                <section id="addpost">
                    <h1>Add Post</h1>
                    <form onsubmit="return validateFormBeforeSubmit()" action="addpost.php" method="POST" id="addpost-form">
                        <fieldset>
                            <div class="post-field">
                                <input type="text" name="title" id="postTitle-field" placeholder="blog title">
                            </div>

                            <div class="post-field">
                                <textarea type="text" name="body" id="postBody-field" placeholder="enter here..."></textarea>
                            </div>
                        </fieldset>

                        <input type="submit" value="Post Blog" id="post-submit">
                        <input type="reset" onclick="clearBorders()" value="×" alt="Clear" id="post-reset">
                    </form>

                    <?php ($_SERVER['REQUEST_METHOD'] === 'POST' && !$queryResult) ? '<p id="error-msg"> failed to make post, try again later. :(</p>': ''; ?>
                </section>

                

                <script src="js/addpost.js"></script>
            </div>
            
            <div id="block2" class="block"></div>
            <div id="block3" class="block container-grid">
                <div id="block4" class="block"></div>
                <div id="block5" class="block hover-block"></div>
                <div id="block6" class="block hover-block"></div>
            </div>
        </main>
    </body>
</html>