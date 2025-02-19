<?php

class Product
{
    private ?int $id_product;
    private ?string $product_name;
    private ?string $product_description;
    private ?int $product_price;
    private ?string $photo_path;

    public function __construct(?int $id_product = null, ?string $product_name = null, ?string $product_description = null, ?int $product_price = null, ?string $photo_path = null)
    {
        $this->id_product = $id_product;
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->photo_path = $photo_path;
        $this->product_price = $product_price;
    }

    // Getters and Setters
    public function getId_product(): ?int
    {
        return $this->id_product;
    }
    public function getName_product(): ?string
    {
        return $this->product_name;
    }
    public function setName_product(string $name): void
    {
        $this->product_name = $name;
    }

    public function getDescription_product(): ?string
    {
        return $this->product_description;
    }

    public function getproduct_price(): ?int
    {
        return $this->product_price;
    }

    public function getPhotoPath(): ?string
    {
        return $this->photo_path;
    }

    // Setters

    public function setDescription_product(string $description): void
    {
        $this->product_description = $description;
    }

    public function setproduct_price(int $product_price): void
    {
        $this->product_price = $product_price;
    }


    public function setPhotopath(string $photo_path): void
    {
        $this->photo_path = $photo_path;
    }


}