<!DOCTYPE html>
<html>
    <head>
        <title>Новости со всего мира</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>News of the world!<h1>
        <?php
           foreach($articles as $article) {
               ?>
               <p><?=$article?></p>
               <?php
           }
        ?>
    </body>
</html>