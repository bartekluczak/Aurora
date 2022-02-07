<?php
include_once('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Aurora Products</title>
</head>

<body style="background-color:e5e5e5;">
    <?php
    include_once('views/navbar.php');
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <img src="public/img/img1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col">
                <h3 class="text-center">Wygodnie zarządzaj swoimi produktami</h3>
                <p class="mt-4 fw-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et turpis lacinia, hendrerit quam ac, mollis tellus.
                    Vivamus a libero a ex sodales commodo a ultrices mi. Fusce commodo enim vitae molestie gravida. Sed pharetra ac dolor
                    vel tristique. Cras hendrerit maximus est, sed interdum arcu cursus vel. Pellentesque commodo leo et elit blandit tempus.
                    Sed nec purus a sapien sagittis condimentum sodales at justo. Quisque fringilla erat et lorem malesuada porttitor.
                </p>
                <p class="fw-light">
                    Sed congue lacinia magna ut mattis. Ut tortor turpis, convallis eu lectus eget, placerat auctor quam. In scelerisque ante elit,
                    ut venenatis nisl venenatis sit amet. Proin lacus justo, vehicula et euismod bibendum, egestas sed erat. Suspendisse pretium dui sed
                    quam rhoncus, eu lobortis justo sollicitudin. Suspendisse potenti. Ut non pellentesque mauris, in hendrerit ante. Integer tellus elit,
                    blandit vel ligula sed, pulvinar condimentum sem. Mauris in ornare lacus. Nullam blandit malesuada sem sit amet fringilla. Donec posuere
                    varius leo id tincidunt. Aliquam sed neque magna.
                </p>
                <p class="d-flex justify-content-center mt-5"><a href="views/add.php"><button type="button" class="btn btn-outline-secondary" style="width: 200px;">Dodaj nowy</button></a></p>
                <p class="d-flex justify-content-center"><a href="views/edit.php"><button type="button" class="btn btn-outline-secondary" style="width: 200px;">Wyświetl produkty</button></a></p>

            </div>
        </div>
    </div>


    <?php
    include_once('views/footer.php')
    ?>
</body>

</html>