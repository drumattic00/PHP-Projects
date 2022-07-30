<?php
$title="New Recipe";
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
?>

<div class="wrapper">
    <form action="index.php" method="post" id="newRecipe">
        <h2>Basic Information</h2>
        <div class="input-group mb-3">
            <span class="input-group-text" id="recipename">Recipe Name</span>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Prep Time&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="preptime" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Cook Time&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="cooktime" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Total Time&nbsp;</span>
            <input type="text" class="form-control" id="totaltime" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Servings&nbsp;&nbsp;&nbsp;</span>
            <input type="text" class="form-control" id="servings" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div id="ingredients">
            <h2 class="formH2">Ingredients</h2>
            <div class="input-group mb-3">
                <span class="input-group-text">Ingredient 1</span>
                <input type="text" class="form-control" id="ing1" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>
        <button type="button" class="btn btn-light" id="addIngredient">+ ingredient</button>
        <div id="directions">
            <h2 class="formH2">Directions</h2>
            <div class="input-group mb-3">
                <span class="input-group-text">Step 1</span>
                <input type="text" class="form-control" id="step1" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>
        <button type="button" class="btn btn-light" id="addDirection">+ step</button>
        <br><br>
        <h2 class="formH2">Nutrition Facts</h2>
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <h2 class="formH2">Notes</h2>
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" id="submit" form="newRecipe">Submit New Recipe</button>
    </form>
</div>
<?php require_once('inc/footer.inc.php'); ?>