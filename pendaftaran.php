<!DOCTYPE html>
<html lang="en">
<head>
  <title>SBMPTN - Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 0px;
  }  
  .jumbotron {
      background-color: #2e72b6;
      color: #fff;
      padding: 40px 10px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .error{
	  color:#B71C1C;
  }
  .logo-small {
      color: #428BCA;
      font-size: 50px;
  }
  .logo {
      color: #428BCA;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #428BCA;
  }
  .carousel-indicators li {
      border-color: #428BCA;
  }
  .carousel-indicators li.active {
      background-color: #428BCA;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #428BCA; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #428BCA;
      background-color: #fff !important;
      color: #1976D2;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #428BCA !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #428BCA;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #2e72b6;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover {
      color: #428BCA !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #428BCA;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">SBMPTN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="index.html">Home</a></li>
        <li><a href="informasi.html">Informasi</a></li>
        <li><a href="jadwal.html">Jadwal</a></li>
        <li><a href="aturan.html">Aturan</a></li>
        <li><a href="pendaftaran.php#daftar" style="background-color:#428BCA">Pendaftaran</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <table>
    <td align="left">  
      <img src="http://sbmptn.ac.id/images/logosbmptn.gif" alt="LogoSBMPTN" width="160" height="160">
    </td>
    <td>
      <h1>
        <font><b>SBMPTN</b></font>
        <font style="color:#FF871B">2017</font>
      </h1>
      <p>Seleksi Bersama Masuk Perguruan Tinggi Negeri Tahun 2017</p>
    </td>
  </table>
  </div>

<tr>
  <td id="news">
   <marquee>News: PANLOK 11 menyelenggarakan ujian keterampilan Olah Raga, Seni Rupa, Sendratasik, Seni Tari, dan Seni Musik di Universitas Syiah Kuala | Waktu Pembayaran biaya seleksi DIPERPANJANG sampai pada hari Senin, 8 Mei 2017 pukul 16.00 WIB. | Penuntasan Pendaftaran SBMPTN 2017 DIPERPANJANG sampai pada hari Selasa, 9 Mei 2017 pukul 16.00 WIB.</marquee>
  </td>
</tr>  

<div id="main" class="container-fluid text-center">
      <h1>PENDAFTARAN SELEKSI BERSAMA MASUK PERGURUAN TINGGI NEGERI TAHUN 2017</h1>
</div>

<div id="daftar" class="container-fluid text-center bg-grey">
      <?php

			$pasfotoErr=$nama_asliErr = $nama_ljuErr = $nisnErr = $alamat_tetapErr = $provinsi_tetapErr = $kota_tetapErr = $kode_posErr = $teleponErr = $emailErr = $provinsi_lahirErr = $kota_lahirErr = $tanggal_lahirErr = $jenis_kelaminErr = $agamaErr = $kewarganegaraanErr = $ayahErr = $ibuErr = "";
			$nama_asli = $nama_lju = $nisn = $alamat_tetap = $provinsi_tetap = $kota_tetap= $kode_pos= $telepon= $email= $provinsi_lahir= $kota_lahir= $tanggal_lahir= $jenis_kelamin= $agama= $kewarganegaraan= $ayah= $ibu= "";
			$flag='';

			if(isset($_POST['submit'])){
				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				include "connect.php";

				$UploadedFileName=$_FILES['pasfoto']['name'];
				
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$flag=0;
				  if (empty($_POST["nama_asli"])) {
				    $nama_asliErr = " Kolom Nama anda belum diisi";
				    $flag=1;
				  } else {
				    $nama_asli = test_input($_POST["nama_asli"]);
				  }

				  if (empty($_POST["nama_lju"])) {
				    $nama_ljuErr = " Kolom Nama LJU anda belum diisi ";
				    $flag=1;
				  } else {
				    $nama_lju = test_input($_POST["nama_lju"]);
				  }

 				  if (empty($_POST["nisn"])) {
				    $nisnErr = " Kolom NISN anda belum diisi";
				    $flag=1;
				  } else {
				    $nisn = test_input($_POST["nisn"]);
				  }

				  if (empty($_POST["alamat_tetap"])) {
				    $alamat_tetapErr = " Kolom Alamat anda belum diisi";
				    $flag=1;
				  } else {
				    $alamat_tetap = test_input($_POST["alamat_tetap"]);
				  }

				  if (empty($_POST["provinsi_tetap"])) {
				    $provinsi_tetapErr = " Kolom Provinsi anda belum diisi";
				    $flag=1;
				  } else {
				    $provinsi_tetap = test_input($_POST["provinsi_tetap"]);
				  }

				  if (empty($_POST["kota_tetap"])) {
				    $kota_tetapErr = " Kolom Kota Tetap anda belum diisi";
				    $flag=1;
				  } else {
				    $kota_tetap = test_input($_POST["kota_tetap"]);
				  }

				  if (empty($_POST["kode_pos"])) {
				    $kode_posErr = " Kolom Kode Pos anda belum diisi";
				    $flag=1;
				  } else {
				    $kode_pos = test_input($_POST["kode_pos"]);
				  }

				  if (empty($_POST["telepon"])) {
				    $teleponErr = " Kolom Telepon anda belum diisi";
				    $flag=1;
				  } else {
				    $telepon = test_input($_POST["telepon"]);
				  }

				  if (empty($_POST["email"])) {
				    $emailErr = " Kolom Email anda belum diisi";
				    $flag=1;
				  } else {
				    $email = test_input($_POST["email"]);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					  $emailErr = "Format Email salah"; 
					  $email="";
					  $flag=1;
					}
				  }

				  if (empty($_POST["provinsi_lahir"])) {
				    $provinsi_lahirErr = " Kolom Provinsi Lahir anda belum diisi";
				    $flag=1;
				  } else {
				    $provinsi_lahir = test_input($_POST["provinsi_lahir"]);
				  }

				  if (empty($_POST["kota_lahir"])) {
				    $kota_lahirErr = " Kolom Kota Lahir anda belum diisi";
				    $flag=1;
				  } else {
				    $kota_lahir = test_input($_POST["kota_lahir"]);
				  }

				  if (empty($_POST["tanggal_lahir"])) {
				    $tanggal_lahirErr = " Kolom Tanggal Lahir anda belum diisi";
				    $flag=1;
				  } else {
				    $tanggal_lahir = test_input($_POST["tanggal_lahir"]);
				  }

				  if (empty($_POST["kewarganegaraan"])) {
				    $kewarganegaraanErr = " Kolom Kewarganegaraan anda belum diisi";
				    $flag=1;
				  } else {
				    $kewarganegaraan = test_input($_POST["kewarganegaraan"]);
				  }

				  if (empty($_POST["ayah"])) {
				    $ayahErr = " Kolom Nama Ayah anda belum diisi";
				    $flag=1;
				  } else {
				    $ayah = test_input($_POST["ayah"]);
				  }

				  if (empty($_POST["ibu"])) {
				    $ibuErr = " Kolom Nama Ibu anda belum diisi";
				    $flag=1;
				  } else {
				    $ibu = test_input($_POST["ibu"]);
				  }
				 #$tanggal_lahir=$_POST["tanggal_lahir"];
				  $jenis_kelamin=$_POST["jenis_kelamin"];
				  $agama=$_POST["agama"];
				  if ($UploadedFileName==''){
				  	$pasfotoErr=" Upload foto anda";
				  	$flag=1;
				  }
				  else if($UploadedFileName!='' and $flag==0)
					{
						$flag=2;
						$upload_directory = "uploads/";
						$TargetPath=time().$UploadedFileName;
						if(move_uploaded_file($_FILES['pasfoto']['tmp_name'], $upload_directory.$TargetPath)){    					
							$query = "CALL sp_daftar('$TargetPath','$nama_asli','$nama_lju','$nisn','$alamat_tetap','$provinsi_tetap','$kota_tetap','$kode_pos','$telepon','$email','$provinsi_lahir','$kota_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$kewarganegaraan','$ayah','$ibu');";
							$sql = mysqli_query($db,$query) or die("Query fail : ".mysqli_error());  	
						}
						$row = mysqli_fetch_array($sql);
						if($row[0]==0){
							echo "<p>$row[1] Anda sudah bisa login</p>";
							echo "<a href='login.php' class='btn btn-basic'>Login</a><br>";
							$pasfotoErr=$nama_asliErr = $nama_ljuErr = $nisnErr = $alamat_tetapErr = $provinsi_tetapErr = $kota_tetapErr = $kode_posErr = $teleponErr = $emailErr = $provinsi_lahirErr = $kota_lahirErr = $tanggal_lahirErr = $jenis_kelaminErr = $agamaErr = $kewarganegaraanErr = $ayahErr = $ibuErr = "";
							$nama_asli = $nama_lju = $nisn = $alamat_tetap = $provinsi_tetap = $kota_tetap= $kode_pos= $telepon= $email= $provinsi_lahir= $kota_lahir= $tanggal_lahir= $jenis_kelamin= $agama= $kewarganegaraan= $ayah= $ibu= "";
						} else {
							$email='';
							$emailErr='Email sudah dipakai';
							echo "<p>$row[1]</p>";
						}
						mysqli_close($db);
					}
				}
				
			}
		?>
		<div class="container text-left">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Pasfoto</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="file" name="pasfoto" value="<?php echo $nama_asli;?>"><span class="error"><?php echo $pasfotoErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Nama dalam ijazah</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="nama_asli" class="form-control" value="<?php echo $nama_asli;?>"><span class="error"><?php echo $nama_asliErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Nama dalam LJU</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="nama_lju" class="form-control" value="<?php echo $nama_lju;?>"><span class="error"><?php echo $nama_ljuErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>NISN</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="nisn" class="form-control" value="<?php echo $nisn;?>"><span class="error"><?php echo $nisnErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Alamat tetap</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<textarea name="alamat_tetap" class="form-control" rows="5" cols="100"><?php echo $alamat_tetap;?></textarea><span class="error"><?php echo $alamat_tetapErr;?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<br><b>Provinsi</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<br><input type="text" name="provinsi_tetap" class="form-control" value="<?php echo $provinsi_tetap;?>"><span class="error"><?php echo $provinsi_tetapErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Kabupaen/kota</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="kota_tetap" class="form-control" value="<?php echo $kota_tetap;?>"><span class="error"><?php echo $kota_tetapErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Kode pos</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="kode_pos" class="form-control" value="<?php echo $kode_pos;?>"><span class="error"><?php echo $kode_posErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Telepon/HP</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="telepon" class="form-control" value="<?php echo $telepon;?>"><span class="error"><?php echo $teleponErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Email</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="email" class="form-control" value="<?php echo $email;?>"><span class="error"><?php echo $emailErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Provinsi tempat lahir</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="provinsi_lahir" class="form-control" value="<?php echo $provinsi_lahir;?>"><span class="error"><?php echo $provinsi_lahirErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Kabupaten/kota tempat lahir</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="kota_lahir" class="form-control" value="<?php echo $kota_lahir;?>"><span class="error"><?php echo $kota_lahirErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Tanggal lahir</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $tanggal_lahir;?>"><span class="error"><?php echo $tanggal_lahirErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Jenis kelamin</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="radio" name="jenis_kelamin" value="male" checked> Laki-laki
						<br>
						<input type="radio" name="jenis_kelamin" value="female" <?php if (isset($jenis_kelamin) && $jenis_kelamin=="female") echo "checked";?>> Perempuan
						<span class="error"><?php echo $jenis_kelaminErr;?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<br><b>Agama</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<br><select name="agama" class="form-control">
						    <option value="Katolik" <?php if (isset($agama) && $agama=="Katolik") echo "selected";?>>Katolik</option>
						    <option value="Kristen" <?php if (isset($agama) && $agama=="Kristen") echo "selected";?>>Kristen</option>
						    <option value="Islam" <?php if (isset($agama) && $agama=="Islam") echo "selected";?>>Islam</option>
						    <option value="Hindu" <?php if (isset($agama) && $agama=="Hindu") echo "selected";?>>Hindu</option>
						    <option value="Budha" <?php if (isset($agama) && $agama=="Budha") echo "selected";?>>Budha</option>
							<option value="Konghucu" <?php if (isset($agama) && $agama=="Konghucu") echo "selected";?>>Konghucu</option>
						</select>
						<span class="error"><?php echo $agamaErr;?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<br><b>Kewarganegaraan</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<br><input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $kewarganegaraan;?>"><span class="error"><?php echo $kewarganegaraanErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Nama ayah</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="ayah" class="form-control" value="<?php echo $ayah;?>"><span class="error"><?php echo $ayahErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<b>Nama ibu</b>
					</div>
					<div class="col-md-8 col-sm-6">
						<input type="text" name="ibu" class="form-control" class="form-control" value="<?php echo $ibu;?>"><span class="error"><?php echo $ibuErr;?></span><br>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-8 col-sm-6">
						<input type="submit" name="submit" class="btn btn-primary">
					</div>
				</div>
			</form>
			
		</div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <p>Back to top</p>
  </a>
  <p>In Partnership with:</p>
  <br>
  <div class="col-sm-4">
  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/fa/Bank_Mandiri_logo.svg/1280px-Bank_Mandiri_logo.svg.png" id="mandiri" width=170 height=50>
  </div>
  <div class="col-sm-4">
  <img src="https://upload.wikimedia.org/wikipedia/id/archive/a/a6/20161103140142%21Logo_Bank_BTN.png" id="btn" width=230 height=50>
  </div>
  <div class="col-sm-4">
  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/27/BankNegaraIndonesia46-logo.svg/800px-BankNegaraIndonesia46-logo.svg.png" id="bni" width=153 height=50>
  </div>
  <br><br><br>
  <div class="col">
  <p>And also</p>
  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c4/Telkom_Indonesia_2013.svg/1280px-Telkom_Indonesia_2013.svg.png" id="telkom" width=180 height=100>
  </div>
  <br><br><br>
  <img src="http://apply.darmasiswa.kemdikbud.go.id/assets/images/big-logo.png" alt="Kemendikbud" width="64" height="60">
  <p>© SBMPTN 2017</p>
</footer>

<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
