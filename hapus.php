<?php 
    include_once 'koneksi.php';
    $id = $_GET['id'];
    $result = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id='$id'")or die(mysqli_error($koneksi));
    header("location:index.php?pesan=hapus");
?>