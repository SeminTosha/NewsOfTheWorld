<?php
function sql_select(){

    $connection = mysqli_connect('localhost', 'root', '', 'news_bd');

    $res = mysqli_query($connection, 'SELECT * FROM `articles`');

    return $res;
}


function sql_insert(){

    $connection = mysqli_connect('localhost', 'root', '', 'news_bd');

    mysqli_query($connection, "INSERT INTO articles (`title`,`article`) VALUES ('".$_POST['title']."','".$_POST['text']."')");

}

?>