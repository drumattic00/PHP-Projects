<?php
$title="Recipe Page";
require_once('inc/header.inc.php');
?>
    <?php
    require_once('inc/dbconnect.inc.php');
    require('inc/functions.inc.php');

    // Basic Information SQL Statement and Processing
    $stmt = $pdo->query('SELECT * FROM basic_info WHERE meal_id = 5');
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
    $stmt2 = $pdo->query('SELECT * FROM ingredients WHERE meal_id = 1');
    $ingredients = [];
    while ($row = $stmt2->fetch()) {
        array_push($ingredients, $row['ingredient']);
    }

    // Directions List SQL Statement and Processing
    $stmt3 = $pdo->query('SELECT * FROM directions WHERE meal_id = 1');
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
            <div id="gallery" class="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
            </div>
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
                <!-- <input type="checkbox" name="ing1" id="ing1">
                <label for="ing1">Some Ingredient Here</label> -->
                <?php printIngredients($ingredients); ?>
            </div>
            <h2>Directions</h2>
            <div id="directions" class="">
                <!-- <input type="checkbox" name="step1" id="step1">
                <label for="step1">Step 1</label>
                <div class="paragraph">
                    <p>Here is a step for the recipe. Complete this step, and then feel free to go onto the next step.</p>
                </div> -->
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