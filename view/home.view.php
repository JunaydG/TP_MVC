<?php ob_start(); ?>

<p>Accueil</p>

<?php

$content = ob_get_clean();
$title = "Bienvenue chez Tp_Games";
require_once "view/base.html.php";

?>