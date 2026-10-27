<?php 

require "template/header.php";

$no = 1;
?>

<div class="container mt-2">
    <div class="card">
        <div class="card-header text-center bg-primary">
            PPLG Library List Authors
        </div>

        <?php if(isset($_SESSION['success'])) : ?>
    
        <div class="alert alert-success">
            <?= $_SESSION['success'] ?>
        </div>
    
        <?php endif ?>
        <div class="card-body">
            <div class="d-flex mb-3">
                <a href="/author/create" class="btn btn-primary m-2 border border-dark"> Add Author </a>
            </div>
            <div class="table table-responsive">
                <table class="table table-primary border border-dark">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Name </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $author) :?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $author->getName() ?></td>
                                <td>
                                    <a class="bg-warning p-2 btn btn-rounded text-light" href="/author/ <?= $author->getId() ?>/edit">
                                        Update
                                    </a>
                                    <a class="bg-danger p-2 btn btn-rounded text-light" href="/author  <?= $author->getId() ?>/delete">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require "template/footer.php"; ?>