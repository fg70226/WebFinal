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
   
    <style>
        body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
header{
    background-color: rgb(193,193,193);
    color: rgb(0, 0, 0);
    padding: 10px 0;
    position: fixed;
    margin-bottom: 100%;
    width: 100%;
    z-index: 100;
    box-shadow: 0 2px 2px rgb(0,0,0,0.2);
    height: 60px;
    display: flex;
    align-items: center;
}
nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 0 20px;
}
 
.logo{
    font-size: 30px;
    font-weight: bold;
    color: black;
}
 
header nav ul{
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0;
    padding: 0;
}
 
nav li{
    margin: 0 10px;
}
 
nav a{
    color: black;
    padding: 10px;
    text-decoration: none;
    font-size: 20px;
}
 
nav a:hover{
    color: white;
    background-color: rgb(0,0,0);
    transition: 0.3s;
    border-radius: 6px;
}
.my-form-container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.contact-form{
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 10px;
    background-color: #ffffff;
    padding: 30px;
    width: 450px;
    border-radius: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}
.input-field {
    position: relative;
    margin-bottom: 20px;
    margin-top: 5px;
    padding-right: 30px;
}
.input {
    width: 100%;
    padding: 10px;
    padding-right: 20px;
   
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 8px;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease;
}
.input:focus {
    border-color: #2d79f3;
}
.submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #2d79f3;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.submit-btn:hover {
    background-color: #1f5bb3;
}
a {
    display: block;
    text-align: center;
    color: #2d79f3;
    margin-top: 5px;
    text-decoration: none;
}
.user{
    display: flex;
    gap: 10px;
}
.user1{
    display: block;
}
.footer{
    background: #000;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
}
.row{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.footer p{
    color: #8a8a8a;
}
.footer h3{
    color: #fff;
    margin-bottom: 20px;
}
.footer-col-1,.footer-col-2,.footer-col-3,.footer-col-4{
    min-width: 250px;
    margin-bottom: 20px;
}
.footer-col-1{
    flex-basis: 30%;
    padding: 20px;
}
.footer-col-2{
    flex: 1;
    text-align: center;
}
.footer-col-2 img{
    width: 85px;
    margin-bottom: 20px;
}
.footer-col-3,.footer-col-4{
    flex-basis: 12%;
    text-align: center;
}
ul{
    list-style-type: none;
}
.app-logo{
    margin-top: 20px;
}
.app-logo img{
    width: 140px;
}
.footer hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}
.copyright{
    text-align: center;
}



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
    <div class="my-form-container">
        <form class="contact-form" id="myform" method="POST" action="#">
            <p class="title">Contact Us</p>
   
            <div class="user">
            <div class="input-field">
                <input class="input" name="name" id="name" placeholder="Name"/>  
            </div>
            <div class="input-field">
                <input class="input"type="email" name="email" id="email" placeholder="Email"/>
            </div>
            </div>
    <div class="user1">
            <div class="input-field">
                <input class="input"  type="text" name="company" id="company" placeholder="Company" />
            </div>
            <div class="input-field">
                <input class="input" type="text" name="phone" id="phone" placeholder="Phone" />
            </div>
            <div class="input-field">
                <input class="input" type="text" name="message" id="message" placeholder="Message" />
            </div>
        </div>
            <div id="errors"></div>
            <button class="submit-btn"  type="submit">Submit</button>
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
    document.getElementById('myform').addEventListener('submit', function(event){
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