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
        <title>About me - Njabu Macfoy</title>

        <link rel="stylesheet" href="css/about.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Karla:ital,wght@0,300;0,600;1,300;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <?php require_once('topbar.php'); 
        require_once('footer.php') ?>

        
            <main class="container-grid">
                <section id="block1" class="container-grid">
                    <h1> about me:intro </h1>

                    <div id="content">
                        <figure> <img src="img/portrait.png" alt="Photo of me"> </figure>

                    
                        <p id="animated-cursor"> Hi, My name is Njabu Macfoy. I'm an Undergraduate at Queen Mary University of London,
                            currently studying BSc Computer Science.</p>
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