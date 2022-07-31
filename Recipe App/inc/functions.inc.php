<?php
function printIngredients($ingArray) {
    foreach ($ingArray as $ingredient) {
        echo "<input type='checkbox' name='ing_$ingredient'>";

        echo "<label for='ing_$ingredient'>&nbsp;$ingredient</label>";
        echo "<br>";
    }
}



?>