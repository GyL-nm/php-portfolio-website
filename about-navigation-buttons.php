<?php
    $aboutPages = ["about.php","hobbies.php","education.php"];
    $currentPage = 0;
    $prev = $aboutPages[$currentPage];
    $next = $aboutPages[$currentPage];

    $forwardHidden = false;
    $backHidden = false;

    if (basename($_SERVER['PHP_SELF']) == $aboutPages[0]) {
        $currentPage = 0;
        $prev = $aboutPages[$currentPage]; 
        $next = $aboutPages[$currentPage+1];

        $backHidden = true;
    }

    for ($i = 1; $i < count($aboutPages); $i++) {
        if (basename($_SERVER['PHP_SELF']) == $aboutPages[$i]) {
            $currentPage = $i;

            $prev = $aboutPages[$currentPage-1];
            if (basename($_SERVER['PHP_SELF']) != $aboutPages[count($aboutPages)-1]) { $next = $aboutPages[$currentPage+1]; }
        } 
    }

    if (basename($_SERVER['PHP_SELF']) == $aboutPages[count($aboutPages)-1]) { $forwardHidden = true; $next = $aboutPages[$currentPage]; }
?>

<html>
    <nav id="buttons">
        <?php if (!$backHidden) { ?> <a href="<?= $prev; ?>" id="prevpage-button"> < </a> <?php } ?>
        <?php if (!$forwardHidden) { ?> <a href="<?= $next; ?>" id="nextpage-button"> >_ </a> <?php } ?>
    </nav>

    <script src="js/fx.js"></script>
    <script src="js/about.js"></script>
</html>