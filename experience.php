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
        <title>Experience - Njabu Macfoy</title>

        <link rel="stylesheet" href="css/about.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Karla:ital,wght@0,300;0,600;1,300;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <?php require_once('topbar.php'); 
        require_once('footer.php') ?>

        
            <main id="about-page" class="container-grid">
                <section id="block1" class="container-grid">
                    <h1> about me:experience </h1>

                    <div id="content">
                        <p id="animated-cursor"> As an undergraduate, I am currently seeking opportunities to gain industry experience. 
                            While I may not have prior professional experience, I am a quick learner, a critical thinker, and a dedicated individual who is eager to make valuable contributions to any organization. 
                            Through my academic pursuits, passion projects, and hobbyist work, I have developed a strong work ethic and a passion for tackling challenges. 
                            I am confident that I can apply these qualities to any role and excel in the industry. </p>
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