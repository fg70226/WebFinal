<?php
include_once 'Database.php';

class Product {
    private $conn;
    private $table_name = "products"; 

    public function __construct($db) {
        $this->conn = $db;
    }

    

   
    public function addProduct($name, $size,$image , $description ,$price) {
        $query = "INSERT INTO " . $this->table_name . " (name,size, image, description ,price) VALUES (:name,:size, :image, :description ,:price)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':description' , $description);
        $stmt->bindParam(':price' , $price);

        return $stmt->execute(); 
    }

    
    public function getAllProducts() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getProductById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function updateProduct($id, $name, $size, $image, $description, $price) {
        $query = "UPDATE " . $this->table_name . " SET name = :name, size = :size, image = :image, description = :description, price = :price WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);

        return $stmt->execute();
    }

    
    public function deleteProduct($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>