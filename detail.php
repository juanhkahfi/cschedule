<?php include 'koneksi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSchedule - Detail Informasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>   
    <header style="background-color:#ff70a6;">
        <?php $dataHeader = $koneksi->query("select * from template");
                $dataHeader = $dataHeader->fetch_object(); ?>
        <?php $dataAdmin = $koneksi->query("select * from admin");
                $dataAdmin = $dataAdmin->fetch_object(); ?>
        <img width="6%" src="<?php echo $dataHeader->logo;?>">
        <a href="index.php" style=" position:absolute; color: white; text-decoration: none; margin-top:14px;"><?php echo $dataHeader->header?></a>
        <div class="mt-2" style="font-size: large; float: left;"><br>
        <h5 style="position:absolute; left: 107px; color: white; text-decoration: none;"><?php echo $dataHeader->subheader?></h5><br>
              <div class="mt-2" style="font-size: large; float: left;">
        <h5 style="position:absolute; left: 107px; color: white; text-decoration: none;"><?php echo $dataAdmin->alamat_admin?></h5><br>
        </div>
    </header>
        
        
        <div class="content" style="padding: 3px;">   
        <nav>   
              <h1>Menu</h1>
              <?php 
                    include('koneksi.php');

                    $query = mysqli_query($koneksi, 'SELECT * FROM navbar');
                    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                     ?>   
                <ul> 
                <?php foreach($result as $result) : ?>     
                    <li style="margin: 1%;">
                        <a href="<?php echo $result['link'] ?>" style="color:aliceblue;">
                            <button class="btn-nav">
                                <?php echo $result['menu'] ?>
                            </button>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
          
            <article>
                <h1>Detail Informasi</h1>
                <div>
                    <?php
                    if(isset($_GET['id_barang'])){
                        $id_barang    =$_GET['id_barang'];
                    }
                    else {
                        die ("Error. No ID Selected!");    
                    }
                    include "koneksi.php";
                    $query    = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
                    $result    = mysqli_fetch_array($query);
                    ?>
                    <div style="display: flex;">
                        <img  src="<?= $result["gambar_barang"]?>" alt="barang" width="30%" height="0%" style="margin-top:40px; margin-left:10px;">
                        <div style="display:flex; flex-direction:column; margin-left:10px; margin-bottom:10px; margin-right:10px;">
                        <table style="width: 100%; margin-top:10px;" border="1" cellpadding="3">
                        <tr>
                            <td>Id</td>
                            <td><?php echo $result['id_barang']?></td>
                        </tr>
                        <tr>
                            <td>Nama Matakuliah</td>
                            <td><?php echo $result['nama_barang']?></td>
                        </tr>
                        <tr>
                            <td>Gambar Matakuliah</td>
                            <td><?php echo $result['gambar_barang']?></td>
                        </tr>
                        <tr>
                            <td>Jenis Matakuliah</td>
                            <td ><?php echo $result['jenis_barang']?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><?php echo $result['deskripsi_barang']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah SKS</td>
                            <td><?php echo $result['stok_barang']?></td>
                        </tr>
                        <tr height="40">
                            <td></td>
                            <td>   <a href="index.php"><button>Kembali</button></a></td>
                        </tr>
                    </table>
                    </div>
                </div>
                
            </article>

            <aside>
              <h1></h1>
                <ul>
                    <li></li>
                </ul>
            </aside>
        </div>

        <footer class="site-footer" style="background-color:#ff70a6;">
            <div>
                <h5 style="position:absolute; right: 10px; margin-top:5px;"><?php echo $dataHeader->header?></h5>
                <h5 style="position:absolute; right: 10px; margin-bottom:5px;"><?php echo $dataHeader->subheader?> </h5>
                <h5 style="position:absolute; left: 10px;">Tiktok : @<?php echo $dataHeader->header?></h5><br>
                <h5 style="position:absolute; left: 10px;">Instagram : @<?php echo $dataHeader->header?></h5>
                <h5 style="">&copy <?php echo $dataHeader->footer?></h5>
            </div>
        </footer>
    </div>    
</body>
</html>



