<?php 
include 'db-connect.php';

include 'sessionManager.php';
if (!checkSession()) { session_destroy(); }

function fetchBlog() {
    $conn = OpenCon();

    $sql = 'SELECT `timestamp`,`userId`,`title`,`body` FROM `nmacfoy-phase2`.`blog`;';

    $queryResult = $conn->query($sql)->fetch_array();

    CloseCon($conn);

    return $queryResult;
}

function sortBlog($blogArray) {
    $timestamps = array_column($blogArray, 'timestamp');
    $sortedBlog = array_multisort($timestamps, SORT_DESC, $blogArray);
    return $sortedBlog;
}

function fetchUsername($blogAssoc) {
    $conn = OpenCon();

    $sql = 
    'SELECT `users`.`username` 
    FROM `blog` 
    INNER JOIN `users` ON `blog`.`userId`=`users`.`id` 
    WHERE `blog`.`id` = '+$blogAssoc['id']+';';
    $queryResult = $conn->query($sql)->fetch_assoc()['username'];

    CloseCon($conn);

    return $queryResult;
}

function generateBlogPost($index, $blogAssoc) {
    $title = $blogAssoc['title'];
    $username = fetchUsername($blogAssoc);

    $postBody = $blogAssoc['body'];
    $timestamp = $blogAssoc['timestamp'];

    $readableDate = date('h:i d/m/Y', $timestamp);

    $html = 
'<section id="blog'.$index.'" class="blogpostContainer">
    <div id="blog'.$index.'title" class="blogpostTitleContainer flexbox">
        <h1 class="blogUsername">' .$username. '</h1>
        <h1 class="blogTitle">' .$title. '</h1>
        <h1 class="blogTimestamp">' .$readableDate. '</h1>
    </div>
    <p class="postBody">' .$postBody. '</p>
</section>';

    echo $html;
}

?>