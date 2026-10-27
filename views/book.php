<?php require "template/header.php";

$no = 1;


?>

<div class="container mt-2">
    <div class="card">
        <div class="card-header text-center bg-primary">
            PPLG Library List Book's
        </div>

        <?php if (isset($_SESSION['success'])) : ?>

        <div class="card-body">
            <?= $_SESSION['success'] ?>
        </div>

        <?php endif ?>
        <div class="card-body">
            <div class="d-flex mb-3">
                <input type="text" class="form-control border border-dark" placeholder="Search...">
                <button class="btn btn-primary m-2 border border-dark">Find</button>
            </div>
            <div>
                <a href="/book/create" class="btn btn-primary mb-3 border border-dark"> Add Book</a>
            </div>
            <div class="table table-responsive">
                <table class="table table-primary border border-dark">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Author </th>
                            <th>Title </th>
                            <th>Year </th>
                            <th>Publisher </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th><?= $no++ ?></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <td></td>
                                <td>
                                    <a class="bg-warning p-2 btn btn-rounded text-light" href="/book/edt">
                                        Update
                                    </a>
                                    <a class="bg-danger p-2 btn btn-rounded text-light" href="">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require "template/footer.php"; ?>