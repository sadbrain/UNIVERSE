<?php require_once APP_ROOT . "/views/shared/header.php" ?>

<?php
// var_dump($categoryl1);
foreach($product as $p){
// echo $p -> get_id() ."<br>";
echo $p -> get_product_categories() ."<br>";
}
?>;

welcome customer homepage
<a href="/Uni/Detail/2">detail page</a>
<img src=<?= "/" . URL_SUBFOLDER . "/wwwroot/images/users/avatar_default.jpg" ?>>
<?php require_once APP_ROOT . "/views/shared/footer.php" ?>