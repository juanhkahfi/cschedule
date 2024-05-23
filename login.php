<?php include 'koneksi.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:ADMIN AREA:.</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
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
        
        <div class="content" style="width:100%; padding: 3px;">
            <article style="width: 100%; background-color: #f7aef8; padding-top: 50px;">
                <!-- Form Login -->
                <div class="container" style="width:60%; background-color: #ff70a6; padding: 3%;">
                <h4 class="text-center" style="color: white;">FORM LOGIN</h4>
                <hr>
                <form method="POST" action="ceklogin.php" >
                    
                    <div class="rows" style="background-color:#f7aef8;">
                    <label for="exampleInputEmail1">Email</label>
                        <div >
                        <div >
                        </div>
                        <input type="text" placeholder="Masukkan Email" name="username">
                        </div>
                    </div>
                    <br>
                    <div class="rows" style="background-color:#f7aef8;">
                    <label for="exampleInputPassword1">Password</label>
                        <div>
                        <div >
                        </div>
                        <input type="password" class="fpassword" placeholder="Masukkan Password" name="password">
                    </div>
                    
                    </div>
                    <br>
                        <button type="submit" name="submit" class="btn-login" style="background-color:#f7aef8;">LOGIN</button>
                        <button type="reset" name="reset" class="btn-login" style="background-color:#f7aef8;">RESET</button>
                </form>
                    
                </div>
            <!-- Akhir Form Login -->
            </article>
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