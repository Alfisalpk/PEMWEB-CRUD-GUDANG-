<?php
include 'konekdB.php';

$id = $_GET['id'];


mysqli_query($koneksi,"DELETE from tb_user where id='$id'");

header("location:admin.php");





?>