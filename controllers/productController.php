<?php

class ProductsController extends Db
{
    private $title;
    private $description;
    private $status;

    public function __construct($title, $description, $status)
    {

        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }

    public function createProduct()
    {
        $sql = $this->connect()->prepare('INSERT INTO Products (TITLE, DESCRIPTION, STATUS) VALUES (?,?,?)');

        if (!$sql->execute(array($this->title, $this->description, $this->status))) {
            $sql = null;
            header('location: ../index.php?error=product_already_exist');
            exit();
        }
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getProductList()
    {
        $sql = $this->connect()->prepare('SELECT * FROM PRODUCTS');

        if (!$sql->execute()) {
            $sql = null;
            return 'error';
            exit();
        }
        if ($sql->rowCount() == 0) {
            $sql = null;
            return 'error';
            exit();
        } else {
            $products = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        }
    }

    public function getProductById($id)
    {
        $sql = $this->connect()->prepare('SELECT * FROM PRODUCTS WHERE ID=?');
        if (!$sql->execute(array($id))) {
            $sql = null;
            return 'error';
            exit();
        }
        if ($sql->rowCount() == 0) {
            $sql = null;
            return 'error';
            exit();
        } else {
            $product = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        }
    }


    public function updateProduct($id)
    {
        $sql = $this->connect()->prepare('UPDATE PRODUCTS SET TITLE = ?, DESCRIPTION = ?, STATUS = ? WHERE ID = ?');

        if (!$sql->execute(array($this->title, $this->description, $this->status, $id))) {
            $sql = null;
            return 'error';
            exit();
        }
        return true;
    }

    public function deleteProduct($id)
    {
        $sql = $this->connect()->prepare('DELETE FROM PRODUCTS WHERE ID= ?');

        if (!$sql->execute(array($id))) {
            $sql = null;
            return 'error';
            exit();
        }
        return true;
    }
}
