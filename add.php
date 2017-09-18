<?php
require_once "models/articles.php";


if(!empty($_POST['title']) && (!empty($_POST['text']))){
    add_new_article();
    header('Location:index.php');
}

elseif(empty($_POST['title'])){
    echo "Озаглавьте статью";
    ?>
    <!--Сделать так, чтобы при возврате по ссылке инфа, введенная вользователем оставалась в поляхю.-->
    <a href="index.php" >назад</a>
<?php
}

elseif(empty($_POST['text'])){
    echo "Пустые статьи не принимаются";
    ?>
    <a href="index.php" >назад</a>
<?php
}

?>

