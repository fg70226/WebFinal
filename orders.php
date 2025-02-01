<?php
class Orders {

    private $conn;

   
    public function __construct($db) {
        $this->conn = $db;
    }


    public function saveData($name, $surname, $email, $product, $size, $country, $city , $address , $house , $phone) {
        $query = "INSERT INTO orders (name, surname, email,product,size, country, city , address , house , phone) VALUES (:name, :surname, :email,:product, :size, :country, :city ,:address ,:house ,:phone)";
        $stmt = $this->conn->prepare($query);
   
       
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':product', $product);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':house', $house);
        $stmt->bindParam(':phone', $phone);
   
       
        if ($stmt->execute()) {
            return true;
        } else {
       
            print_r($stmt->errorInfo());
            return false;
        }
    }
}
?>