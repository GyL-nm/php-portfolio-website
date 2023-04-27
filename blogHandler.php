<?php 
include 'db-connect.php';

function fetchBlog() {
    $conn = OpenCon();

    $sql = 'SELECT `id`,`timestamp`,`userId`,`title`,`body` FROM `nmacfoy-phase2`.`blog`;';

    $queryResult = $conn->query($sql);

    $ret = [];
    while($row = $queryResult->fetch_assoc()) {
        $ret[] = $row;
    }
    CloseCon($conn);

    return $ret;
}

// function sortBlog($blogArray) {
//     $timestamps = array_column($blogArray, 'timestamp');
//     echo var_dump($timestamps);
//     array_multisort($timestamps, SORT_DESC, $blogArray);
//     echo var_dump($timestamps);
//     return $blogArray;
// }

function fetchUsername($blogAssoc) {
    $conn = OpenCon();

    $sql = 
    'SELECT `users`.`username` 
    FROM `blog` 
    INNER JOIN `users` ON `blog`.`userId`=`users`.`id` 
    WHERE `blog`.`id` = '.$blogAssoc['id'].';';
    $queryResult = $conn->query($sql)->fetch_assoc()['username'];

    CloseCon($conn);

    return $queryResult;
}

function generateBlogPost($index, $blogAssoc) {
    $title = $blogAssoc['title'];
    $username = fetchUsername($blogAssoc);

    $postBody = $blogAssoc['body'];
    $timestamp = $blogAssoc['timestamp'];

    $formatTime = date('h:i a', strtotime($timestamp));
    $formatDate = date('d F Y', strtotime($timestamp));

    $html = 
'<section id="blog'.$index.'" class="blogpostContainer">
    <div id="blog'.$index.'title" class="blogpostTitleContainer flexbox">
        <h3 class="blogUsername">by</br>' .$username. '</h3>
        <h3 class="blogTitle">' .$title. '</h3>
        <h3 class="blogTimestamp">posted </br>' .$formatTime. '</br>' .$formatDate. '</h3>
    </div>
    <p class="postBody">' .$postBody. '</p>
</section>';

    return $html;
}

function displayBlog() {
    $blog = fetchBlog();

    $blogNotEmpty = false;
    for ($i = sizeof($blog)-1; $i >= 0; $i--) {
        echo generateBlogPost($i, $blog[$i]);
        $blogNotEmpty = true;
    }

    return $blogNotEmpty;
}

?>