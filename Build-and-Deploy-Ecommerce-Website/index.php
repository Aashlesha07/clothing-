<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2etc Ecommerce Tutorial</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    session_start();
?>

<section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt="logo"></a>
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>

            <?php
                if (isset($_SESSION['username'])) {
                    // User is logged in
                    echo '<li><a href="#">' . $_SESSION['username'] . '</a></li>';
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                    echo '<li><span class="login-status">Not login</span></li>';
                }
            ?>

            <li id="lg-bag">
                <div>
                    <a href="cart.php"><i class="fa-solid fa-bag-shopping fa-bounce"></i></a>
                    <span class="counter">0</span>
                </div>
            </li>
            <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="fa-solid fa-bag-shopping fa-bounce"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>


    <section id="banner">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <button>Shop Now</button>
    </section>

    <section id="feacture" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shopping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
    <div class="pro-container">
        <div id="products-list"></div>
    </div>
</section>


    <section id="product1" class="section-p1">
        <h2>Featuared Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="pro" id="8">
                        <img src="img//products/f8.jpg" alt="product1">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro" id="7">
                        <img src="img//products/f7.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro"id="6">
                        <img src="img//products/f6.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro" id="5">
                        <img src="img//products/f5.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro"id="4">
                        <img src="img//products/f4.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro" id="3">
                        <img src="img//products/f3.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro" id="2">
                        <img src="img//products/f2.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro" id="1">
                        <img src="img//products/f1.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product1" class="section-pro2">
        <div class="pro-container">

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f1.jpg" alt="product1">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f2.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f3.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f4.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f5.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f6.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f7.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/f8.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="banner1" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-shirt & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n1.jpg" alt="product1">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n2.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n3.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n8.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n4.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n5.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n6.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n7.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product1" class="section-pro2">
        <div class="pro-container">

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n7.jpg" alt="product1">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n6.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n5.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n8.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n4.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n3.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n2.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro">
                        <img src="img//products/n1.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-Shirts</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>$78</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="sm-banner" class="section-p1"> 
    <div class="banner-box">
        <h4>Crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at cara</span>
        <button class="white">Learn More</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>Spring/summer</h4>
        <h2>Upcomming season</h2>
        <span>the best classic is on sale at cara</span>
        <button class="white">Collection</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring/summer 2022</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
    </div>
</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters </h4>
        <p>Get E-mail updates about our latest shop and <span>Special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="your email address">
        <button class="normal">Sign Up</button>
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <img class="logo" src="img/logo.png" alt="" srcset="">
        <h4>Contact</h4>
        <p><strong>Phone:</strong>(+91) 01 2345 6789</p>
        <p><strong>Hours:</strong>10:00 - 18:00, Mon - Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#"> About us</a>
        <a href="#"> Delivery Information</a>
        <a href="#"> Privacy Policy</a>
        <a href="#"> Terms & Conditions</a>
        <a href="#"> Contact us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#"> Sign In</a>
        <a href="#"> View Cart</a>
        <a href="#"> My Wishlist/a>
        <a href="#"> Track My Order</a>
        <a href="#"> Help</a>
    </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/pay/app.jpg" alt="">
          <img src="img/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
    </div>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
    <script type="module" src="product.js"></script>

</body>

</html>