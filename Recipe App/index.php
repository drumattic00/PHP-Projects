<?php
$title="Recipe Page";

if($_GET){
    $meal_id = htmlspecialchars($_GET['meal_id']);
} else {
    $meal_id = 28;
}
require_once('inc/header.inc.php');
require_once('inc/dbconnect.inc.php');
require('inc/functions.inc.php');

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
    array_push($directions, $row['direction']);
}
?>


<div class="wrapper">
    <h1 class=""><?php echo $recipe_name; ?></h1>
        <div id="rating">
            <span>Rating:&nbsp;</span>
            <i class="gold-star">
                <img src="img/goldstar.png" alt="">
                <img src="img/goldstar.png" alt="">
                <img src="img/goldstar.png" alt="">
                <img src="img/blankstar.png" alt="">
                <img src="img/blankstar.png" alt="">
            </i>
        </div>
    <div id="img-info-container">
        <div id="meal-img" class="">
            <img src="<?php echo $img_url; ?>" alt="">
        </div>
        <!-- <div id="gallery" class="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
        </div> -->
        <div id="meal-info" class="grid-col-span-1">
            <p>Prep: <span id="prep"><?= $prep_time ?></span></p>
            <p>Cook: <span id="cook"><?= $cook_time?></span></p>
            <p>Total: <span id="total"><?= $total_time ?></span></p>
            <p>Servings: <span id="servings"><?= $servings ?></span></p>
        </div>
    </div>
    <div class="recipe-info">
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
    <footer>Some Shit Here.</footer>
</div>
<?php require_once('inc/footer.inc.php');