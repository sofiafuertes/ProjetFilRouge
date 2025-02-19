<?php

class ProductManager
{
    //Method to read all the products from the database
    public function readAllProducts(): array
    {
        //Conexion to the dbb
        $dbb = new PDO(
            'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'] . ';port=' . $_ENV['DB_PORT'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD'],
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        //Try, select the elements of the table 'products' on the dbb
        try {
            $query = $dbb->prepare(
                'SELECT id_product, product_name, product_description, product_price, photo_path 
                        FROM product'
            );
            $query->execute();
            $products = $query->fetchAll(PDO::FETCH_ASSOC);
            return $products ?: [];

        } catch (PDOException $e) {
            //Catch any errors it might happend
            error_log('Eror en la consulta:' . $e->getMessage());
            return [];
        }
    }
}