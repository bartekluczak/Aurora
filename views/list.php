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
    <title>Twoje produkty!</title>
</head>

<body style="background-color:#e5e5e5;">

    <?php
    include_once('../views/navbar.php');
    $results = include_once('../inc/products.inc.php');
    if ($results == 'error') {
        echo    '<div class="container col-7 d-flex justify-content-center">
                    <h3 class="fw-light mt-5 mb-5">Nie masz jeszcze żadnego produktu!</h3>
                </div>';
    } else {
    ?>
        <div class="container col-7">
            <h3 class="fw-light mt-4">Wszystkie Twoje produkty</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                Tytuł
                            </th>
                            <th scope="col">
                                Opis
                            </th>
                            <th scope="col">
                                Status
                            </th>
                            <th scope="col">
                                Opcje
                            </th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($results as $key => $result) {
                    ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $result['TITLE'] ?>
                                </td>
                                <td>
                                    <?php echo $result['DESCRIPTION'] ?>
                                </td>
                                <td>
                                    <?php echo $result['STATUS'] ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href='../views/edit.php?id=<?php echo $result['ID'] ?>' value='<?php echo $result['ID'] ?>'>
                                            <button class="btn btn-outline-secondary btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </button>
                                        </a>
                                        <form method="POST" action="../inc/products.inc.php">
                                            <input type="text" name="ID" value="<?php echo $result['ID'] ?>" hidden>
                                            <button class="btn btn-outline-secondary btn-sm" type="submit" name="delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M6.5 1a.5.5 0 0 0-.5.5v1h4v-1a.5.5 0 0 0-.5-.5h-3ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1H3.042l.846 10.58a1 1 0 0 0 .997.92h6.23a1 1 0 0 0 .997-.92l.846-10.58Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                <?php
                    }
                }
                ?>
                </table>
                <div class="d-flex justify-content-center">
                    <a href="<?php echo ROOT ?>index.php"><button type="button" class="btn btn-outline-secondary" style="width: 200px;">Wstecz</button></a>
                </div>

                <?php
                include_once('../views/footer.php')
                ?>
</body>

</html>