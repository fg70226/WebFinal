<?php
class User {
    private $conn;
    private $table_name = 'user';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($name, $surname, $email, $password ) {
        $query = "INSERT INTO {$this->table_name} (name, surname, email, password ) VALUES (:name, :surname, :email, :password )";

        $stmt = $this->conn->prepare($query);

        $hashed_password = password_hash($password , PASSWORD_DEFAULT);

    
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password); 
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login($email, $password) {
        $query = "SELECT id, name, surname, email, password, role FROM {$this->table_name} WHERE email = :email";
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            
            echo "<pre>";
            print_r($row);
            echo "</pre>";
    
            
            if (password_verify($password, $row['password'])) {
                
                echo "Password verified! Role: " . $row['role'];
    
                
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role']; 
    
            
                if ($row['role'] == 'admin') {
                    return 'admin';
                } else {
                    return 'user';
                }
            } else {
                
                echo "Password verification failed!";
            }
        } else {
            
            echo "No user found with email: " . $email;
        }
        return false;
    }
}
?>




