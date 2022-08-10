<?php
$title="Browse Recipes";
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');

?>
<div class='browse-recipes-wrapper'>
    <?php
    require_once('inc/recipe-explorer.inc.php');
    ?>

    <div class="card_container">
        <?php
        $stmt1 = $pdo->query('SELECT * FROM basic_info');
        while($row = $stmt1->fetch()){
            recipeCard($row);
        }
        ?>
    </div>
</div>

<?php require_once('inc/footer.inc.php'); ?>