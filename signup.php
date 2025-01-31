

<!--
include_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashimi i password-it
    $date = $_POST['date'];

    // Instantiate the Database class
    $database = new Database();
    $db = $database->conn;

    // Instantiate the User class
    $user = new User($db);

    // Set user properties
    $user->name = $name;
    $user->surname = $surname;
    $user->email = $email;
    $user->password = $password;
    $user->date = $date;

    // Register the user
    if ($user->register()) {
        sleep(3);
        header('Location: login.php');
        exit();
    } else {
        echo "User registration failed!";
    }
}




-->

<?php
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Register the user
    if ($user->register($name, $surname, $email, $password)) {
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        echo "Error registering user!";
    }
}
?>

<!--
include_once 'database.php';
include_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date= $_POST['date'];

    // Register the user
    if ($user->register($name, $surname, $email, $password ,$date)) {
        header("Location: login.php"); // Redirect to login page
        exit;
    } else {
        echo "Error registering user!";
    }
}



-->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">F&R Luxe</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="my-form-container">
        <form class="form-control" id="myform" method="POST" action="signup.php">
            <p class="title">Register Form</p>
    
            <div class="user">
            <div class="input-field">
                <input class="input" name="name" id="name" placeholder="Name"/>   
            </div>
            <div class="input-field">
                <input class="input"type="name" name="surname" id="surname" placeholder="Surname"/>
            </div>
            </div> 
    <div class="user1">
            <div class="input-field">
                <input class="input"  type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="input-field">
                <input class="input" type="password" name="password" id="password" placeholder="Password" />
            </div>
        </div>
            <div id="errors"></div>
            <button class="submit-btn"  type="submit">Sign Up</button>
        </form>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download app for ios mobile phone and android.</p>
                    <div class="app-logo">
                        <img src="play-store.png">
                        <img src="app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="logo.avif">
                    <p>Our Purpose Is To Sustainably Make The Pleasure And Benefits Of Sports Accessible To The Many.</p>
                </div>  
                <div class="footer-col-3">
                    <h3>Userful Links</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twiter</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2024-F&R Luxe</p>
        </div>
       </div>
    <script>
        document.getElementById('myform').addEventListener('submit', function (event) {
    event.preventDefault(); 

    let errors = [];
    
    let name = document.getElementById('name').value.trim(); 
    let surname = document.getElementById('surname').value.trim();
    let email = document.getElementById('email').value.trim(); 
    let password = document.getElementById('password').value.trim();
    
    let namePattern = /^[a-zA-Z]{3,10}$/; 
    let surnamePattern = /^[a-zA-Z]{3,15}$/; 
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    let passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$/; 

    if (!namePattern.test(name)) {
        errors.push("Name should be 3-10 characters long and contain only letters.");
    }

    if (!surnamePattern.test(surname)) {
        errors.push("Surname should be 3-15 characters long and contain only letters.");
    }

    if (!emailPattern.test(email)) {
        errors.push("You must enter a valid email address.");
    }

    if (!passwordPattern.test(password)) {
        errors.push("Password must be at least 6 characters, include an uppercase letter, a lowercase letter, and a number.");
    }

    let errorsContainer = document.getElementById('errors');
    if (errors.length > 0) {
        errorsContainer.innerHTML = errors.join("<br>");
        errorsContainer.className = 'error'; 
    } else {
        errorsContainer.innerHTML = "Form submitted successfully!";
        errorsContainer.style.color = "green";
        document.getElementById('myform').submit(); // Dërgon formularin nëse nuk ka gabime
    }
});

        </script>
</body>
</html>