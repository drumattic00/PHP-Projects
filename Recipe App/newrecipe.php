<?php
$title="New Recipe";
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');

$stmt1 = $pdo->query('SELECT * FROM category_types');
$categories = [];
while($row = $stmt1->fetch()) {
    $categories[$row['category_id']] = $row['category'];
}


?>

<div class="wrapper">
    <!-- <form action="submitrecipe.php" method="post" id="newRecipe"> -->
    <form action="submitrecipe.php" method="post" id="recipeForm">
        <h2 class="formH2">Basic Information</h2>
        <div class="input-group mb-3">
            <span class="input-group-text" id="recipename">Recipe Name</span>
            <input type="text" name="recipe_name" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        
        <!-- <div class="input-group mb-3">
            <label class="input-group-text" for="category">Category&nbsp;&nbsp;&nbsp;</label>
            <select class="form-select" id="category" name="category_id">
                <option selected>Choose...</option>
                <?php //fillCategories($categories); ?>
            </select>
        </div> -->




        <!-- DELETE THIS AFTER TESTING -->
        <div class="input-group">
        <label class="input-group-text" for="categorySelect">Category&nbsp;&nbsp;&nbsp;</label>
            <select class="form-select" id="categorySelect" aria-label="Example select with button addon">
                <option selected>Choose...</option>
                <?php fillCategories($categories); ?>
            </select>
            <button class="btn btn-secondary" id="addCategoryBtn" type="button">Add</button>
        </div>
        <div id="selected_categories">
            <!-- <span class="selected_category">A Sample Category</span> -->
        </div>
            <!-- DELETE ABOVE AFTER TESTING -->
        <div>
            <input type="button" id="clearCategories" value="Clear Categories" hidden>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Prep Time&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="preptime" name="prep_time" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Cook Time&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="cooktime" placeholder="" name="cook_time" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Total Time&nbsp;</span>
            <input type="text" class="form-control" id="totaltime" placeholder="" name="total_time" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Servings&nbsp;&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="servings" placeholder="" name="servings" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Image URL&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="img_url" placeholder="" name="img_url" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" name="descript" aria-label="With textarea"></textarea>
        </div>
        <div id="ingredients">
            <h2 class="formH2">Ingredients</h2>
            <div class="input-group mb-3">
                <span class="input-group-text">Ingredient 1</span>
                <input type="text" class="form-control" id="ing_1" placeholder="" name="ing_1" aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>
        <button type="button" class="btn btn-light" id="addIngredient">+ ingredient</button>
        <div id="directions">
            <h2 class="formH2">Directions</h2>
            <div class="input-group mb-3">
                <span class="input-group-text">Step 1</span>
                <input type="text" class="form-control" id="step_1" name="step_1" aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>
        <button type="button" class="btn btn-light" id="addDirection">+ step</button>
        <br><br>
        <h2 class="formH2">Nutrition Facts</h2>
        <div class="input-group">
            <textarea class="form-control" name="nutrition" aria-label="With textarea"></textarea>
        </div>
        <h2 class="formH2">Notes</h2>
        <div class="input-group">
            <textarea class="form-control" name="notes" aria-label="With textarea"></textarea>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit">
    </form>
</div>
<?php require_once('inc/footer.inc.php'); ?>