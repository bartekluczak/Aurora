<?php
include_once(__DIR__ . '/../config.php');

include ROOT . '/controllers/dbController.php';
include ROOT . '/controllers/productController.php';

if (isset($_POST['submit'])) {
    $title = $_POST['product-title'];
    $description = $_POST['product-description'];
    $status = $_POST['product-status'];

    $product = new ProductsController($title, $description, $status);

    $product->createProduct();

    return header('location: ../views/list.php?added');
}

if (isset($_POST['confirm'])) {

    $title = $_POST['product-title'];
    $description = $_POST['product-description'];
    $status = $_POST['product-status'];
    $id = $_POST['product-id'];
    $editProduct = new ProductsController($title, $description, $status);

    $editProduct->updateProduct($id);

    return header('location: ../views/list.php?edited');
}

if (isset($_POST['delete'])) {
    $deleteProduct = new ProductsController('', '', '');

    $deleteProduct->deleteProduct($_POST['ID']);

    return header('location: ../views/list.php?deleted');
}

$products = new ProductsController('', '', '');
return $products->getProductList();

// return $products->getOneProduct();
