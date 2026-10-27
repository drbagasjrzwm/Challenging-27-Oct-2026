<?php

require_once "./model/Author.php";
require_once "./model/Book.php";


class BookController extends Controller {
    static function index() {
        $book = Book::all();

        return self::view("./views/book.php", $book);
    }

    static function create() {
        $authors = Author::all();
        return self::view("./views/book/create.php" ,[
            'authors' => $authors
        ]);
    }

    static function show($id) {
        return $id;
    }

    public static function store($data) {
    // Tangkap data yang dikirim dari form $_POST
    $title = $data['title'];
    $year = $data['year'];
    $author_id = $data['author_id'];
    $publisher_id = $data['publisher_id'];

    if (empty($title) || empty($author_id)) {
        $_SESSION['validation_book'] = "Field required!";
        header("Location: /book/create");
        return;
    }

    // Panggil method store di Model dengan mengirimkan semua data
    Book::store($title, $year, $author_id, $publisher_id);
}
}