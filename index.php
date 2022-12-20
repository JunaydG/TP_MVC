<?php

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

require_once "controller/GameController.php";
$gameController = new GameController();

if (empty($_GET['page'])) {
    require_once "view/home.view.php";
} else {
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
    switch ($url[0]) {
        case 'accueil':
            require_once "view/home.view.php";
            break;
        case 'games':
            if (empty($url[1])) {
                $gameController->displayGames();
            } elseif ($url[1] === "add") {
                $gameController->newGameForm();
            } elseif ($url[1] === "gvalid") {
                $gameController->newGameValidation();
            } elseif ($url[1] === "edit") {
                $gameController->editGameForm($url[2]);
            } elseif ($url[1] === "editvalid") {
                $gameController->editGameValidation();
            } elseif ($url[1] === "delete") {
                $gameController->deleteGame($url[2]);
            }
            break;
    }
}
