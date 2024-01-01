<?php

error_reporting(E_ALL);
include_once 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce FTS.Store</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    
</head>
<body>

    <section id="header">
        <a href="home.php"><img src="screenshot/FTS.Store_2_-removebg.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-brands fa-shopify fa-beat fa-2xl"></i></a></li>
                <li><a href="loginform.php">Login</a></li>
            </ul>
        </div>
    </section>


    <section id="hero">
        <h4>Lihat produk yang tersedia dan</h4><br>
        <h2>Temukan Webcam</h2>
        <h1>Impian-mu disini</h1>
        <p>Khusus Pembelian Pada <span>Bulan Desember</span>, Diskon up to 30%</p>
        <a href="shop.php">
            <button class="normal-shop">Shop Now</button>
        </a>
    </section>
    <br>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Winter Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='product1.php';">
                <img src="screenshot/webcam_nemesis_a96_v2.jpeg" alt="">
                <div class="des">
                    <span>NYK Nemesis</span>
                    <h5>NYK Nemesis A-96 Severrus</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 550.000</h4>
                </div>
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='product2.php';">
                <img src="screenshot/webcam_aukey.jpg" alt="">
                <div class="des">
                    <span>Aukey</span>
                    <h5>Aukey PC-LM7</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 700.000</h4>
                </div>
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='product3.php';">
                <img src="screenshot/webcam_logitech_c922.png" alt="">
                <div class="des">
                    <span>Logitech</span>
                    <h5>Logitech C-922 pro</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 2.000.000</h4>
                </div>
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='product4.php';">
                <img src="screenshot/webcam_fantech_luminous_c30_v2.jpg" alt="">
                <div class="des">
                    <span>Fantech</span>
                    <h5>Fantech Luminous C-30</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 300.000</h4>
                </div>
                <a href="cart.html"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>


    <section id="banner" class="section-m1">
        <h4>Discount Service Kerusakan Webcam</h4><br>
        <h2>Up to <span>40% Off</span> - All Webcam</h2><br>
        <a href="contact.php">
            <button class="normal">Service Now</button>
        </a>
    </section>


    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>New Items From The Factory Directly</p>
        <div class="pro-container">
            <div class="pro">
                <img src="screenshot/webcam_digitalAlliance_Mycam.jpeg" alt="">
                <div class="des">
                    <span>Digital Alliance</span>
                    <h5>Mycam DA 1080p</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 135.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="screenshot/webcam_logitech_brio.jpg" alt="">
                <div class="des">
                    <span>Logitech</span>
                    <h5>Logitech BRIO 4K Full HD</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 2.250.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="screenshot/webcam_nemesis_a95.png" alt="">
                <div class="des">
                    <span>NYK Nemesis</span>
                    <h5>NYK Nemesis A-95 Albatros</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 500.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="screenshot/webcam_EOS_liveStreamer.jpg" alt="">
                <div class="des">
                    <span>EOS Indonesia</span>
                    <h5>EOS Live Streamer 4K Ultra Wide</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 525.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get e-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Login</button>
        </div>
    </section>
    

    <footer class="section-p1">
        <div class="col">
            <img src="screenshot/FTS.Store_2_-removebg.png" class="logo" title="Our Logo">
            <h4>Contact </h4>
            <p><strong>Alamat         :</strong> Jl. Merah Putih N0.5A, RT.10/RW.05, Kec.Mampang, <br>Kota.Jakarta Selatan, DKI Jakarta, Indonesia</p><br>
            <p><strong>Telepon        :</strong> (+62) 813-8105-8988</p><br>
            <p><strong>Jam Opersional :</strong> Senin - Sabtu , 10:00 - 18:00</p>
        </div>
        <br>

        <div class="col">
            <h4>About</h4>
            <a href="about.php">Tentang Kami</a>
            <a href="https://cekresi.com/">Informasi Pengiriman</a>
            <a href="#">Kebijakan Pribadi</a>
            <a href="#">Syarat & Ketentuan</a>
            <a href="contact.php">Kontak  Kami</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="loginform.php">Login</a>
            <a href="cart.php">Lihat Keranjang</a>
            <a href="#">My Wishlist</a>
            <a href="https://cekresi.com/">Lacak Pengiriman</a>
            <a href="contact.php">Bantuan</a>
        </div>
        
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Pilih Metode Pembayaran :</p>
            <div class="row-second">
                <img src="screenshot/cod.jpg" alt="">                
                <img src="screenshot/bni.jpg" alt="">
            </div>
         </div>   

        <div class="copyright">
            <p>&copy; 2023, FTS.Store - eCommerce Toko Webcam</p>
        </div>

    </footer>


    <script src="script.js"></script>
</body>
</html>
