<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Recipe Page</title>
</head>

<body>
    <?php
    require_once('inc/dbconnect.inc.php');

    // $stmt = $pdo->query('SELECT * FROM author');
    // while ($row = $stmt->fetch()) {
    //     echo $row['first_name'] . "\n";
    // }
    ?>

    <div class="wrapper">
        <h1 class="grid-col-span-4">My First Recipe</h1>
        <div class="info">
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
        </div>
        <div id="img-info">
            <div id="meal-img" class="">
                <img src="https://source.unsplash.com/random/700x350" alt="">
            </div>
            <div id="meal-info" class="grid-col-span-1">
                <p>Prep:</p>
                <p>Cook:</p>
                <p>Total:</p>
                <p>Servings:</p>
                <p>Yield:</p>
            </div>
        </div>
        <div id="gallery" class="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
            <img src="https://source.unsplash.com/random/100x75" alt="">
        </div>
        <div id="blurb" class="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, neque facilis? Accusantium beatae quibusdam a et? Totam aliquam asperiores est, quis iure cupiditate doloribus ratione tempora sint deserunt perspiciatis nostrum saepe eos doloremque quo. Repudiandae facere ab eius cupiditate officiis voluptatum, temporibus ex aspernatur totam nostrum, sit maxime voluptas illum.</p>
        </div>
        <div id="ingredients" class="">
            <h2>Ingredients</h2>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Maiores laborum repudiandae nisi.</li>
                <li>Aliquid itaque laudantium consequatur?</li>
                <li>Ut, alias fugit! Nostrum?</li>
                <li>Repudiandae porro molestias labore?</li>
            </ul>
        </div>
        <div id="directions" class="">
            <h2>Directions</h2>
        </div>
        <div id="nut-facts">
            <h2 class="">Nutrition Facts</h2>
        </div>
        <div id="notes" class="">
            <h2 class="">Notes</h2>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>