<?php
require_once 'partials/header.php';
?>

<h1 class="text-center mt-5">Se connecter</h1>

<form action="" method="POST" class="col-md-6 offset-md-3 mt-5">
        <div class="mb-3">
            <label for="InputMail" class="form-label">Pseudo de l'utilisateur</label>
            <input type="text" class="form-control" id="InputMail" name="email">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Mot de passe de l'utilisateur</label>
            <input type="password" class="form-control" id="InputPassword" name="mdp">
        </div>
        <button class="btn btn-primary" type="submit">Se connecter</button>
    </form>

<?php 
require_once 'partials/footer.php';
?>