<?php
$title="New Recipe";
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');

// print_r($_POST);

// Prep recipe Basic Info for database

if(isset($_POST['submit'])) {
    if ($_POST['recipe_name'] != ""){
        $recipe_name = $_POST['recipe_name'];
    }
    if ($_POST['category_id'] != ""){
        $category_id = $_POST['category_id'];
    }
    if ($_POST['prep_time'] != ""){
        $prep_time = $_POST['prep_time'];
    }
    if ($_POST['cook_time'] != ""){
        $cook_time = $_POST['cook_time'];
    }
    if ($_POST['total_time'] != ""){
        $total_time = $_POST['total_time'];
    }
    if ($_POST['servings'] != ""){
        $servings = $_POST['servings'];
    }
    if ($_POST['img_url'] != ""){
        $img_url = $_POST['img_url'];
    }
    if ($_POST['descript'] != ""){
        $descript = $_POST['descript'];
    }
    if ($_POST['nutrition'] != ""){
        $nutrition = $_POST['nutrition'];
    }
    if ($_POST['notes'] != ""){
        $notes = $_POST['notes'];
    }
    if ($_POST['ing_1'] != ""){
        $ing_1 = $_POST['ing_1'];
    }
    if ($_POST['step_1'] != ""){
        $step_1 = $_POST['step_1'];
    }

    try{
        // send Basic Info to database
        $sql1 = $pdo->prepare("INSERT INTO basic_info (recipe_name, category_id, prep_time, cook_time, 
                    total_time, servings, img_url, descript, nutrition, notes)
                    VALUES(:recipe_name, :category_id, :prep_time, :cook_time, :total_time, :servings, :img_url, :descript, :nutrition, :notes)");
        $sql1->execute([$recipe_name, $category_id, $prep_time, $cook_time, $total_time, $servings, $img_url, $descript, $nutrition, $notes]);
        $rowCount = $sql1->rowCount();
        
        // send Ingredients to database
        if($rowCount === 1) {
            $stmt = $pdo->query("SELECT * FROM basic_info ORDER BY meal_id DESC LIMIT 1");
            $row = $stmt->fetch();
            $meal_id = $row['meal_id'];
            for($i = 1; $i < 100; $i++) {
                    if(isset($_POST['ing_' . $i])) {
                    $ingredient = $_POST['ing_' . $i];
                    $sql2 = $pdo->prepare("INSERT INTO `ingredients` (`id`, `meal_id`, `ingredient`) VALUES (NULL, :meal_id, :ingredient)");
                    $sql2->execute([$meal_id, $ingredient]);
                    echo "Ingredient added!\n";
                } else {
                    echo "breaking!";
                    break;
                }
            }
        }
                // send Directions to database
                if($rowCount === 1) {
                    for($i = 1; $i < 100; $i++) {
                            if(isset($_POST['step_' . $i])) {
                            $step = $_POST['step_' . $i];
                            $sql3 = $pdo->prepare("INSERT INTO `directions` (`id`, `meal_id`, `direction`) VALUES (NULL, :meal_id, :direction)");
                            $sql3->execute([$meal_id, $step]);
                            echo "Step added!\n";
                        } else {
                            echo "breaking!";
                            break;
                        }
                    }
                }
    } catch (Exception $e) {
        echo "There was an error.\n";
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
    
?>