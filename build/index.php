<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once 'config/connexion.php';
?>

<?php include('include/head.php')?>

<?php include('include/nav.php')?>

    <div class=" mt-28">
    <?php
    var_dump($_SESSION);
    ?>
    </div>


<?php include('include/top_film_slide.php')?>

<?php include('include/last_film_slide.php')?>

<?php include('include/random_film_slide.php')?>

<?php include('include/footer.php')?>