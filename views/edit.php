<?php
include_once('../config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dodaj produkt!</title>
</head>

<body style="background-color:#e5e5e5;">

    <?php
    include_once('../views/navbar.php');
    include_once('../views/forms/editProductForm.php');
    ?>
    <div class="d-flex justify-content-center">
        <a href="index.php"><button type="button" class="btn btn-outline-secondary" style="width: 200px;">Wstecz</button></a>
    </div>
    <?php
    include_once('../views/footer.php')
    ?>
</body>


</html>