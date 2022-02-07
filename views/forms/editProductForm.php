<?php
$url = basename($_SERVER['REQUEST_URI']);
$url = explode("id=", $url);
if ($url[1] == '') {
    header('location: ../index.php');
} else {

    $productId = $url[1];
    include_once(__DIR__ . '../../../config.php');

    include ROOT . '/controllers/dbController.php';
    include ROOT . '/controllers/productController.php';

    $productController = new ProductsController('', '', '');
    $product = $productController->getProductById($productId);
?>
    <div class="container col-4">
        <h3 class="fw-light mt-4">Edytuj produkt</h1>
            <form class="mt-3 needs-validation" action="../inc/products.inc.php" method="post">
                <div class="row mb-3">
                    <input type="text" name="product-id" value="<?php echo $product[0]['ID'] ?>" hidden>
                    <input class="form-control" type="text" name="product-title" value="<?php echo $product[0]['TITLE'] ?>">
                </div>
                <div class="row mb-3">
                    <textarea class="form-control" style="height: 100px" name="product-description" placeholder="<?php echo $product[0]['DESCRIPTION'] ?>"></textarea>
                </div>
                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="product-status" value="dostępny" checked>
                        <label class="form-check-label">Produkt dostępny</label>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="product-status" value="niedostępny">
                        <label class="form-check-label">Produkt niedostępny</label>
                    </div>
                </div>

                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-outline-secondary" style="width: 200px;" type='submit' name='confirm'>Dodaj</button>
                </div>
            </form>
    </div><?php } ?>