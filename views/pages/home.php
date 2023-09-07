<?php include_once("../views/partials/header.php") ?>
<?php include_once("../views/partials/navbar.php") ?>

<div class="home-main-container">
    <div>
    <p class="menu-section-heading">
         Menu 
      
    </p>
<h1><?php echo $image_path?></h1>
    <div class="menu-cards-container">
        <?php 
        $lists=["豚カツ","Rice","Jollof","Fufu"];
        foreach ($lists as $value) {
         ?>
        <div class="dish-card">
            <img src="/public/images/home/dish.jpg" alt="menu-item" class="menu-image"/>
            <a><p class="card-description"> <?=$value?></p></a>
        </div>
        <?php } ;?>
    </div>

    </div>
    
    <div>
    <button> Our Menu</button>
    </div>
</div>


<?php include_once("../views/partials/footer.php") ?>