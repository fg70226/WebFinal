<?php
include_once 'Database.php';
include_once 'Orders.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $orders = new Orders($connection);

   
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $size=$_POST['size'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $house = $_POST['house'];
    $phone = $_POST['phone'];

   
    if ($orders->saveData($name, $surname, $email,$product, $size, $country, $city , $address , $house , $phone)) {
            $message =  "Your purchases has been made!Thank you";
    } else {
         $message =  "<script>alert('Error while trying to contact us.');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="text"]
        .form-container input[type="text"]
        .form-container input[type="text"]
        .form-container input[type="text"]
        .form-container input[type="text"]
        .form-container input[type="text"]{
            width: 92%;
            padding:10px 20px 10px 20px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:rgb(105, 141, 241);
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color:rgb(56, 92, 193);
        }
        .prinfo{
            display:flex;
            gap:10px;
           
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Buy Now</h2>
    <form action="#" method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="surname" placeholder="Surname" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <div class="prinfo">
        <input type="text" name="product" placeholder="Product Name" required>
        <input type="text" name="size" placeholder="Size" required>
    </div>
        <input type="text" name="country" placeholder="Country" required>
        <input type="text" name="city" placeholder="City" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="house" placeholder="House Number" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="submit" value="Buy Now">
    </form>
   <br>
    <?php if (!empty($message)): ?>
        <div class="<?php echo ($message === 'Your purchases has been made! Thank you.') ? 'message' : 'error'; ?>">
            <?php echo $message; ?>
            <br> <a href="index.php">Back at Home page</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
