<?php 

include 'konekdB.php';
        $id = $_POST['id'];
        $kbarang = $_POST['kode_barang'];
	    $jbarang = $_POST['jenis_barang'];
	    $hbarang = $_POST['harga_barang'];
	    $nstaff = $_POST['nama_staff'];
	    $nsupplier = $_POST['nama_supplier'];
	    $jumbarang = $_POST['jumlah_barang'];
		$kota = $_POST['kota'];
		$kabupaten = $_POST['kabupaten'];
		$karea = $_POST['kode_area'];
		$alamat = $_POST['alamat'];
 

mysqli_query($koneksi,"UPDATE tb_gudang SET nama_staff='$nstaff', kode_barang='$kbarang', jenis_barang='$jbarang', harga_barang='$hbarang', nama_supplier='$nsupplier', jumlah_barang='$jumbarang', alamat='$alamat', kota='$kota', kabupaten='$kabupaten', kode_area='$karea' WHERE id='$id'");
 
   
 header("location:input.php");
 
?>