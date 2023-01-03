<?php 
require_once 'partials/header.php';
?>

<section id="hero">
    <img src="assets/img/<?php echo $post->getPicture() ?>" alt="">
</section>

<section id="main" class="container">
    <h1 class="text-center"><?php echo $post->getTitle() ?></h1>
    <div id="caegories">
        <?php foreach($post_categories as $post_category){ ?>
            <span class="badge rounded-pill text-bg-primary"><?php echo $post_category->getCategoryName() ?></span>
        <?php } ?>
    </div>
    <p> <?php echo $post->getContent() ?></p>
</section>

<?php
require_once 'partials/footer.php';
?>