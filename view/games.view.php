<?php ob_start();  ?>

<table class="table table-hover text-center shadow">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Nombre de joueurs</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($games as $game ) :?>
        <tr>
            <td><?= $game->getTitle()?></td>
            <td><?= $game->getNbPlayers()?></td>
            <td><a href="<?= URL ?>games/edit/<?= $game->getId()?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td>
                <form method="POST" action="<?= URL ?>games/delete/<?= $game->getId()?>" onSubmit="return confirm('Etes-vous certains de vouloir supprimer ce jeu ?')">
                    <button class="btn" type="submit"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<a href="<?= URL ?>games/add" class="btn btn-success d-block m-auto w-25">
    Ajouter un jeu    
    <i class="fa-solid fa-gamepad fa-2x"></i>
</a>

<?php
$content = ob_get_clean();
$title = "Liste de jeux";
require_once "view/base.html.php";

?>