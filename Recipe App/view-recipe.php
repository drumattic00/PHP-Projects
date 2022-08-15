<?php
$title="Recipe Page";

require_once('inc/header.inc.php');
require_once('inc/dbconnect.inc.php');
require('inc/functions.inc.php');


if($_GET){
    $meal_id = htmlspecialchars($_GET['meal_id']);
    // $rating = $_GET['rating'];
} else {
    // $rating = $_GET['rating'];
    $meal_id = 97;
}
if(isset($_GET['rating'])){
    $stmt4 = $pdo->prepare("UPDATE basic_info SET rating = :rating WHERE basic_info.meal_id = :meal_id");
    $stmt4->execute([$_GET['rating'], $meal_id]);
    echo "<script>window.location.replace('view-recipe.php?meal_id=$meal_id');</script>";
}

// Basic Information SQL Statement and Processing
$stmt = $pdo->prepare('SELECT * FROM basic_info WHERE meal_id = :meal_id');
$stmt->execute([$meal_id]);
$info = $stmt->fetch();
$recipe_name = $info['recipe_name'];
$img_url = $info['img_url'];
$descript = $info['descript'];
$prep_time = $info['prep_time'];
$cook_time = $info['cook_time'];
$servings = $info['servings'];
$total_time = $info['total_time'];
$nutrition= $info['nutrition'];
$notes = $info['notes'];
$rating = $info['rating'];
// print_r($rating);


// Ingredient List SQL Statement and Processing
$stmt2 = $pdo->prepare('SELECT * FROM ingredients WHERE meal_id = :meal_id');
$stmt2->execute([$meal_id]);
$ingredients = [];
while ($row = $stmt2->fetch()) {
    array_push($ingredients, $row['ingredient']);
}

// Directions List SQL Statement and Processing
$stmt3 = $pdo->prepare('SELECT * FROM directions WHERE meal_id = :meal_id');
$stmt3->execute([$meal_id]);
$directions = [];
while($row = $stmt3->fetch()) {
    $direction = $row['direction'];
    $direction = strtr( $direction, array(  "\\n" => "\n",  "\\r" => "\r"  ));
    array_push($directions, $direction);
}
?>

<div class="view-recipe-wrapper">
    <h1 class=""><?php echo $recipe_name; ?></h1>
    <div id="rating">
        <span>Rating:&nbsp;</span>
            <!-- <a href="view-recipe.php?meal_id=<//?= $meal_id ?>&rating=1"> -->
                <!-- <img src="img/goldstar.png" class="ratingStar" alt=""> -->
            <!-- </a> -->
            
    </div>
    <div id="meal-img" class="">
        <img src="<?php echo $img_url; ?>" alt="">
    </div>
    <div id="meal-info" class="">
        <p>Prep: <span id="prep"><?= $prep_time ?></span></p>
        <p>Cook: <span id="cook"><?= $cook_time?></span></p>
        <p>Total: <span id="total"><?= $total_time ?></span></p>
        <p>Servings: <span id="servings"><?= $servings ?></span></p>
    </div>
    <div id="blurb" class="">
        <p><?php echo $descript; ?></p>
    </div>
    <h2>Ingredients</h2>
    <div id="ingredients" class="">
        <?php printIngredients($ingredients); ?>
    </div>
    <h2>Directions</h2>
    <div id="directions" class="directions-container">
        <?php printDirections($directions); ?>
    </div>
    <h2 class="">Nutrition Facts</h2>
    <div id="nutrition">
        <p><?= $nutrition ?></p>
    </div>
    <h2 class="">Notes</h2>
    <div id="notes" class="">
        <p><?= $notes ?></p>
    </div>
</div>
<?php include('inc/footer.inc.php'); ?>
<script>setRating('<?="$rating"?>','<?="$meal_id"?>')</script>