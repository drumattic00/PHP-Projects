<?php
$title="Recipe Page";

require_once('inc/header.inc.php');
require_once('inc/dbconnect.inc.php');
require('inc/functions.inc.php');

if(isset($_GET['delete']) && ($_GET['delete'] == 'yes') && (isset($_GET['meal_id']))) {
    $meal_id = $_GET['meal_id'];
    $stmt= $pdo->prepare("DELETE FROM basic_info WHERE meal_id = :meal_id");
    $stmt->execute([$meal_id]);
    $stmt2 = $pdo->prepare("DELETE FROM meal_categories WHERE meal_id = :meal_id");
    $stmt2->execute([$meal_id]);
    $stmt3 = $pdo->prepare("DELETE FROM ingredients WHERE meal_id = :meal_id");
    $stmt3->execute([$meal_id]);
    header("location: browse-recipes.php?delete=complete");
} else {
    echo "An error has occurred.";
}