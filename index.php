<?php

require './controller/HomeController.php';
require './controller/BookController.php';
require './controller/AuthorController.php';

$server = $_SERVER["REQUEST_URI"]; // URI = Uniform Resources Identifier \\

switch($server) {
    case $server == "/";
        return HomeController::index();
    case $server == "/book";
        return BookController::index();
    case $server == '/book/$id/update';

        return BookController::show($id);
    case $server == "/book/create";

        if (isset($_POST['name'])) {
            return BookController::store($_POST['name']);
        }

        return BookController::create();

    case $server == "/author";
        return AuthorController::index();
    case $server == '/author/$id/update';

        return AuthorController::show($id);
    case $server == "/author/create";

        if (isset($_POST['name'])) {
            return AuthorController::store($_POST['name']);
        }

        return AuthorController::create();


    case $server == "/profile";
        require "./views/profile.php";
    break;
    default:
        require "./views/404-page.php";
}