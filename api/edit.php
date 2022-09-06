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

                                <a class="nav-link active" href="about.html">Story</a>

                            </li>



                            <li class="nav-item">

                                <a class="nav-link" href="products.html">Products</a>

                            </li>



                            <!-- <li class="nav-item">

                                <a class="nav-link" href="faq.html">FAQs</a>

                            </li>



                            <li class="nav-item">

                                <a class="nav-link" href="contact.html">Contact</a>

                            </li>

                        </ul> -->



                        <div class="d-none d-lg-block">

                            <a href="../sign-in.html" class="bi-person custom-icon me-3"> Admin</a>



                            <a href="product-detail.html" class="bi-bag custom-icon"></a>

                        </div>

                    </div>

                </div>

            </nav>



            

            <section class="testimonial section-padding">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-9 mx-auto col-11">

                            <h2 class="text-center">Bagian Gudang <br> <span>Singkong</span> Keju</h2> <br>


                            <form action="APIupdateData.php" method="post" class="row g-3">
<?php
	include "konekdB.php";
	$id = $_GET['id'];
	$ambil_data = mysqli_query($koneksi,"select * from tb_gudang where id='$id'");
	while($data = mysqli_fetch_array($ambil_data)) {
	?>
                                
                                <div class="col-md-6">
                                  <label for="Nama" class="form-label">NAMA STAFF </label>
                                  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                  <input type="text" class="form-control" name="nama_staff" required value="<?php echo $data['nama_staff'] ?>">
                                </div>
                                <div class="col-md-6">
                                  <label for="NamaBarang" class="form-label">KODE BARANG</label>
                                  <input type="text" class="form-control" name="kode_barang" required value="<?php echo $data['kode_barang'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="NamaBarang" class="form-label">Jenis Barang</label>
                                    <input type="text" class="form-control" name="jenis_barang" required value="<?php echo $data['jenis_barang'] ?>">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="NamaBarang" class="form-label">HARGA BARANG</label>
                                    <input type="text" class="form-control" name="harga_barang" required value="<?php echo $data['harga_barang'] ?>">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="NamaBarang" class="form-label">NAMA SUPPLIER</label>
                                    <input type="text" class="form-control" name="nama_supplier" required value="<?php echo $data['nama_supplier'] ?>">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="inputZip" class="form-label">JUMLAH BARANG MASUK</label>
                                    <input type="text" class="form-control" id="inputZip" name="jumlah_barang" required value="<?php echo $data['jumlah_barang'] ?>">
                                  </div>
                                <div class="col-12">
                                  <label for="inputAddress" class="form-label">ALAMAT</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="Jl. Kartasura, N0.1" name="alamat" required value="<?php echo $data['alamat'] ?>">
                                </div>                        
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label">KOTA</label>
                                  <input type="text" class="form-control" id="inputCity" name="kota" required value="<?php echo $data['kota'] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">KABUPATEN</label>
                                    <input type="text" class="form-control" id="inputCity" name="kabupaten" required value="<?php echo $data['kabupaten'] ?>">
                                  </div>
                                
                                <div class="col-md-2">
                                  <label for="inputZip" class="form-label">KODE AREA</label>
                                  <input type="text" class="form-control" id="inputZip" name="kode_area" required value="<?php echo $data['kode_area'] ?>">
                                </div>
                                <!-- <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Check me out
                                    </label>
                                  </div>
                                </div> -->
                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary">Edit Data</button>
                                </div>
                              </form>
                              <?php } ?>

                        </div>





                    </div>

                </div>
                <br>
<hr>

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

