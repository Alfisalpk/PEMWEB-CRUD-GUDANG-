
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <meta name="description" content="">

        <meta name="author" content="">



        <title>Tooplate's Little Fashion - About Page</title>



        <!-- CSS FILES -->

        <link rel="preconnect" href="https://fonts.googleapis.com">



        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">



        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/bootstrap-icons.css" rel="stylesheet">



        <link rel="stylesheet" href="../css/slick.css"/>



        <link href="../css/tooplate-little-fashion.css" rel="stylesheet">

        

<!--



Tooplate 2127 Little Fashion



https://www.tooplate.com/view/2127-little-fashion



-->

    </head>

    

    <body>



        <section class="preloader">

            <div class="spinner">

                <span class="sk-inner-circle"></span>

            </div>

        </section>

    

        <main>



            <nav class="navbar navbar-expand-lg">

                <div class="container">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>



                    <a class="navbar-brand" href="index.html">

                        <strong><span>Singkong</span> Keju</strong>

                    </a>



                    <div class="d-lg-none">

                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>



                        <a href="product-detail.html" class="bi-bag custom-icon"></a>

                    </div>



                    <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item">

                                <a class="nav-link" href="../index.html">Beranda</a>

                            </li>



                            <li class="nav-item">

                                <a class="nav-link active" href="about.html">Dashbor Admin </a>

                            </li>



                            <!-- <li class="nav-item">

                                <a class="nav-link" href="products.html">Products</a>

                            </li>



                            <li class="nav-item">

                                <a class="nav-link" href="faq.html">FAQs</a>

                            </li>



                            <li class="nav-item">

                                <a class="nav-link" href="contact.html">Contact</a>

                            </li>

                        </ul> -->



                        <div class="d-none d-lg-block">

                            <a href="sign-in.html" class="bi-person custom-icon me-3"></a>



                            <a href="logoutanggota.php" class="bi bi-arrow-right-square-fill"></> Keluar</a>

                        </div>

                    </div>

                </div>

            </nav>


            <?php
	include "konekdB.php";
	$id = $_GET['id'];
	$ambil_data = mysqli_query($koneksi,"select * from tb_user where id='$id'");
	while($data = mysqli_fetch_array($ambil_data)) {
	?>
            



            <section class="testimonial section-padding">

                <div class="container">

                    <div class="row">



                        <div class="col-lg-9 mx-auto col-11">

                            <h2 class="text-center">Bagian Admin <br> <span>Singkong</span> Keju</h2> <br>

                           
                            <form action="APIupdateAdmin.php" method="POST" class="row g-3">

                                <div class="col-md-6">
                                  <label for="Username" class="form-label">Username</label>
                                  <input type="hidden" class="form-control" name="id"  value="<?php echo $data['id'] ?>">
                                  <input type="text" class="form-control" name="username"  value="<?php echo $data['username'] ?>">
                                </div>
                                <div class="col-md-6">
                                  <label for="Email" class="form-label">E-Mail</label>
                                  <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" value="<?php echo $data['pass'] ?>" required>
                                  </div>
                                 
                                <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                      Check me out
                                    </label>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary">Edit Anggota</button>
                                </div>
                              </form>

                       
                        </div>
                        <br><br>

    
                    </div>

                </div>
                <br>


        <?php  } ?>




















  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
   
    
    
    
    
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>

         </div>                     






        <!-- JAVASCRIPT FILES -->

        <script src="../js/jquery.min.js"></script>

        <script src="../js/bootstrap.bundle.min.js"></script>

        <script src="../js/Headroom.js"></script>

        <script src="../js/jQuery.headroom.js"></script>

        <script src="../js/slick.min.js"></script>

        <script src="../js/custom.js"></script>



    </body>

</html>

