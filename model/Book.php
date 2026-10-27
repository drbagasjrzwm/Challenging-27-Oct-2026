<?php 

require_once "./config/database.php";

class Book {
    private $id, $title;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public static function all() {
        
        global $pdo;

        $query = $pdo->query("SELECT * FROM books");

        return $query->fetchAll(PDO::FETCH_CLASS, 'Book');
    }

    public static function store($title) {
        try {
            global $pdo;

            $query = "INSERT INTO books (title) VALUES ('$title')";

            $pdo->exec($query);

            $_SESSION['success'] = "Menambahkan data book sukses";

            return header('Location: /book');
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
}

?>