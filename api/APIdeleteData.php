<?php
include 'konekdB.php';

$id = $_GET['id'];


mysqli_query($koneksi,"DELETE from tb_gudang where id='$id'");

header("location:input.php");





?>