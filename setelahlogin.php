<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNSET COFFEE</title>
    <link rel="icon" href="images/logo2.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo2.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Beranda</a>
        <a href="#about">Tentang</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produk</a>
        <a href="#review">Ulasan</a>
        <a href="#contact">Kontak</a>
        <a href="#blogs">Halaman</a>
        <a href="login.php">Logout</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="cari disini...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/menu-2.png" alt="">
            <div class="content">
                <h3>Kopi Hitam</h3>
                <div class="price">Rp25.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/menu-6.png" alt="">
            <div class="content">
                <h3>Stoberi Panas</h3>
                <div class="price">Rp26.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/menu-4.png" alt="">
            <div class="content">
                <h3>Cokelat Panas</h3>
                <div class="price">Rp29.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/menu-1.png" alt="">
            <div class="content">
                <h3>Cappucino</h3>
                <div class="price">Rp28.000</div>
            </div>
        </div>
        <a href="#" class="btn">Pesan</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <img src="images/logo2.png" alt="">
        <h3>SUNSET COFFEE</h3>
        <p>Pemandangan Sunset dengan secangkir kopi.</p>
        <a href="pesansekarang.php" class="btn">Pesan Sekarang</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>TENTANG</span> SUNCO </h1>

    <div class="row">

        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>Keuntungan Minum SUNCO</h3>
            <p>1. Kopi meningkatkan kinerja fisik Anda.</p>
            <p>2. Kopi dapat membantu Anda menurunkan berat badan.</p>
            <p>3. Kopi membantu Anda fokus dan tetap terjaga.</p>
            <p>4. Kopi mengurangi risiko kanker.</p>
            <p>5. Kopi mengurangi risiko stroke.</p>
            <a href="#" class="btn">Baca Selengkapnya</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> MENU <span>SUNCO</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>Cappucino</h3>
            <div class="price">Rp28.000 <span>Rp38.000</span></div>
            <a href="#" class="btn">pesan</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>Kopi Hitam</h3>
            <div class="price">Rp25.000<span>Rp35.000</span></div>
            <a href="#" class="btn">pesan</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>Cokelat Latte</h3>
            <div class="price">Rp27.000<span>Rp37.000</span></div>
            <a href="#" class="btn">pesan</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>Cokelat Panas</h3>
            <div class="price">Rp29.000 <span>Rp39.000</span></div>
            <a href="#" class="btn">pesan</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>Caramel Macchiato</h3>
            <div class="price">Rp24.000 <span>Rp34.000</span></div>
            <a href="#" class="btn">pesan</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>Stroberi Panas</h3>
            <div class="price">Rp26.000 <span>Rp36.000</span></div>
            <a href="#" class="btn">pesan</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> PRODUK <span> SUNCO</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/kopiluwak.png" alt="">
            </div>
            <div class="content">
                <h3>Kopi Luwak</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp89.900 <span>Rp129.900</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/kopirobusta.png" alt="">
            </div>
            <div class="content">
                <h3>Kopi Robusta</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp99.900 <span>Rp139.900</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/kopitubruk.png" alt="">
            </div>
            <div class="content">
                <h3>Kopi Tubruk</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp109.900 <span>Rp149.900</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> ULASAN <span> PELANGGAN </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>untuk konsep tempat sangat nyaman karena outdoor yang dibalut dengan tanaman hias yang mengisi sehingga suasana tidak kosong.</p>
            <img src="images/abizar.png" class="user" alt="">
            <h3>Abizar</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>untuk kopi yang disajikan sudah baik mulai dari bahan mulai dari gula, kopi, creamer, dan lainnya. Namun saya rasa yang kurang ialah pada biji kopi yang digiling terlalu besar sehingga rasa kopi sedikit kurang, karena bubuk kopinya terlihat sedikit kasar.</p>
            <img src="images/shahira.png" class="user" alt="">
            <h3>Shahira</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Untuk pelayanan dari barista juga waiter sudah ramah dan cepat untuk penyajiannya. Hanya saja barista dan waiter terlihat terburu-buru karena sedang banyak pelanggan yang datang.</p>
            <img src="images/sulthan.png" class="user" alt="">
            <h3>Sulthan</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>KONTAK </span> SUNCO </h1>

    <div class="row">

        <iframe class="map" src="https://maps.google.com/maps?q=Jl.%20Lembur,%20rt.016/rw.006%20No.57.%20Kelurahan%20Makasar,%20Kecamatan%20Makasar,%20Jakarta%20Timur.%20ID%2013570&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>

        <form action="pesan.php">
            <h3>HUBUNGI KAMI</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <label for="nama"></label>
                <input type="text" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <label for="number"></label>
                <input type="number" name="number" id="number" placeholder="Nomor Telepon">
            </div>
            <div class="inputBox">
                <label for="pesan"></label>
                <input type="text" name="pesan" id="pesan" placeholder="isi pesan">
            </div>
            <input type="submit" value="Hubungi Sekarang" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> HALAMAN <span>SUNCO</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Tempatnya Estetik</a>
                <span>oleh Aida Muflihah / 19 Mei 2022</span>
                <p>Dari tempat, dekorasi hingga furnitur, semuanya terlihat estetik.</p>
                <a href="#" class="btn">baca selengkapnya</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Rasa dan Varian Kopi</a>
                <span>oleh Aida Muflihah / 19 Mei 2022</span>
                <p>Banyak sekali varian dari SUNCO dan yang pasti rasanya nikmat.</p>
                <a href="#" class="btn">baca selengkapnya</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Nyaman</a>
                <span>oleh Aida Muflihah / 19 Mei 2022</span>
                <p>Disini kamu bisa berkumpul bersama teman-teman dan bisa bekerja sama dengan nyaman.</p>
                <a href="#" class="btn">baca selengkapnya</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">Beranda</a>
        <a href="#">Tentang</a>
        <a href="#">Menu</a>
        <a href="#">Produk</a>
        <a href="#">Ulasan</a>
        <a href="#">Kontak</a>
        <a href="#">Halaman</a>
    </div>

    <div class="credit">© Copyright 2022 <span>Aida Muflihah</span> | 2010631250028 |</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>