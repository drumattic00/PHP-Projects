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
        echo "<option id='ctg_$id' value='$id'>$category</option>";
    }
}
?>