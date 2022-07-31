<?php
$title="New Recipe";
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');

print_r($_POST);

if(isset($_POST['submit'])) {
    $recipe_name = $_POST['recipe_name'];
    $category_id = $_POST['category_id'];
    $prep_time = $_POST['prep_time'];
    $cook_time = $_POST['cook_time'];
    $total_time = $_POST['total_time'];
    $servings = $_POST['servings'];
    $img_url = $_POST['img_url'];
    $descript = $_POST['descript'];
    $nutrition = $_POST['nutrition'];
    $notes = $_POST['notes'];

    $sql1 = $pdo->prepare("INSERT INTO basic_info (recipe_name, category_id, prep_time, cook_time, 
                total_time, servings, img_url, descript, nutrition, notes)
                VALUES(:recipe_name, :category_id, :prep_time, :cook_time, :total_time, :servings, :img_url, :descript, :nutrition, :notes)");
    $sql1->execute([$recipe_name, $category_id, $prep_time, $cook_time, $total_time, $servings, $img_url, $descript, $nutrition, $notes]);

    // $sql2 = $pdo->prepare("INSERT INTO ")


    // $ing_1 = $_POST['ing_1'];
    // for($i = 1; $i < 100; $i++) {
    //     if(isset($_POST['ing_' . $i])) {
    //         echo "THERE IS A SECOND INGREDIENT";
    //     } else {
    //         echo "breaking!";
    //         break;
    //     }
    // }


    // echo $recipe_name;
    // echo $category_id;
    // echo $prep_time;
    // echo $cook_time;
    // echo $total_time;
    // echo $servings;
    // echo $img_url;
    // echo gettype($descript);
    // echo $nutrition;
    // echo $notes;
}

?>