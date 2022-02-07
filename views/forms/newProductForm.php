<?php
$results = include_once('../inc/products.inc.php');
?>
<div class="container col-4">
    <h3 class="fw-light mt-4">Dodaj nowy produkt</h1>
        <form class="mt-3 needs-validation" action="../inc/products.inc.php" method="post">
            <div class="row mb-3">
                <input class="form-control" type="text" name="product-title" placeholder="Podaj nazwę produktu" required>
            </div>
            <div class="row mb-3">
                <textarea class="form-control" style="height: 100px" name="product-description" placeholder="Tutaj możesz opisać swój produkt"></textarea>
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
                <button class="btn btn-outline-secondary" style="width: 200px;" type='submit' name='submit'>Dodaj</button>
            </div>
        </form>
</div>