<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int) strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}
include './helpers/Database.php';
require './functions.php';
require './classes/Category.php';
require './classes/Film.php';
require './classes/Language.php';
require './classes/Actor.php';
echo template_header('accueil', 'rubrique1');
?>
<?php
if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] == false) :
?>
<?php
    header("refresh:0; login.php");
else :
?>
    <section class="pt-5 mt-3">
        <div class="container">
            <h1>Tous les lots</h1>
        </div>
    </section>
<?php endif;
