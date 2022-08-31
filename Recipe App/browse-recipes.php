<?php
$title = "Browse Recipes";
$categoryName = "";
$explorerType = "";
require_once('inc/header.inc.php');
require_once('inc/nav.inc.php');
require_once('inc/dbconnect.inc.php');
require_once('inc/functions.inc.php');

if(isset($_GET['categoryName'])) {
    $categoryName = $_GET['categoryName'];
    $title = $categoryName;
}

$stmtFrag = 'SELECT * FROM basic_info INNER JOIN meal_categories on basic_info.meal_id = meal_categories.meal_id WHERE meal_categories.category_id = ';

switch ($categoryName) {
    case "breakfast":
        $stmt1 = $pdo->query($stmtFrag . '1');
        $explorerType = "basic";
        $title = "Breakfast Recipes";
        break;
    case 'lunch':
        $stmt1 = $pdo->query($stmtFrag . '2');
        $explorerType = "basic";
        $title = 'Lunch Recipes';
        break;
    case 'dinner':
        $stmt1 = $pdo->query($stmtFrag . '3');
        $explorerType = "basic";
        $title = 'Dinner Recipes';
        break;
    case 'snacks':
        $stmt1 = $pdo->query($stmtFrag . '4');
        $explorerType = "basic";
        $title = 'Snack and Appetizer Recipes';
        break;
    case 'chicken':
        $stmt1 = $pdo->query($stmtFrag . '5');
        $explorerType = "ingredient";
        $title = 'Chicken Recipes';
        break;
    case 'beef':
        $stmt1 = $pdo->query($stmtFrag . '6');
        $explorerType = "ingredient";
        $title = 'Beef Recipes';
        break;
    case 'pork':
        $stmt1 = $pdo->query($stmtFrag . '7');
        $explorerType = "ingredient";
        $title = 'Pork Recipes';
        break;
    case 'seafood':
        $stmt1 = $pdo->query($stmtFrag . '8');
        $explorerType = "ingredient";
        $title = 'Seafood Recipes';
        break;
    case 'vegetarian':
        $stmt1 = $pdo->query($stmtFrag . '9');
        $explorerType = "ingredient";
        $title = 'Vegetarian Recipes';
        break;
    case 'side-dishes':
        $stmt1 = $pdo->query($stmtFrag . '10');
        $explorerType = "basic";
        $title = 'Side Dish Recipes';
        break;
    case 'desserts':
        $stmt1 = $pdo->query($stmtFrag . '11');
        $explorerType = "basic";
        $title = 'Dessert Recipes';
        break;
    case 'drinks':
        $stmt1 = $pdo->query($stmtFrag . '12');
        $explorerType = "basic";
        $title = 'Drink Recipes';
        break;
    case 'soups':
        $stmt1 = $pdo->query($stmtFrag . '13');
        $explorerType = "basic";
        $title = 'Soup, Stew, and Chili Recipes';
        break;
    case 'barbeque':
        $stmt1 = $pdo->query($stmtFrag . '14');
        $explorerType = "basic";
        $title = 'Barbeque Recipes';
        break;
    case 'healthy':
        $stmt1 = $pdo->query($stmtFrag . '15');
        $explorerType = "basic";
        $title = 'Healthy Recipes';
        break;
    case 'noodles':
        $stmt1 = $pdo->query($stmtFrag . '16');
        $explorerType = "ingredient";
        $title = 'Pasta and Noodle Recipes';
        break;
    case 'salads':
        $stmt1 = $pdo->query($stmtFrag . '17');
        $explorerType = "basic";
        $title = 'Salad Recipes';
        break;
    case 'american':
        $stmt1 = $pdo->query($stmtFrag . '18');
        $explorerType = "cuisine";
        $title = 'American Cuisine Recipes';
        break;
    case 'asian':
        $stmt1 = $pdo->query($stmtFrag . '19');
        $explorerType = "cuisine";
        $title = 'Asian Cuisine Recipes';
        break;
    case 'european':
        $stmt1 = $pdo->query($stmtFrag . '20');
        $explorerType = "cuisine";
        $title = 'European Cuisine Recipes';
        break;
    case 'mediterranean':
        $stmt1 = $pdo->query($stmtFrag . '21');
        $explorerType = "cuisine";
        $title = 'Mediterranean Cuisine Recipes';
        break;
    case 'indian':
        $stmt1 = $pdo->query($stmtFrag . '22');
        $explorerType = "cuisine";
        $title = 'Indian Cuisine Recipes';
        break;
    case 'mexican':
        $stmt1 = $pdo->query($stmtFrag . '23');
        $explorerType = "cuisine";
        $title = 'Mexican Cuisine Recipes';
        break;
    case 'italian':
        $stmt1 = $pdo->query($stmtFrag . '24');
        $explorerType = "cuisine";
        $title = 'Italian Cuisine Recipes';
        break;
    case 'by-ingredient':
        $explorerType = "ingredient";
        $stmt1 = $pdo->query('SELECT * FROM basic_info');
        $title = 'Recipes by Ingredient';
        break;
    case 'world-cuisine':
        $explorerType = "cuisine";
        $stmt1 = $pdo->query('SELECT * FROM basic_info');
        $title = 'Recipes by World Cuisine';
        break;
    default:
        $stmt1 = $pdo->query('SELECT * FROM basic_info');
        $title = 'Browsing All Recipes';
        $explorerType = "basic";
        break;
}

?>
<div class='browse-recipes-wrapper'>
    <?php 
    if(isset($_GET['delete']) && ($_GET['delete'] == 'complete')) {
        showDeleteConfirmation();
    }

    switch($explorerType) {
        case 'basic':
            require_once('inc/recipe-explorer.inc.php');
            break;
        case 'ingredient':
            require_once('inc/ingredient-explorer.inc.php');
            break;
        case 'cuisine':
            require_once('inc/world-cuisine-explorer.inc.php');
            break;
        default:
            require_once('inc/recipe-explorer.inc.php');
            break;
    }
    ?>

    <div class="card_container">
        <?php
        while($row = $stmt1->fetch()){
            recipeCard($row);
        }
        ?>
    </div>
</div>

<?php require_once('inc/footer.inc.php'); ?>