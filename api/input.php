
<?php 
 
 session_start();
  
 if (!isset($_SESSION['username'])) {
     header("Location: input.php");
 }
  
 ?>
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <meta name="description" content="">

        <meta name="author" content="">



        <title>Input Barang - Singkong Keju D-9</title>



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



                    <a class="navbar-brand" href="../index.html">

                        <strong><span>Singkong</span> Keju D-9</strong>

                    </a>



                    <div class="d-lg-none">

                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>



                        <a href="product-detail.html" class="bi-bag custom-icon"></a>

                    </div>



                    <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav mx-auto">

                            <!-- <li class="nav-item">

                                <a class="nav-link" href="../index.html">Beranda</a>

                            </li> -->



                            <li class="nav-item">

                                <a class="nav-link active" href="#">Staff Gudang</a>

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

                            <h2 class="text-center">Anggota Bagian Gudang <br> <span>Singkong</span> Keju</h2> <br>

                           
                            <form action="APIsaveData.php" method="post" class="row g-3">

                                <div class="col-md-6">
                                  <label for="Nama" class="form-label">NAMA STAFF</label>
                                  <input type="text" class="form-control" name="nama_staff" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="NamaBarang" class="form-label">KODE BARANG</label>
                                  <input type="text" class="form-control" name="kode_barang" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="NamaBarang" class="form-label">Jenis Barang</label>
                                    <input type="text" class="form-control" name="jenis_barang" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="NamaBarang" class="form-label">HARGA BARANG</label>
                                    <input type="text" class="form-control" name="harga_barang" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="NamaBarang" class="form-label">NAMA SUPPLIER</label>
                                    <input type="text" class="form-control" name="nama_supplier" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="inputZip" class="form-label">JUMLAH BARANG MASUK</label>
                                    <input type="text" class="form-control" id="inputZip" name="jumlah_barang" required>
                                  </div>
                                <div class="col-12">
                                  <label for="inputAddress" class="form-label">ALAMAT</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="Jl. Kartasura, N0.1" name="alamat" required>
                                </div>                        
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label">KOTA</label>
                                  <input type="text" class="form-control" id="inputCity" name="kota" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">KABUPATEN</label>
                                    <input type="text" class="form-control" id="inputCity" name="kabupaten" required>
                                  </div>
                                
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label">KODE AREA</label>
                                  <input type="text" class="form-control" id="inputZip" name="kode_area"required>
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
                                  <button type="submit" class="btn btn-primary">Input Barang</button>
                                </div>
                              </form>

                       
                        </div>





                    </div>

                </div>
                <br>
<hr>


<?php  
		//sesuaikan lokasi APIreadData masing-masing
        $sumber_json = 'http://localhost/uas/API/APIreadData.php';
		$konten_json = file_get_contents($sumber_json);
		$data_json= json_decode($konten_json, true);
	?>



  <!-- <div  class="col-lg-9 mx-auto col-14 mt-5"> -->
  <table class="table table-striped table-hover" style="border">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col" class="text-center">Nama Staff</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Nama Supplier</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Kota</th>
      <th scope="col">Kabupaten</th>
      <th scope="col">Kode Area</th>
      <th scope="col" class="text-center">Aksi</th>

    </tr>
  </thead>
  <?php
		    $no=1;  
			for($a=0; $a < count($data_json); $a++)
			{
				print "<td align='center'>".$no."</td>";
				print "<td align='center'>".$data_json[$a]['nama_staff']."</td>";
				print "<td align='center'>".$data_json[$a]['kode_barang']."</td>";
				print "<td align='center'>".$data_json[$a]['jenis_barang']."</td>";
				print "<td align='center'>".$data_json[$a]['harga_barang']."</td>";
				print "<td align='center'>".$data_json[$a]['nama_supplier']."</td>";
        print "<td align='center'>".$data_json[$a]['jumlah_barang']."</td>";
        print "<td align='center'>".$data_json[$a]['kota']."</td>";
        print "<td align='center'>".$data_json[$a]['kabupaten']."</td>";
        print "<td align='center'>".$data_json[$a]['kode_area']."</td>";
				print "<td align='center'><a class='btn btn-primary' href='edit.php?id=".$data_json[$a]['id']."'>EDIT</a> <a class='btn btn-danger' href='APIdeleteData.php?id=".$data_json[$a]['id']."'>Hapus</a></td>";
				print "</tr>";
				$no++;
			}
		?>



















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

