<?php include 'koneksi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSchedule - Lihat Informasi</title>
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
            <nav style="background-color:#f7aef8;">   
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
                            <button class="btn-nav" style="background-color: #ff70a6;">
                                <?php echo $result['menu'] ?>
                            </button>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
          
            <article style="background-color:#f7aef8;">
                <h1 style="color:white;">Informasi Matakuliahmu</h1> 
                    <?php
                        include('koneksi.php');
                         $no=0;
                         if(isset($_GET['jenis_barang'])){
                             $filter_kategori = $_GET['jenis_barang'];
                             $query_rs = mysqli_query($koneksi, "SELECT * FROM barang WHERE jenis_barang LIKE '$filter_kategori%' ");
                         }else{
                             $query_rs = mysqli_query($koneksi, "SELECT * FROM barang");
                         }
                        while($result = mysqli_fetch_array($query_rs)){
                        $no++    
                    ?>
                    <div style="color: black; background-color: white; padding: 1%; margin: 1%; border-radius: 8px;">
                        <div style="display: flex;">
                        <img  src="<?= $result["gambar_barang"]?>" alt="barang" width="150px">
                        <div style="display:flex; flex-direction:column; margin-left:10px">
                            <a  href="detail.php?id_barang=<?=$result['id_barang']?>" style="color: brown; text-decoration:none;">
                                <h2><?php echo $result['nama_barang'] ?></h2>
                            </a>
                            <label ><strong>Jenis Matakuliah   :</strong> <?php echo $result['jenis_barang']; ?></label><br>
                            <label ><strong>Jumlah SKS :</strong> <?php echo $result['stok_barang']; ?></label><br>
                        </div>
                        </div>
                       
                    </div>
                    <?php
                        }
                    ?>
            </article>

            <aside style="background-color:#f7aef8;">
              <h1>Jenis Matakuliah</h1>
              <?php 
                    include('koneksi.php');

                    $query = mysqli_query($koneksi, 'SELECT DISTINCT kategori FROM aside');
                    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                     ?>   
                <ul> 
                <?php foreach($result as $result) : ?>     
                    <li style="margin: 1%; ">
                        <a href="index.php?jenis_barang=<?=$result['kategori']?>" >
                            <button class="btn-aside" style="background-color:#ff70a6;">
                                <?php echo $result['kategori'] ?>
                            </button>
                        </a>
                    </li>
                    <?php endforeach; ?>
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