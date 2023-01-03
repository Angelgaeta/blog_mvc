<?php
require_once 'partials/header.php';
?>

<h1 class="text-center mt-5">Ajouter un article</h1>
<div class="container">
<form action="" method="POST" class="col-md-6 offset-md-3 mt-5">
        <div class="mb-3">
            <label for="InputTitle" class="form-label">Titre</label>
            <input type="text" class="form-control" id="InputMail" name="title">
        </div>
        <div class="mb-3">
            <label for="InputPicture" class="form-label">Image</label>
            <input type="file" class="form-control" id="InputPicture" name="picture">
        </div>
        <div class="mb-3">
            <label for="InpuContent" class="form-label">Contenu</label>
            <textarea class="form-control" id="InputContent" name="content"></textarea>
        </div>
        <?php foreach ($categories as $category){ ?>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?php echo $category->getIdCategory(); ?>" name[]="categories" id="<?php echo $category->getCategoryName(); ?>">
        <label class="form-check-label" for="<?php echo $category->getCategoryName() ?>">
            <?php echo $category->getCategoryName(); ?> 
        </label>
        </div>
        <?php } ?>


        <button class="btn btn-primary mt-3" type="submit">Soumettre l'article</button>
    </form>
</div>
<?php 
require_once 'partials/footer.php';
?>