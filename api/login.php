<?php 
 
include 'konekdB.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: input.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM tb_user where email ='$email' or username ='$username' AND pass='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: input.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi LOL GAE DEWE LALI DEWE!')</script>";
    }
}
 
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login Anggota - Singkong Keju D-9</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/slick.css"/>

        <link href="../css/tooplate-little-fashion.css" rel="stylesheet">
        

    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg">

<div class="container">

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button> -->



    <a class="navbar-brand" href="../index.html">

        <strong><span>Singkong</span> Keju D-9</strong>

    </a>



    <div class="d-lg-none">

        <a href="loginadmin.php" class="bi-person custom-icon me-3"></a>



        <!-- <a href="product-detail.html" class="bi-bag custom-icon"></a> -->

    </div>



    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav mx-auto">

            <!-- <li class="nav-item">

                <a class="nav-link active" href="index.html">Beranda</a>

            </li> -->




            <!-- <li class="nav-item">

                <a class="nav-link" href="products.html">Produk</a>

            </li> -->


             <!-- <li class="nav-item">

                <a class="nav-link" href="api/login.php">Staff Gudang</a>

            </li> -->



            <!-- <li class="nav-item">

                <a class="nav-link" href="product-detail.html">FAQs</a>

            </li> -->



            <!-- <li class="nav-item">

                <a class="nav-link" href="contact.html">Kontak</a>

            </li>

        </ul> -->
        




        
        <!-- <div class="d-none d-lg-block">

            <a href="api/loginadmin.php" class="bi-person custom-icon me-3 m-lg-auto" ></a> -->



            <!-- <a href="product-detail.html" class="bi-bag custom-icon"></a> -->

        <!-- </div> -->

    </div>

</div>

</nav>


        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Login Anggota</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form action="" method="POST">

                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="email" class="form-control" placeholder="Email address" required>

                                            <label for="email">Email address or Username</label>
                                        </div>

                                        <div class="form-floating p-0">
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>

                                            <label for="password">Password</label>
                                        </div>

                                        <button name="submit" class="btn custom-btn form-control mt-4 mb-3">
                                            Sign in
                                        </button>

                                        <!-- <p class="text-center">Don’t have an account? <a href="sign-up.html">Create One</a></p> -->

                                    </form>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">

<div class="container">

    <div class="row">



        <div class="col-lg-3 col-10 me-auto mb-4">

            <h4 class="text-white mb-3"><a href="index.html">Singkong</a> Keju D-9</h4>

            <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Singkong Keju D-9</strong></p>

            <br>

            <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a> Modified By Alfisal</p>

        </div>



        <div class="col-lg-5 col-8">

            <h5 class="text-white mb-3">Sitemap</h5>



            <ul class="footer-menu d-flex flex-wrap">



                <li class="footer-menu-item"><a href="product-detail.html" class="footer-menu-link">Produk</a></li>





                <li class="footer-menu-item"><a href="contact.html" class="footer-menu-link">Kontak</a></li>

            </ul>

        </div>



        <div class="col-lg-3 col-4">

            <h5 class="text-white mb-3">Social</h5>



            <ul class="social-icon">



                <li><a href="https://www.instagram.com/cafetelo_d9/" class="social-icon-link bi-instagram"></a></li>



                

            </ul>

        </div>



    </div>

</div>

</footer>

        <!-- JAVASCRIPT FILES -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/Headroom.js"></script>
        <script src="../js/jQuery.headroom.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="../js/custom.js"></script>

    </body>
</html>
