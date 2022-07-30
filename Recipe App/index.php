<?php
$title="Recipe Page";
require_once('inc/header.inc.php');
?>
    <?php
    // require_once('inc/dbconnect.inc.php');

    // $stmt = $pdo->query('SELECT * FROM author');
    // while ($row = $stmt->fetch()) {
    //     echo $row['first_name'] . "\n";
    // }

    ?>


<div class="wrapper">
        <h1 class="">My First Recipe</h1>
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
                <img src="https://source.unsplash.com/random/700x350" alt="">
            </div>
            <div id="gallery" class="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
                <img src="https://source.unsplash.com/random/100x75" alt="">
            </div>
            <div id="meal-info" class="grid-col-span-1">
                <p>Prep: <span id="prep">10 mins</span></p>
                <p>Cook: <span id="cook">30 mins</span></p>
                <p>Total: <span id="total">40 mins</span></p>
                <p>Servings: <span id="servings">4</span></p>
            </div>
        </div>
        <div class="recipe-info">
            <div id="blurb" class="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, neque facilis? Accusantium beatae quibusdam a et? Totam aliquam asperiores est, quis iure cupiditate doloribus ratione tempora sint deserunt perspiciatis nostrum saepe eos doloremque quo. Repudiandae facere ab eius cupiditate officiis voluptatum, temporibus ex aspernatur totam nostrum, sit maxime voluptas illum.</p>
            </div>
            <h2>Ingredients</h2>
            <div id="ingredients" class="">
                <input type="checkbox" name="ing1" id="ing1">
                <label for="ing1">Some Ingredient Here</label>
            </div>
            <h2>Directions</h2>
            <div id="directions" class="">
                <input type="checkbox" name="step1" id="step1">
                <label for="step1">Step 1</label>
                <div class="paragraph">
                    <p>Here is a step for the recipe. Complete this step, and then feel free to go onto the next step.</p>
                </div>
            </div>
            <h2 class="">Nutrition Facts</h2>
            <div id="nutrition">
                <p>Here are some nutrition facts about this meal. They are extensive, and brief, all at the same time!</p>
            </div>
            <h2 class="">Notes</h2>
            <div id="notes" class="">
                <p>Here are some notes about this recipe. These are private, and are stored individually, per user. Please log in to use this feature.</p>
            </div>
        </div>
        <footer>Some Shit Here.</footer>
    </div>
<?php require_once('inc/footer.inc.php');