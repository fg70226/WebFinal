<?php

include "Welcome.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F&R Luxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.com/libraries/font-awesome">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="menu-nav">
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
       
        <ul>
            <img src="logo.avif" class="logo">
            <li><a href="index.php">Home</a></li>
            <li class="services"><a href="#">Products</a>
                <ul class="drop-down">
                        <li><a href="man.php" target="_blank">Man</a></li>
                        <li><a href="women.php" target="_blank">Women</a></li>
                </ul>
            
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="services"><a href="#"><i class="fa-solid fa-circle-user"></i></a>
                <ul class="drop-down">
                    <li><a href="login.php">Log in</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </li>
        </ul>

        
    </div>

    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <div class="nsBackground">
                <img src="" alt="">
            </div>
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <p>CHOOSE YOUR STYLE</p>
            <div class="btn">
                <button class="b"><a href="man.php">Man</a></button>
                <button class="b"><a href="women.php">Woman</a></button>
            </div>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="nsImg">
        </div>
    </div>

 
    <div id="kontenti">
        <header>
            <h2>Our luxe brands</h2>
            <img name="mySlide" id="slideshow">
        </header>
        <div id="radio-buttons">
            <input type="radio" name="radio-btn" id="radio1" onclick="goToSlide(0)">
            <input type="radio" name="radio-btn" id="radio2" onclick="goToSlide(1)">
            <input type="radio" name="radio-btn" id="radio3" onclick="goToSlide(2)">
            <input type="radio" name="radio-btn" id="radio4" onclick="goToSlide(3)">
        </div>
    </div>



    <div class="smallcotainer">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col4">
                <a href="cargo1.php"><img src="cargo.pants.jpg.webp" alt=""></a>
                <h4>Cargo Pants</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$49.95</p>

            </div>
            <div class="col4">
                <a href="cargopants.php"><img src="cargob.jpg.webp" alt=""></a>
                <h4>Cargo Pants</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$49.95</p>
            </div>
            <div class="col4">
                <a href="varsityg.php"><img src="varsity.girl.jpg.webp" alt=""></a>
                <h4>Varsity Jacket</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$129.95</p>
            </div>
            <div class="col4">
                <a href="varsityb.php"><img src="varsity.boy.jpg.webp" alt=""></a>
                <h4>Boohoo Man Jacket</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$114.95</p>
            </div>
        </div>

        <h2 class="title">Nike Products</h2>
        <div class="row">
            <div class="col4">
                <a href="nikehoodies.php"><img src="IMG_1.jpg" alt=""></a>
                <h4>Nike Hoddies</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$49.95</p>
            </div>
            <div class="col4">
                <a href="nikesneakers.php"><img src="nike1.jpg" alt=""></a>
                <h4>Nike Sneakers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$49.95</p>
            </div>
            <div class="col4">
                <a href="nikecap.php"><img src="IMG_3.jpg" alt=""></a>
                <h4>Nike Cap</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$129.95</p>
            </div>
            <div class="col4">
                <a href="niketrousers.php"><img src="IMG_4.jpg" alt=""></a>
                <h4>Nike trousers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$114.95</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col4">
                <a href="iilyrian-beanie.php"><img src="illyrian.beanie.jpg" alt=""></a>
                <h4>Illyrian Beanie</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$15.55</p>
            </div>
            <div class="col4">
                <a href="sweater.php"><img src="illyrian.1sweater.jpg" alt=""></a>
                <h4>The bloodline Sweater-Blue</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$60.95</p>
            </div>
            <div class="col4">
                <a href="illyriancap.php"><img src="illyrian.cap2.jpg" alt=""></a>
                <h4>Classical Illyrian Cap-Stone</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$49.95</p>
            </div>
            <div class="col4">
                <a href="anothercap.php"><img src="Illyrianhoodiebrown.webp" alt=""></a>
                <h4>Illyrian B Hoddie Brown</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$149.95</p>
            </div>

            <div class="col4">
                <a href="polo.php"><img src="polo.jpg" alt=""></a>
                <h4>POLO Sneakers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$249.95</p>
            </div>
            <div class="col4">
                <a href="prada.php"><img src="prada.jpg" alt=""></a>
                <h4>PRADA Sneakers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$349.95</p>
            </div>
            <div class="col4">
                <a href="gucci.php"><img src="gucci..jpg" alt=""></a>
                <h4>GUCCI Sneakers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$355.90</p>
            </div>
            <div class="col4">
                <a href="dg.php"><img src="D&G.jpg" alt=""></a>
                <h4>DOLCE&GABANA Sneakers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$324.95</p>
            </div>

        </div>

    </div>


    <div class="offer">
        <div class="smallcontainer">
            <div class="row">
                <div class="col22">
                    <img src="exclusive.png" class="offer-img">
                </div>
                <div class="col22">
                    <p>Exclusively Available on Fashion Store</p>
                    <h1>Smart Band 4</h1>
                    <small>The mi smart band 4 features a 39.9% large (the mi band3) AMOLED COLOR full-touch display with adjustable brightness, so everything is clear as can be.</small>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial">
        <div class="small-container">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industy.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tokk a gallery of type and scrambled it to make a type specimen book.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="user-3.png">
                <h3>Rita Ukiqi</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industy.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tokk a gallery of type and scrambled it to make a type specimen book.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="user-2.png">
                <h3>Paul Smith</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industy.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer tokk a gallery of type and scrambled it to make a type specimen book.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="user-1.png">
                <h3>Fjolla Gashi</h3>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <a href="https://www.godrej.com/"><img src="logo-godrej.png"></a>
                </div>
                <div class="col-5">
                    <a href="https://www.oppo.com/en/"><img src="logo-oppo.png"></a>
                </div>
                <div class="col-5">
                    <a href="https://www.coca-cola.com/rs/sr"><img src="logo-coca-cola.png"></a>
                </div>
                <div class="col-5">
                    <a href="https://www.paypal.com/rs/home"><img src="logo-paypal.png"></a>
                </div>
                <div class="col-5">
                    <a href="https://www.philips.com/global"><img src="logo-philips.png"></a>
                </div>
            </div>
        </div>
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




       

    <script src="app.js"></script>
</body>
</html>
