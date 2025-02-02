<?php

include "Welcome.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F&R Luxe</title>
    <link rel="stylesheet" href="https://cdnjs.com/libraries/font-awesome">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    background-color: rgb(217, 217, 217);
}

.menu-nav{
    background-color: rgb(173, 171, 171);
    width:100%;
}

.menu-nav ul{
    display: flex ;
    list-style: none;
    justify-content: space-between;
    align-items: center;
    position: relative;
    padding: 0 20px;
    flex-wrap: wrap;

}


.menu-nav li{
    position: relative;
    height: 50px;
}

.menu-nav a{
    height: 100%;
    padding: 0 20px;
    text-decoration: none;
    display: flex;
    align-items: center;
    color: black;
    font-size: 20px;
    margin-bottom: 0px;
}
.logo{
    margin: 3px;
    margin-left: 10px;
    margin-right: 500px;
    width: 100px;
    padding: 10px;
    border-radius: 50px;
}


.menu-nav a:hover{
    color: black;
    background-color: #e7e7d9;
    border-radius: 0.5rem;
}


   
.drop-down{
        position: absolute;
        top: 100%;
        left: 0;
        background:white;
        color: black;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border-radius: 0.5rem;
        font-size: 19px;
        display: none;
        z-index: 999;
        min-width: 180px;
    }

    .menu-nav .services:hover .drop-down{
        display:block;
        padding-top: 0;
        padding-bottom: 0;
        padding: 0 0px;
    }
    .drop-down a{
       padding: 10px 20px;
       text-align: left;
       text-decoration: none;
       display: block;
       
    }

    .menu-nav ul li .drop-down{
        display: none;
        position: absolute;
    }

#kontenti header h2{
    text-align: center;
    margin-bottom: 25px;
}
#kontenti{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI light', Tahoma,;
    width: 600px;
    margin: 0 auto;
}        
#kontenti img{
    width: 600px;
    height: 400px;
    border:1px solid;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
}
#radio-buttons{
    display: flex;
    gap: 10px;
    margin-top: 15px;
}
input[type="radio"]{
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: black;
    cursor: pointer;
    appearance: none;
    transition: background-color 0.3s ease;
}
input[type="radio"]:hover{
    background-color: white;
}


.menu-toggle {
     display: none;
        font-size: 30px;
        cursor: pointer;
        background: none;
        border: black;
        padding: 20px;
    }
   
    .menu-toggle:focus {
        outline: none;
    }

   @media(max-width: 1149px){
   
   
    .menu-nav ul{
        display: flex ;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    position: relative;
   
    }
   



   
    .menu-nav li{
        position: relative;
        height: 20px;
    }
   
    .menu-nav a{
        height: 100%;
        text-decoration: none;
        display: flex;
        align-items: start;
        color: black;
        font-size: 15px;
    }
    .logo{
        margin: 3px;
        margin-left: 8px;
        margin-right: 0px;
        width: 80px;
        padding: 10px;
        border-radius: 50px;
    }
   
   
    .menu-nav a:hover{
        color: black;
        background-color: #e7e7d9;
        border-radius: 0.5rem;
    }
   
    .offer .row{
        padding: 20px;
        gap: 10px;
    }
    .offer .row img{
        width:90%
    }
    .offer .col22{
       font-size: 15px;
    }
   
    .drop-down{
            position: absolute;
            top: 100%;
            left: 0;
            background:white;
            color: black;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 0.5rem;
            font-size: 19px;
            display: none;
            z-index: 999;
            min-width: 180px;
        }
   
        .menu-nav .services:hover .drop-down{
            display:block;
         
        }
        .drop-down a{
           padding: 10px 20px;
           text-align: left;
           text-decoration: none;
           display: block;
           
        }
   
        .menu-nav ul li .drop-down{
            display: none;
            position: absolute;
        }
        .newSeason{
            width: 100%;
            height: 80%;
        }

       
        .nsTitle{
            font-size: 20px;
        }
        .btn .b{
            width: 100%;
         
           
        }
   
   }
   @media (max-width: 768px) {
    .menu-nav ul {
        flex-direction: column;
        align-items: flex-start;
    }

    .menu-nav ul li {
        width: 100%;
    }

    .menu-nav ul li .drop-down {
        position: static;
        display: none;
        width: 100%;
    }

    .menu-nav ul li:hover .drop-down {
        display: none;
    }

    .menu-toggle {
        display: block;
    }

    .menu-nav ul {
        display: none;
    }

    .menu-nav ul.active {
        display: flex;
    }

    #kontenti{
        display:none;
    }
    .offer{
        display:none;
    }
}

.newSeason{
    display: flex;
    margin-top: 30px;
}

.nsItem{
    flex: 1;
    background-color: black;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
   
}
.nsImg{
    width: 100%;
    height: 500px;
}
h3{
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
}
.nsTitle{
    font-size: 40px;
    padding-bottom: 0;
}
h1{
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
}
img{
    overflow-clip-margin: content-box;
    overflow: clip;
}
.nsItem a{
    text-decoration: none;
    color: #000000;
}
.nsItem a:-webkit-any-link{
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
.nsItem p{
    color: white;
}
/*.nsButton{
    padding: 15px;
    font-weight: 600;
    cursor: pointer;
   
}
button{
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    padding-bottom: 20px;
}*/
.btn .b{
    background-color: white;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    gap: 10px;
    padding: 10px 40px 10px 40px;
    margin-top: 10px;
}
.btn .b a{
    text-decoration: none;
    color: black;
}
.btn .b:hover{
    color: gr;
    background-color: rgb(95,94 94);
}
.smallcontainer{
    margin: auto;
}
div{
    display: block;
    unicode-bidi: isolate;
}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #3f3f3f;
}
.title::after{
    content: '' ;
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);
}
h2{
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end:0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
}
h2{
    font-size: 1.5em;
    font-weight: bold;
}
h4{
    color: #555;
    font-weight: normal;
}
.col4 p{
    font-size: 14px;
}
p{
    color: #555;
    font-weight: normal;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col4, .rating, h4{
    text-align: center;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.col4{
    width: 50px;
    margin-top: 20px;
    border-radius: 50%;
    box-shadow: 0 0 20px 0px rgb(183, 177,177);
    cursor: pointer;
    transition: transform 0.5s;
    border-radius: 7px;
    padding: 10px;
}
.col4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
}
.col4 a{
    text-decoration: none;
    color: #000000;
}
.col4 a:-webkit-any-link{
    cursor: pointer;
}
.col4 img{
    width: 100%;
    height: 500px;
}
img{
    overflow-clip-margin: content-box;
    overflow: clip;
}
.rating .fa{
    color: #ff523b;
}
.fa{
    display: inline-block;
    font: normal normal normal 14px;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}
.fa-star::before{
    content: "\f005";
}
i{
    margin-right: 15px;
}

.buy-button
{
    background-color: #d3cdb5c6;
    color:black;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
    width: 100%;
    font-family: Arial, Helvetica, sans-serif;
}
.add-to-cart-button{
    background-color: #455763;
    color: white;
    padding: 8px 20px;
    border: none;
    cursor: pointer;
    border-radius: 8px;
    width: 100%;
    font-family: Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
button{
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 8px 20px;
    cursor: pointer;
}



.offer .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
   
}

.offer{
    background: radial-gradient(#fff,rgb(109,110,110));
    margin: auto;
    padding: 30px 0;
   
}
.col22{
    flex-basis: 30%;
    min-width: 300px;
}
.col22 img{
    overflow-clip-margin: content-box;
    overflow: clip;
    width: 100%;
}
.col22 p{
    font-size: 30px;
    margin: 0 0 0px 0;
   
}
.col22 h1{
    display: block;
    font-size: 20px;
    font-weight: bold;
    margin: 0 0 0px 0;
}
.col22 small{
    font-size: 15px;
}
.testimonial{
    padding-top: 100px;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}
.testimonial .small-container{
    display: flex;
    justify-content: space-around;
    padding: 0;
    margin: 0 auto;
    gap: 20px;
}
.testimonial .col-3{
    text-align: center;
    padding: 40px 20px;
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.5s;
}
.testimonial .col-3 img{
    width: 50px;
    margin-top: 20px;
    border-radius: 50%;
}
.testimonial .col-3:hover{
    transform: translateY(-10px);
}
.fa.fa-quote-left{
    font-size : 34px;
    color: #ff523b;
}
.testimonial .col-3 p{
    font-size: 12px;
    margin: 12px 0;
    color: #777;
}
.testimonial .col-3 h3{
    font-weight: 600;
    color: #555;
    font-size: 16px;
}
.rating i{
    color: #ff523b;
}
.brands{
    margin: 100px auto;
    padding-left: 20px;
    padding-right: 20px;
}
.col-5{
    width: 160px;
}
.col-5 img{
    width: 100%;
    cursor: pointer;
    filter: grayscale(100%);
}
.col-5 img:hover{
    filter: grayscale(0);
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
    padding-left: 20px;
}
.footer-col-2{
    flex: 1;
    text-align: center;
}
.footer-col-2 img{
    width: 93px;
    margin-bottom: 20px;
    border-radius: 200px;
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
                <li><a href="admin.php">Admin Panel</a></li>
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

    <br>

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




       

    <script>
        var i=0;
var imgArray = [
    "D&Glogo.jpg",
    "pradalogo.jpg",
    "polologo.jpg",
    "guccilogo.jpg",
]

var slideshow = document.getElementById("slideshow");
function goToSlide(index){
    slideshow.src = imgArray[index];
}

function toggleMenu() {
    const menu = document.querySelector('.menu-nav ul');
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
}

document.addEventListener('click', function (event) {
    const menu = document.querySelector('.menu-nav ul');
    const toggleButton = document.querySelector('.menu-toggle');

   
    if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
        menu.style.display = 'none';
    }
});
    </script>
</body>
</html>
