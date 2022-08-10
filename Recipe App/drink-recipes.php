<?php
$title="Drink Recipes";
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
    $stmt1 = $pdo->query('SELECT * FROM basic_info INNER JOIN meal_categories on basic_info.meal_id = meal_categories.meal_id WHERE meal_categories.category_id = 12');
    while($row = $stmt1->fetch()){
        recipeCard($row);
    }
    ?>
</div>

<?php require_once('inc/footer.inc.php'); ?>