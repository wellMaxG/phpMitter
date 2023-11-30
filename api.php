<?php

require_once("config.php");
require_once("db.php");



if ( isset($_POST['tweetText'])) {

    $text = $_POST['tweetText'];

    if( $text == '' ) {
        
        $errors[] = ['title' => 'Введите текст Твита'];
    }

    if ( empty($errors) ) {
        $text = mysqli_real_escape_string($link, $text);

        $query = "INSERT INTO tweets (date, text) VALUES ( NOW(), '" . $text . "')";

        $result = mysqli_query($link, $query);

        if( !$result ) {

            die( mysqli_error($link));
        }

        echo "success";
    } else {
        echo "error";
    }
}

?>