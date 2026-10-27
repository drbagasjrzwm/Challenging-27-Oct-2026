<?php

require_once "./model/Author.php";

class AuthorController extends Controller {
    static function index() {
        $author = Author::all();

        return self::view("./views/author.php", $author);
    }

    static function create() {
        return self::view("./views/author/create.php");
    }

    static function show($id) {
        return $id;
    }

    static function store($data) {

        if($data == '') {
            $_SESSION['validation_name'] = "Name field required!";
            header("Location: /author/create");
            return;
        }
            
        Author::store($data);
    }
}