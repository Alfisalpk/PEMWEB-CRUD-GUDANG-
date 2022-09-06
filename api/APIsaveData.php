<?php
	include 'konekdB.php';
	
    if(!empty(($_POST['kode_barang']) && ($_POST['jenis_barang']) && ($_POST['harga_barang']) && ($_POST['nama_staff']) && ($_POST['nama_supplier']) && ($_POST['jumlah_barang']) && ($_POST['alamat']) && ($_POST['kota']) && ($_POST['kabupaten']) && ($_POST['kode_area'])))
    {
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


	     $sql = "INSERT tb_gudang (nama_staff,kode_barang,jenis_barang,harga_barang,nama_supplier,jumlah_barang,alamat,kota,kabupaten,kode_area) 
		 VALUES ('".$nstaff."','".$kbarang."','".$jbarang."','".$hbarang."','".$nsupplier."','".$jumbarang."','".$alamat."','".$kota."','".$kabupaten."','".$karea."')";
        		

		if ($koneksi->query($sql) === TRUE) {
			
			
			
			header("location:input.php");
			
		} else {
		    echo "Error: " . $sql . "<br>" . $koneksi->error;
		}
	} else {
	    echo "Data gagal disimpan";
	}
	
	$koneksi->close();

?>
