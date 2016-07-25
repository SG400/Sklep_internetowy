<?php

class Product {

    // Static REPOSITORY methods
    static public function getAllProducts(mysqli $db_conn) {

    }

    private $id;
    private $name;
    private $description;
    private $price;
    private $status;
    private $creation_date;
    private $modf_date;
    private $group_id;
    private $in_stock;

    public function __construct()
    {
        $this->creation_date = null;
        $this->description = null;
        $this->group_id = null;
        $this->id = -1;
        $this->in_stock = null;
        $this->modf_date = null;
        $this->name = null;
        $this->price = null;
        $this->status = null;
    }

    // GET and SET methods
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($newProductName) {
        $this->name = $newProductName;
    }


    public function getDescription() {
        return $this->description;
    }

    public function setDescription($newProductDescription) {
        $this->description = $newProductDescription;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($newProductPrice) {
        $this->price = $newProductPrice;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($newProductStatus) {
        $this->status = $newProductStatus;
    }

    public function getCreationDate() {
        return $this->creation_date;
    }

    public function getModfDate() {
        return $this->modf_date;
    }

    public function setModfDate($newModfdate) {
        $this->modf_date = $newModfdate;
    }

    public function getGroupId() {
        return $this->group_id;
    }

    public function setGroupId($newGroupId) {
        $this->group_id = $newGroupId;
    }

    public function getInStock() {
        return $this->in_stock;
    }

    public function setInStock($newProductStock) {
        $this->in_stock = $newProductStock;
    }

    // Methods
    public function saveProductToDB(mysqli $db_conn, $productId) {

    }

    public function loadProductFromDB(mysqli $db_conn, $productId) {

    }
}

