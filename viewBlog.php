<?php
include 'sessionManager.php';
if (!checkSession()) { session_destroy(); }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog - Njabu Macfoy</title>

        <link rel="stylesheet" href="css/viewBlog.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Karla:ital,wght@0,300;0,600;1,300;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <?php require_once('topbar.php'); 
        require_once('footer.php') ?>

        
            <main id="about-page" class="container-grid">
                <section id="block1" class="flexVert">
                    <h1> Blog:posts </h1>
                    <div id="content">
                        <?php 
                        require_once('blogHandler.php');
                        if (!displayBlog()) { echo '<p id="blogNotice"> There are no blog posts atm :( </br> how about you post something ;)</p>'; }
                        else { echo '<p id="blogNotice"> -- END -- </p>'; }
                        ?>
                    </div>
                    <a href="addpost.php" id="addpostLink">+</a>
                </section>
                <div id="block2" class="block"></div>

                <div id="block3" class="block container-grid">

                </div>
            </main>
        </div>
    </body>
</html>