<?php
$conn = mysqli_connect("localhost", "root", "", "test-dumbways-2") or die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Filmku</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-white">Filmku <span class="text-warning">Seru</span></h1>
            </div>
            <div class="col mt-3">
                <button class="btn btn-warning">Add Film</button>
                <button class="btn btn-warning">Add Director</button>
                <button class="btn btn-warning">Add Genre</button>
                <button class="btn btn-warning">Add Writer</button>
            </div>
        </div>
        <div class="row mt-4">
            <?php
            $no = 1;
            $data = mysqli_query($conn, "select * from film");
            while ($d = mysqli_fetch_array($data)) : ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $d['photo'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span>8.5</span>
                            <h5 class="card-title"><?= $d['title'] ?></h5>
                            <a href="#" class="btn btn-dark btn-block">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>