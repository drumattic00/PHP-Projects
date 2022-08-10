<?php
$title="Recipes by Ingredient";
require_once('inc/header.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');
?>
<div class="wrapper">
    <?php
    require_once('inc/recipe-explorer.inc.php');
    $stmt1 = $pdo->query('SELECT * FROM basic_info INNER JOIN meal_categories on basic_info.meal_id = meal_categories.meal_id WHERE meal_categories.category_id = 3');
    while($row = $stmt1->fetch()){
        $recipe_name = $row['recipe_name'];
        $descript = $row['descript'];
        echo "<h1>$recipe_name</h1>";
        echo "<p>$descript</p>";
    }
?>
</div>