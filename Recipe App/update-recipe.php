<?php
$title="New Recipe";
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');

print_r($_POST);

// Set variables from $_POST variable


if(isset($_POST['submit'])) {
    // SETTING MEAL ID
    if($_POST){
    $meal_id = $_POST['meal_id'];
    } else {
    $meal_id = '105';
    }
    if ($_POST['recipe_name'] != ""){
        $recipe_name = trim($_POST['recipe_name']);
    }
    if ($_POST['prep_time'] != ""){
        $prep_time = trim($_POST['prep_time']);
    }
    if ($_POST['cook_time'] != ""){
        $cook_time = trim($_POST['cook_time']);
    }
    if ($_POST['total_time'] != ""){
        $total_time = trim($_POST['total_time']);
    }
    if ($_POST['servings'] != ""){
        $servings = trim($_POST['servings']);
    }
    if ($_POST['img_url'] != ""){
        $img_url = trim($_POST['img_url']);
    }
    if ($_POST['descript'] != ""){
        $descript = trim($_POST['descript']);
    }
    $nutrition = trim($_POST['nutrition']);

    $notes = trim($_POST['notes']);

    if ($_POST['ing_1'] != ""){
        $ing_1 = trim($_POST['ing_1']);
    }
    if ($_POST['step_1'] != ""){
        $step_1 = trim($_POST['step_1']);
        $step_1 = strtr( $step_1, array(  "\n" => "\\n",  "\r" => "\\r"  ));
    }
}
    
try {
    // send Basic Info to database
    $sql1 = $pdo->prepare("UPDATE basic_info SET recipe_name = :recipe_name, img_url = :img_url, prep_time = :prep_time, cook_time = :cook_time, total_time = :total_time, servings = :servings, descript = :descript, nutrition = :nutrition, notes = :notes WHERE meal_id = :meal_id;");
    $sql1->execute([$recipe_name, $img_url, $prep_time, $cook_time, $total_time, $servings, $descript, $nutrition, $notes, $meal_id]);
    $rowCount = $sql1->rowCount();
    
    // Send Ingredients to database
    // DELETE all ingredients from this meal ID
    $sqlDelete1 = $pdo->prepare("DELETE FROM ingredients WHERE meal_id = :meal_id;");
    $sqlDelete1->execute([$meal_id]);
    for($i = 1; $i < 100; $i++) {
        if(isset($_POST['ing_' . $i]) && ($_POST['ing_' . $i] != "")) {
            $ingredient = trim($_POST['ing_' . $i]);
            $sql2 = $pdo->prepare("INSERT INTO `ingredients` (`id`, `meal_id`, `ingredient`) VALUES (NULL, :meal_id, :ingredient)");
            $sql2->execute([$meal_id, $ingredient]);
            echo "Ingredient added!\n";
        } else {
            echo "breaking!";
            break;
        }
    }
    // Send Directions to database
    $sqlDelete2 = $pdo->prepare("DELETE FROM directions WHERE meal_id = :meal_id;");
    $sqlDelete2->execute([$meal_id]);
    for($i = 1; $i < 100; $i++) {
        if(isset($_POST['step_' . $i]) && ($_POST['step_' . $i] != "")) {
            $step = trim($_POST['step_' . $i]);
            $step = strtr( $step, array(  "\n" => "\\n",  "\r" => "\\r"  ));
            $sql3 = $pdo->prepare("INSERT INTO `directions` (`id`, `meal_id`, `direction`) VALUES (NULL, :meal_id, :direction)");
            $sql3->execute([$meal_id, $step]);
            echo "Step added!\n";
        } else {
            echo "breaking!";
            break;
        }
    }
    // send Categories to database
    $sqlDelete3 = $pdo->prepare("DELETE FROM meal_categories WHERE meal_id = :meal_id;");
    $sqlDelete3->execute([$meal_id]);
    for($i = 1; $i < 40; $i++) {
        if(isset($_POST['category_' . $i])) {
            $category_id = $i;
            $sql4 = $pdo->prepare("INSERT INTO `meal_categories` (`id`, `meal_id`, `category_id`) VALUES (NULL, :meal_id, :category_id)");
            $sql4->execute([$meal_id, $category_id]);
            echo "Category added!\n";
        }
    }
    header("location: view-recipe.php?meal_id=$meal_id&edit=complete");
// error handling
} catch (Exception $e) {
    echo "There was an error.\n\n";
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>