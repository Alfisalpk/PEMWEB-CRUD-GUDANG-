<?php 

include 'konekdB.php';
        $id = $_POST['id'];
        $username = $_POST['username'];
	$email= $_POST['email'];
	$password =md5($_POST['password']);
	    
 

mysqli_query($koneksi,"UPDATE tb_user SET username='$username', email='$email', pass='$password' WHERE id='$id'");
 
   
 header("location: admin.php");
 
?>