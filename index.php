<?php
require_once __DIR__ . "/models/Movie.php";

$film1 = new Movie("Star Wars I", "23", Movie::$movieTypologys[2]);
$film2 = new Movie("Star Wars II", "26", Movie::$movieTypologys[1]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container d-flex justify-content-center align-items-center gap-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h1 class="card-text"> <?php echo $film1->getTitolo(); ?></h1>
                <p class="card-text"> <?php echo $film1->getInfo(); ?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h1 class="card-text"> <?php echo $film2->getTitolo(); ?></h1>    
                <p class="card-text"> <?php echo $film2->getInfo(); ?></p>
            </div>
        </div>
    </div>
</body>
</html>