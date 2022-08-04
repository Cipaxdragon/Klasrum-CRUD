<!DOCTYPE html>
<html lang="id">
    <head>
        <title></title>
        <meta name="author" content="Ahmad Ghazali">
        <link rel="icon"  href="img/Kaset-1.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- Tailwind CSS -->
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        
        <!-- css external -->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- Javascript External -->
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="container">
        <form action="add.php" method="post">
            <a href="index.php">Kembali</a>
            <label for="">Nama</label>
            <input type="text" name="nama" value=""> <br>
            <label for="">NIM</label>
            <input type="text" name="nim" value=""> <br>
            <input type="submit" name="submit" value="submit">
        </form>
        
        <?php 
        if(isset($_POST['submit'])){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            include_once "koneksi.php";
            $result = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama) VALUES ('$nim','$nama')");
            echo mysqli_error($koneksi);
            echo"berhasil tambah data";
        } 
        ?>
            
        </div>
    </body>
</html>