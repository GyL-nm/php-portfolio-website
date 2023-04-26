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
        <title>Home - Njabu Macfoy</title>

        <link rel="stylesheet" href="css/index.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Karla:ital,wght@0,300;0,600;1,300;1,600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php require_once('topbar.php'); 
        require_once('footer.php') ?>

        <main id="pagebody-content" class="flexVert">
            <figure id="pagebody-logo">  <img id="pagebody-logo-img" src="img/logo.png" alt="main-logo"> </figure>

            <section> <h1 id="welcome-msg"> Welcome to my portfolio 👋 </h1> </section>

            <div id="links" class="flexbox"> 
                <figure> <a href="https://github.com/Gylactic"> <img src="img/icon1.png" alt="icon1"> <figcaption><!-- GitHub--></figcaption> </a> </figure>
                <figure> <a href="https://github.qmul.ac.uk/ec22845"> <img src="img/icon2.png" alt="icon2"> <figcaption><!-- GitHub - QMUL--></figcaption> </a> </figure>
                <figure> <a href="https://www.linkedin.com/in/njabu-macfoy-11b018259/"> <img src="img/icon3.png" alt="icon3"> <figcaption><!-- LinkedIn--></figcaption> </a> </figure>
                <!-- <figure> <a href=""> <img src="img/icon4.png" alt="icon4"> <figcaption>Icon 4</figcaption> </a> </figure> -->
            </div>
        </main>

        <script src="js/index.js"></script>
        <script src="js/fx.js"></script>
    </body>
</html>