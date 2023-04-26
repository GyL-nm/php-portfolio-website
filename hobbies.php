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
        <title>Hobbies - Njabu Macfoy</title>

        <link rel="stylesheet" href="css/about.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Karla:ital,wght@0,300;0,600;1,300;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <?php require_once('topbar.php'); 
        require_once('footer.php') ?>
        
            <main id="about-page" class="container-grid">
                <section id="block-empty" class="container-grid">
                    <h1> about me:hobbies </h1>

                    <div id="content">
                        <p> My most passionate hobbies are: </p>
                        <ul class="bullet-points">
                            <li> Programming </li>
                            <li> Gaming + Game Development </li>
                            <li> Digital Art </li>
                            <li id="animated-cursor"> Cooking + Baking</li>
                        </ul>
                    </div>
                    
                    <?php require_once('about-navigation-buttons.php'); ?>
                </section>
                <div id="block2" class="block"></div>

                <div id="block3" class="block container-grid">

                </div>
            </main>
        </div>
    </body>
</html>