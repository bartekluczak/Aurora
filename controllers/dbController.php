<?php

class Db
{
    protected function connect()
    {
        
        try {
            $host = "localhost";
            $user = "root";
            $password = "";
            $dbName = "aurora";
            $db = new PDO('mysql:host=' . $host . ';dbname='  . $dbName, $user, $password);

            if (!$this->tableExists($db, "products")) {
                $this->createProductsTable($db);
            }
            return $db;
        } catch (PDOException $e) {
            echo "Database connetion error " . $e->getMessage();
        }
    }

    protected function tableExists($pdo, $table)
    {
        try {
            $result = $pdo->query("SELECT 1 FROM ($table) LIMIT 1");
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }

    protected function createProductsTable($db)
    {
        try {
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE TABLE products (
                ID INT AUTO_INCREMENT PRIMARY KEY,
                TITLE VARCHAR (50) NOT NULL,
                DESCRIPTION VARCHAR (2000),
                STATUS VARCHAR (20) NOT NULL
            ); ";
            $db->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
