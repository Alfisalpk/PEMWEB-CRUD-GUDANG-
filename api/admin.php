
<?php 
 
 session_start();
  
 if (!isset($_SESSION['email'])) {
     header("Location: admin.php");
 }
  
 ?>
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <meta name="description" content="">

        <meta name="author" content="">



        <title>Hi Admin - Singkong Keju D-9</title>



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

                        <strong><span>Singkong</span> Keju D-9</strong>

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

                        <div class="d-none d-lg-block">

                            <!-- <a href="sign-in.html" class="bi-person custom-icon me-3"></a> -->



                            <a href="logoutanggota.php" class="bi bi-arrow-right-square-fill"></> Keluar</a>

                        </div>

                    </div>

                </div>

            </nav>

            <section class="testimonial section-padding">

                <div class="container">

                    <div class="row">



                        <div class="col-lg-9 mx-auto col-11">

                            <h2 class="text-center">Bagian Admin <br> <span>Singkong</span> Keju D-9</h2> <br>

                           
                            <form action="APIsaveAdmin.php" method="post" class="row g-3">

                                <div class="col-md-6">
                                  <label for="Username" class="form-label">Username</label>
                                  <input type="text" class="form-control" name="username" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="Email" class="form-label">E-Mail</label>
                                  <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
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
                                  <button type="submit" class="btn btn-primary">Tambah Anggota</button>
                                </div>
                              </form>
                        </div>
                        <br><br>
                    </div>

                </div>
                <br>


                <?php  
		//sesuaikan lokasi APIreadData masing-masing
        $sumber_json = 'http://localhost/uas//api/APIreadAdmin.php';
		$konten_json = file_get_contents($sumber_json);
		$data_json= json_decode($konten_json, true);
	?>



  <div  class="col-lg-9 mx-auto col-14 ">
  <table class="table table-striped table-hover" style="border">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col" class="text-center">ID Anggota</th>
      <th scope="col" class="text-center">Username</th>
      <th scope="col" class="text-center">Email</th>
      <th scope="col" class="text-center">Password</th>
      <th scope="col" class="text-center">Aksi</th>

    </tr>
  </thead>
  <?php
		    $no=1;  
			for($a=0; $a < count($data_json); $a++)
			{
				print "<td align='center'>".$no."</td>";
				print "<td align='center'>".$data_json[$a]['id']."</td>";
				print "<td align='center'>".$data_json[$a]['username']."</td>";
				print "<td align='center'>".$data_json[$a]['email']."</td>";
				print "<td align='center'>".$data_json[$a]['pass']."</td>";
				print "<td align='center'><a class='btn btn-primary' href='editAdmin.php?id=".$data_json[$a]['id']."'>EDIT</a> <a class='btn btn-danger' href='APIdeleteAdmin.php?id=".$data_json[$a]['id']."'>Hapus</a></td>";
				print "</tr>";
				$no++;
			}
		?>


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

