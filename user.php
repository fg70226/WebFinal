
<?php

class User {
    private $conn; // Lidhja me bazën e të dhënave
    private $table_name = 'user'; // Emri i tabelës

    // Konstruktor për të marrë lidhjen me bazën e të dhënave
    public function __construct($db) {
        $this->conn = $db;
    }

    // Metoda për regjistrim
    public function register($name, $surname, $email, $password, $date) {
        $query = "INSERT INTO {$this->table_name} (name, surname, email, password, date) 
                  VALUES (:name, :surname, :email, :password, :date)";

        $stmt = $this->conn->prepare($query);

        // Lidheni parametrat
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT)); // Fjalëkalim i hash-uar

        // Ekzekuto pyetjen
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Metoda për hyrje (login)
    public function login($email, $password) {
        $query = "SELECT id, name, surname, email, password, date 
                  FROM {$this->table_name} WHERE email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Kontrollo nëse ekziston përdoruesi
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifiko fjalëkalimin
            if (password_verify($password, $row['password'])) {
                // Filloni sesionin dhe ruani të dhënat e përdoruesit
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                $_SESSION['email'] = $row['email'];
                return true;
            }
        }
        return false;
    }
}

?>
