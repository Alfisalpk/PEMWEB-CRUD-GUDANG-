<?php
	include 'konekdB.php';
	
    if(!empty(($_POST['username']) && ($_POST['email']) && ($_POST['password'])))
    {
	    $username = $_POST['username'];
	    $email = $_POST['email'];
	    $password = md5($_POST['password']);
	   
	    


	     $sql = "INSERT tb_user (username,email,pass) 
		 VALUES ('".$username."','".$email."','".$password."')";
        		

		if ($koneksi->query($sql) === TRUE) {
			
			
			
			header("location: admin.php");
			
		} else {
		    echo "Error: " . $sql . "<br>" . $koneksi->error;
		}
	} else {
	    echo "Data gagal disimpan";
	}
	
	$koneksi->close();

?>
