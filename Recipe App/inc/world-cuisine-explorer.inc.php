<div class="recipes-wrapper">
    <h1><?= $title ?></h1>
    <div class="childlinks-container">
        <a href="browse-recipes.php">
            <button class="child-links 
                <?= ($title == 'Browse Recipes' ? 'active-btn' : '');?>">
                &nbsp;All&nbsp;</button></a>
        <a href="browse-recipes.php?categoryName=american">
            <button class="child-links
                <?= ($categoryName == 'american' ? 'active-btn' : '');?>">
                American</button></a>
        <a href="browse-recipes.php?categoryName=asian"><button class="child-links
            <?= ($categoryName == 'asian' ? 'active-btn' : '');?>">
                Asian</button></a>
        <a href="browse-recipes.php?categoryName=european"><button class="child-links
            <?= ($categoryName == 'european' ? 'active-btn' : '');?>">
                European</button></a>
        <a href="browse-recipes.php?categoryName=indian"><button class="child-links
            <?= ($categoryName == 'indian' ? 'active-btn' : '');?>">
                Indian</button></a>
        <a href="browse-recipes.php?categoryName=italian"><button class="child-links
            <?= ($categoryName == 'italian' ? 'active-btn' : '');?>">
                Italian</button></a>
        <a href="browse-recipes.php?categoryName=mediterranean"><button class="child-links
            <?= ($categoryName == 'mediterranean' ? 'active-btn' : '');?>">
                Mediterranean</button></a>
        <a href="browse-recipes.php?categoryName=mexican"><button class="child-links
            <?= ($categoryName == 'mexican' ? 'active-btn' : '');?>">
                Mexican</button></a>
    </div>
</div>