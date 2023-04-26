<?php
error_reporting(E_ALL & ~E_NOTICE);

function boolToString($bool) {
    return ($bool) ? 'true' : 'false';
}

$indexURL = 'index.php';

include 'sessionManager.php';
if (!checkSession()) { session_destroy(); }
if(session_status() !== PHP_SESSION_ACTIVE) { header('Location: '.$indexURL); }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>post submitted</title>

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
                    <p id="success-msg"> successfully posted. :) </p>
                    
                    <a id="back-button" href='addpost.php'>back to posting <</a> 
                    <a id="back-button" href='viewBlog.php'>to the blog ></a> 
                </section>
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