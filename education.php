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
        <title>Education - Njabu Macfoy</title>

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
                    <h1> about me:education </h1>

                    <div id="content">
                        <p> My educational history </p>
                        <ul>
                            <li> <h2> 2020-2022 </h2> 
                                <ul class="nested"> 
                                    <li> 3 A-Levels <em> @ </em> City and Islington Sixth-Form College </li>
                                    <ul class="nested">
                                        <li> OCR - Computer Science </li>
                                        <li> Eduqas/WJEC - Electronics </li>
                                        <li> Edexcel - Music Technology </li>
                                    </ul>
                                </ul>  
                            </li>

                            <li> <h2> 2022-[present] </h2>
                                <ul class="nested"> 
                                    <li id="animated-cursor"> BSc Computer Science <em> @ </em> Queen Mary University of London</li>
                                </ul>  
                            </li>
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