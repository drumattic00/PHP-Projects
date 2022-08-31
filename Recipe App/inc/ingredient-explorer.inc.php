<div class="recipes-wrapper">
    <h1><?= $title ?></h1>
    <div class="childlinks-container">
        <a href="browse-recipes.php">
            <button class="child-links 
                <?= ($title == 'Browse Recipes' ? 'active-btn' : '');?>">
                &nbsp;All&nbsp;</button></a>
        <a href="browse-recipes.php?categoryName=chicken">
            <button class="child-links
                <?= ($categoryName == 'chicken' ? 'active-btn' : '');?>">
                Chicken</button></a>
        <a href="browse-recipes.php?categoryName=beef"><button class="child-links
            <?= ($categoryName == 'beef' ? 'active-btn' : '');?>">
                Beef</button></a>
        <a href="browse-recipes.php?categoryName=pork"><button class="child-links
            <?= ($categoryName == 'pork' ? 'active-btn' : '');?>">
                Pork</button></a>
        <a href="browse-recipes.php?categoryName=seafood"><button class="child-links
            <?= ($categoryName == 'seafood' ? 'active-btn' : '');?>">
                Seafood</button></a>
        <a href="browse-recipes.php?categoryName=vegetarian"><button class="child-links
            <?= ($categoryName == 'vegetarian' ? 'active-btn' : '');?>">
                Vegetarian</button></a>
        <a href="browse-recipes.php?categoryName=noodles"><button class="child-links
            <?= ($categoryName == 'noodles' ? 'active-btn' : '');?>">
                Pasta and Noodles</button></a>
    </div>
</div>