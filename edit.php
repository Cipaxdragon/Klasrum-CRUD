<?php 

include_once "koneksi.php";
    
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        include_once "koneksi.php";
        $result = mysqli_query($koneksi, "UPDATE mahasiswa SET nama = '$nama', nim = '$nim' WHERE id = $id ");
        // echo mysqli_error($koneksi);
        echo"berhasil edit data";
        header("Location:index.php");
    } 
?>
<?php 
    
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id");
    while($data = mysqli_fetch_array($result)){
        $nama = $data['nama'];
        $nim = $data['nim'];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    
<div class="container">
        <form action="edit.php" method="post">
            <a href="index.php">Kembali</a>
            <label for="">Nama</label>
            <input type="text" name="nama" value="<?php  echo $nama?>"> <br>
            <label for="">NIM</label>
            <input type="text" name="nim" value="<?php  echo $nim?>"> <br>
            <input type="hidden" name="id" value="<?php  echo $_GET['id']?>"> <br>
            <input type="submit" name="submit" value="submit">
        </form>
</body>
</html>
   