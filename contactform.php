<?php
class Contact {

    private $conn;

   
    public function __construct($db) {
        $this->conn = $db;
    }


    public function saveData($name, $email, $company, $phone, $message) {
        $query = "INSERT INTO contact_form (name, email, company, phone, message) VALUES (:name, :email, :company, :phone, :message)";
        $stmt = $this->conn->prepare($query);
    
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':message', $message);
    
        
        if ($stmt->execute()) {
            return true;
        } else {
        
            print_r($stmt->errorInfo()); 
            return false;
        }
    }
}
?>