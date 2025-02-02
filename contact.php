<?php
include_once 'Database.php';
include_once 'Contactform.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $contact = new Contact($connection);

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['company'];
    $message = $_POST['phone'];
    $company = $_POST['message'];

    
    if ($contact->saveData($name, $email, $company, $phone, $message)) {
        echo "<script>alert('The company will contact you soon!');</script>";
    } else {
        echo "<script>alert('Error while trying to contact us.');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap">
    <link rel="stylesheet" href="contact.css">


</style>
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
    <div class="container">
        <div class="form-container">
            <div class="left-container">
                <div class="left-inner-container">
                    <h2>Let's Chat</h2>
                    <p>Whether you have a question, want to start a project or simply want to connect.</p>
                    <br>
                    <p>Feel free to send us a message in the contact form</p>
                </div>
            </div>
            <div class="right-container">
                <div class="right-inner-container">
                    <form id="contactForm" onsubmit="return redirectToIndex();" method="POST">
                        <h2 class="lg-view">Contact Us</h2>
                        <p>*Required</p>
                        <input type="text" id="name" placeholder="Name*" name="name">
                        <input type="email" id="email" placeholder="Email*" name="email">
                        <input type="text" id="company" placeholder="Company*" name="company">
                        <input type="text" id="phone" placeholder="Phone*" name="phone">
                        <textarea id="message" rows="4" placeholder="Message" name="message"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
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
  <script>
    document.getElementById('contactForm').addEventListener('submit', function(event){
    event.preventDefault();
    let isValid = true; 

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;

    const nameRegex = /^[A-Za-z\s]+$/;
    if(!nameRegex.test(name)){
        alert('Please enter a valid name(only letters and spaces).');
        isValid = false;
    }

const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
if(!emailRegex.test(email)){
    alert('Please enter a valid email address.');
    isValid = false;
}
const phoneRegex = /^[0-9]{9}$/;
if(phone && !phoneRegex.test(phone)){
    alert('Please enter a valid phone number (9 digits).');
    isValid = false;
}
if(!message.trim()){
    alert('Please enter a message.');
    isValid = false;
}else if(message.length<10){
    alert('Message must be at least 10 character long.');
    isValid = false;

}
if(isValid){
    alert('Form submitted successfully!')
    window.location.href = "index.php";
}
})
  </script>
</body>
</html>