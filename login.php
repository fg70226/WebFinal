<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

  
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $login_result = $user->login($email, $password);

    if ($login_result == 'admin') {
        echo "<script>window.location.href = 'index.php';</script>";
    } elseif ($login_result == 'user') {
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Invalid login credentials!";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">F&R Luxe</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
       </header>  

    <div class="my-form-container">
        <form id="myform" class="form-control" method="POST" action="login.php">
            <p class="title">Login</p>

            <div class="input-field">
                <input required="" type="text" class="input" id="user" placeholder="Email" name="email">
            </div>

            <div class="input-field">
                <input required="" type="password" class="input" id="pass" placeholder="Password" name="password">
            </div>

            <div id="errors"></div>

            <a href="signup.php">Don't have an acoount?</a>


            <button class="submit-btn" type="submit"  value="LOGIN">Sign In</button>
        </form>
    </div>

    <div class="footer">
        <div class="container1">
            <div class="row1">
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
        document.getElementById('myform').addEventListener('submit' , function (event) {
    

    let errors = [];

    let user = document.getElementById('user').value.trim();
    let pass = document.getElementById('pass').value;

    let userPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;


    if(!userPattern.test(user)) {
        errors.push("You must enter a valid email address.");

    }

    if(pass.length < 6) {
        if(errors.length === 0) {
            errors.push("The password must contain at least 6 characters.");
    }
}
let errorsContainer = document.getElementById('errors');
if(errors.length > 0) {
    errorsContainer.innerHTML = errors[0];
    errorsContainer.className = 'error';

}  

});

    </script>
</body>
</html>


