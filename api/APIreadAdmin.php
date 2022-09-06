<?php 
include 'konekdB.php';

$query = mysqli_query($koneksi, "SELECT * FROM tb_user") or die(mysqli_error($koneksi));

$data = array();
while($row = mysqli_fetch_assoc($query))
{
    $data[] = $row; 
}

echo json_encode($data);

mysqli_close($koneksi);

?>