<?php 
    include_once "koneksi.php";
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
    
    <head>
        <title></title>
        <meta name="author" content="Ahmad Ghazali">
        <link rel="icon"  href="img/Kaset-1.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Boostrap -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        
        <!-- Tailwind CSS -->
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        
        <!-- css external -->
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        
        <!-- Javascript External -->
        <!-- <script src="js/main.js"></script> -->
    </head>
    <body>
        
        <table widht="80%" border="1">
            <a href="add.php">Tambah</a>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php
                while($data = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo"<td>".$data['id']."</td>";
                    echo"<td>".$data['nim']."</td>";
                    echo"<td>".$data['nama']."</td>";       
                    echo "<td> <a href='edit.php?id=$data[id]'> Edit </a> <a href='hapus.php?id=$data[id]'> Hapus </a></td>";   
                echo"</tr>";
                }
            
            ?>
       </table>
    </body>
</html>