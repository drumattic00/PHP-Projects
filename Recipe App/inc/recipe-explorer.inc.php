<div class="recipes-wrapper">
    <h1><?= $title ?></h1>
    <div class="childlinks-container">
        <a href="browse-recipes.php">
            <button class="child-links 
                <?= ($title == 'Browse Recipes' ? 'active-btn' : '');?>">
                &nbsp;All&nbsp;</button></a>
        <a href="browse-recipes.php?categoryName=favorite-recipes">
            <button class="child-links
                <?= ($title == 'Favorite Recipes' ? 'active-btn' : '');?>">
                Favorite Recipes</button></a>
        <a href="browse-recipes.php?categoryName=breakfast"><button class="child-links
            <?= ($title == 'Breakfast Recipes' ? 'active-btn' : '');?>">
                Breakfast</button></a>
        <a href="browse-recipes.php?categoryName=lunch"><button class="child-links
            <?= ($title == 'Lunch Recipes' ? 'active-btn' : '');?>">
                Lunch</button></a>
        <a href="browse-recipes.php?categoryName=dinner"><button class="child-links
            <?= ($title == 'Dinner Recipes' ? 'active-btn' : '');?>">
                Dinner</button></a>
        <a href="browse-recipes.php?categoryName=desserts"><button class="child-links
            <?= ($title == 'Dessert Recipes' ? 'active-btn' : '');?>">
                Desserts</button></a>
        <a href="browse-recipes.php?categoryName=drinks"><button class="child-links
            <?= ($title == 'Drink Recipes' ? 'active-btn' : '');?>">
                Drinks</button></a>
        <a href="browse-recipes.php?categoryName=healthy"><button class="child-links
            <?= ($title == 'Healthy Recipes' ? 'active-btn' : '');?>">
                Healthy</button></a>
        <a href="browse-recipes.php?categoryName=salads"><button class="child-links
            <?= ($title == 'Salad Recipes' ? 'active-btn' : '');?>">
                Salads</button></a>
        <a href="browse-recipes.php?categoryName=snacks"><button class="child-links
            <?= ($title == 'Snack and Appetizer Recipes' ? 'active-btn' : '');?>">
                Snacks and Appetizers</button></a>
        <a href="browse-recipes.php?categoryName=world-cuisine"><button class="child-links
            <?= ($title == 'World Cuisine Recipes' ? 'active-btn' : '');?>">
                By World Cuisine</button></a>
        <a href="browse-recipes.php?categoryName=by-ingredient"><button class="child-links
            <?= ($title == 'Recipes by Ingredient' ? 'active-btn' : '');?>">
                By Ingredient</button></a>
    </div>
</div>