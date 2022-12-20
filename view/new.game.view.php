<?php ob_start(); ?>

<form method="POST" action="<?= URL ?>games/gvalid">
    <div class="form-group">
        <label for="title">Titre du jeu</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="nbPlayers">Nombre de joueurs</label>
        <input type="number" class="form-control" name="nbPlayers" id="nbPlayers">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php

$content = ob_get_clean();
$title = "Ajouter un jeu";
require_once "view/base.html.php";

?>