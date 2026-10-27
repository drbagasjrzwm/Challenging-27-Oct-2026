<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <!-- Tambahkan CSS Bootstrap CDN jika belum ada -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Book</h2>
        <form action="/book/store" method="POST">
            <div class="mb-2">
                <label for="author_id" class="form-label">Author</label>
                <select name="author_id" class="form-control" required>
                    <option value=""> Pilih Author </option>
                    <!-- Masukkan looping data author di sini -->
                </select>
            </div>

            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Please input title name.." required>
            </div>

            <div class="mb-2">
                <label for="year" class="form-label">Year</label>
                <input type="number" name="year" class="form-control" placeholder="Please input year name.." required>
            </div>

            <div class="mb-2">
                <label for="publisher_id" class="form-label">Publisher</label>
                <select name="publisher_id" class="form-control" required>
                    <option value=""> Pilih Publisher </option>
                    <!-- Masukkan looping data publisher di sini -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/book" class="btn btn-secondary">Back to Book List</a>
        </form>
    </div>
</body>
</html>