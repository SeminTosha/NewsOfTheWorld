<?php
function sql_select(){

    $connection = mysqli_connect('localhost', 'root', '', 'news_bd');

    $res = mysqli_query($connection, 'SELECT * FROM `articles`');

    return $res;
}