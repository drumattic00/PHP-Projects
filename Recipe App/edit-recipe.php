<?php
// Page title
$title="New Recipe";
// Pull in included files
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');

// SETTING MEAL ID
if($_GET){
    $meal_id = htmlspecialchars($_GET['meal_id']);
} else {
    $meal_id = 31;
}

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

// Add list of categories from database to array $categories
$stmt1 = $pdo->query('SELECT * FROM category_types');
$categories = [];
while($row = $stmt1->fetch()) {
    $categories[$row['category_id']] = $row['category'];
}
?>

<div class="new-recipe-wrapper">
    <h1>Edit Recipe - <?= $recipe_name?></h1>
    <form action="" method="" id="recipeForm">
        <h2 class="formH2">Basic Information</h2>
        <!-- Recipe Name Input -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="recipename">Recipe Name</span>
            <input type="text" name="recipe_name" class="form-control" 
                value="<?= $recipe_name ? $recipe_name : '';?>" 
                aria-label="Username" aria-describedby="basic-addon1" />
        </div>
        <!-- Select: Category List -->
        <div class="input-group">
        <label class="input-group-text" for="categorySelect">Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select class="form-select" id="categorySelect" aria-label="Example select with button addon">
                <option selected>Choose...</option>
                <!-- Fill select w/ categories -->
                <?php fillCategories($categories); ?>  //functions.inc.php
            </select>
            <!-- Button to add multiple categories -->
            <button class="btn btn-secondary" id="addCategoryBtn" type="button">Add</button>
        </div>
        <!-- List of categories selected -->
        <div id="selected_categories">
        </div>
        <!-- Button to clear selected categories -->
        <div>
            <input type="button" id="clearCategories" value="Clear Categories" hidden>
        </div>
        <!-- Input: prep time -->
        <div class="input-group mb-3">
            <span class="input-group-text">Prep Time&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="preptime" name="prep_time" 
                value="<?= $prep_time ? $prep_time : '';?>" 
                aria-label="" aria-describedby="basic-addon1">
        </div>
        <!-- Input: cook time -->
        <div class="input-group mb-3">
            <span class="input-group-text">Cook Time&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="cooktime" 
                value="<?= $cook_time ? $cook_time : '';?>" 
                name="cook_time" aria-label="" aria-describedby="basic-addon1">
        </div>
        <!-- Input: total time -->
        <div class="input-group mb-3">
            <span class="input-group-text">Total Time&nbsp;&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="totaltime" 
                value="<?= $total_time ? $total_time : '';?>"
                name="total_time" aria-label="" aria-describedby="basic-addon1">
        </div>
        <!-- Input: servings -->
        <div class="input-group mb-3">
            <span class="input-group-text">Servings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="servings"
                value="<?= $servings ? $servings : '';?>" 
                name="servings" aria-label="" aria-describedby="basic-addon1">
        </div>
        <!-- input: image url -->
        <div class="input-group mb-3">
            <span class="input-group-text">Image URL&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="img_url" 
            value="<?= $img_url ? $img_url : '';?>"
            name="img_url" aria-label="" aria-describedby="basic-addon1">
        </div>
        <!-- Input: description -->
        <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" name="descript" aria-label="With textarea"><?= $descript ? $descript : '';?></textarea>
        </div>
        <!-- Input: ingredients -->
        <div id="ingredients">
            <h2 class="formH2">Ingredients</h2>
            <div class="input-group mb-3">
                <span class="input-group-text">Ingredient 1</span>
                <input type="text" class="form-control" id="ing_1" name="ing_1" aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>
        <!-- Button: add ingredient -->
        <button type="button" class="btn btn-light" id="addIngredient">+ ingredient</button>
        <!-- Input: directions -->
        <div id="directions">
            <h2 class="formH2">Directions</h2>
            <div class="input-group mb-3">
                <span class="input-group-text">Step 1</span>
                <textarea class="form-control" id="step_1" name="step_1" aria-label="" aria-describedby="basic-addon1"></textarea>
            </div>
        </div>
        <!-- Button to add direction -->
        <button type="button" class="btn btn-light" id="addDirection">+ step</button>
        <br><br>
        <h2 class="formH2">Nutrition Facts</h2>
        <!-- Text area: nutrition info -->
        <div class="input-group">
            <textarea class="form-control" name="nutrition" aria-label="With textarea"><?= $nutrition ? $nutrition : '';?></textarea>
        </div>
        <h2 class="formH2">Notes</h2>
        <!-- Text area: recipe notes -->
        <div class="input-group">
            <textarea class="form-control" name="notes" aria-label="With textarea"><?= $notes ? $notes : '';?></textarea>
        </div>
        <br>
        <!-- Button: submit form -->
        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Update Recipe">
    </form>
</div>

<!-- Insert footer -->
<?php require_once('inc/footer.inc.php');
// Pull in current recipe categories 
$stmtCat = $pdo->prepare('SELECT * FROM category_types INNER JOIN meal_categories ON category_types.category_id = meal_categories.category_id WHERE meal_categories.meal_id = :meal_id;');
$stmtCat->execute([$meal_id]);
$meal_categories = [];
while($row = $stmtCat->fetch()) {
    array_push($meal_categories, $row['category']);
}
foreach($meal_categories as $meal_category) {
    echo "<script>addCategory('$meal_category')</script>";
}
?>

