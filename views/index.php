<!DOCTYPE html>
<html>
    <head>
        <title>Новости со всего мира</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>News of the world!</h1>

        <?php
           foreach($articles as $article) {
               ?>
               <h4><a href="article_page.php?id='<?=$article['id']?>'"><?=$article['title']."&nbsp;&nbsp;".$article['time']?></a></h4>

        <?
             }
        ?>
    </body>
</html>