<?php

function printIngredients($ingArray) {
    $counter = 2;
    foreach ($ingArray as $ingredient) {
        echo "<input type='checkbox' name='ing_$counter'>";
        echo "<span>&nbsp;$ingredient</span>";
        echo "<br><br>";
        $counter +=1;
    }
}

function printDirections($dirArray) {
    $counter = 1;
    foreach($dirArray as $direction) {
        echo "<input type='checkbox' name='step_$counter'>";
        echo "<label for='step_$counter'>&nbsp;Step $counter</label>";
        echo "<br>";
        echo "<p class='direction'>$direction</p><br>";
        $counter+=1;
    } 
}

function fillCategories($catArray) {
    foreach($catArray as $id => $category) {
        echo "<option id='ctg_$category' value='$id'>$category</option>";
    }
}

function recipeCard($recipe) {
    $meal_id = $recipe['meal_id'];
    $recipe_name = $recipe['recipe_name'];
    $descript = $recipe['descript'];
    $total_time = $recipe['total_time'];
    $img_url = $recipe['img_url'];
    echo "<a class='card-link' href='view-recipe.php?meal_id=$meal_id'>";
    echo "<div class='card'>";
    echo "<img src='$img_url' class='card-img-top' alt='image of $recipe_name'>";
    echo "<div class='card-body'>";
    echo "<span class='card-title'>$recipe_name</span>";
    echo "<span class='card-timer'><img src='https://img.icons8.com/ios/50/000000/time--v1.png' style='width:25px;'/>&nbsp;$total_time</span>";
    echo "</div>";
    echo "</div>";
    echo "</a>";
}

function showEditConfirmation() {
    echo "<div class='display-message'>Your recipe has been updated.</div>";
}

function showAddConfirmation() {
    echo "<div class='display-message'>Your recipe has been added.</div>";
}
function showDeleteConfirmation() {
    echo "<div class='display-message'>Your recipe has been deleted.</div>";
}
?>