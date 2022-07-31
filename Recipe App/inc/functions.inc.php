<?php
function printIngredients($ingArray) {
    $counter = 2;
    foreach ($ingArray as $ingredient) {
        echo "<input type='checkbox' name='ing_$counter'>";
        echo "<label for='ing_$counter'>&nbsp;$ingredient</label>";
        echo "<br>";
        $counter +=1;
    }
}

function printDirections($dirArray) {
    $counter = 1;
    foreach($dirArray as $direction) {
        echo "<input type='checkbox' name='step_$counter'>";
        echo "<label for='step_$counter'>&nbsp;Step $counter</label>";
        echo "<br>";
        echo "<p class='paragraph'>$direction</p>";
        $counter+=1;
    } 
}

function fillCategories($catArray) {
    foreach($catArray as $id => $category) {
        echo "<option value='$id'>$category</option>";
    }
}



?>