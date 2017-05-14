<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Pendaftaran</title>
	</head>
	<body>
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
				    $nama_asliErr = "Nama is required";
				    $flag=1;
				  } else {
				    $nama_asli = test_input($_POST["nama_asli"]);
				  }

				  if (empty($_POST["nama_lju"])) {
				    $nama_ljuErr = "Nama LJU is required";
				    $flag=1;
				  } else {
				    $nama_lju = test_input($_POST["nama_lju"]);
				  }

 				  if (empty($_POST["nisn"])) {
				    $nisnErr = "NISN is required";
				    $flag=1;
				  } else {
				    $nisn = test_input($_POST["nisn"]);
				  }

				  if (empty($_POST["alamat_tetap"])) {
				    $alamat_tetapErr = "Alamat is required";
				    $flag=1;
				  } else {
				    $alamat_tetap = test_input($_POST["alamat_tetap"]);
				  }

				  if (empty($_POST["provinsi_tetap"])) {
				    $provinsi_tetapErr = "Provinsi is required";
				    $flag=1;
				  } else {
				    $provinsi_tetap = test_input($_POST["provinsi_tetap"]);
				  }

				  if (empty($_POST["kota_tetap"])) {
				    $kota_tetapErr = " is required";
				    $flag=1;
				  } else {
				    $kota_tetap = test_input($_POST["kota_tetap"]);
				  }

				  if (empty($_POST["kode_pos"])) {
				    $kode_posErr = " is required";
				    $flag=1;
				  } else {
				    $kode_pos = test_input($_POST["kode_pos"]);
				  }

				  if (empty($_POST["telepon"])) {
				    $teleponErr = " is required";
				    $flag=1;
				  } else {
				    $telepon = test_input($_POST["telepon"]);
				  }

				  if (empty($_POST["email"])) {
				    $emailErr = " is required";
				    $flag=1;
				  } else {
				    $email = test_input($_POST["email"]);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					  $emailErr = "Invalid email format"; 
					  $email="";
					  $flag=1;
					}
				  }

				  if (empty($_POST["provinsi_lahir"])) {
				    $provinsi_lahirErr = " is required";
				    $flag=1;
				  } else {
				    $provinsi_lahir = test_input($_POST["provinsi_lahir"]);
				  }

				  if (empty($_POST["kota_lahir"])) {
				    $kota_lahirErr = " is required";
				    $flag=1;
				  } else {
				    $kota_lahir = test_input($_POST["kota_lahir"]);
				  }

				  if (empty($_POST["tanggal_lahir"])) {
				    $tanggal_lahirErr = " is required";
				    $flag=1;
				  } else {
				    $tanggal_lahir = test_input($_POST["tanggal_lahir"]);
				  }

				  if (empty($_POST["kewarganegaraan"])) {
				    $kewarganegaraanErr = " is required";
				    $flag=1;
				  } else {
				    $kewarganegaraan = test_input($_POST["kewarganegaraan"]);
				  }

				  if (empty($_POST["ayah"])) {
				    $ayahErr = " is required";
				    $flag=1;
				  } else {
				    $ayah = test_input($_POST["ayah"]);
				  }

				  if (empty($_POST["ibu"])) {
				    $ibuErr = " is required";
				    $flag=1;
				  } else {
				    $ibu = test_input($_POST["ibu"]);
				  }
				 #$tanggal_lahir=$_POST["tanggal_lahir"];
				  $jenis_kelamin=$_POST["jenis_kelamin"];
				  $agama=$_POST["agama"];
				  if ($UploadedFileName==''){
				  	$pasfotoErr="Foto is required";
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
							echo "<p>$row[1] anda sudah bisa login</p>";
							echo "<a href='login.php'>Login</a>";
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
		<div class="container">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						Pasfoto
					</div>
					<div class="col-md-3">
						<input type="file" name="pasfoto" value="<?php echo $nama_asli;?>"><span class="error"><?php echo $pasfotoErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Nama dalam ijazah 
					</div>
					<div class="col-md-3">
						<input type="text" name="nama_asli" value="<?php echo $nama_asli;?>"><span class="error"><?php echo $nama_asliErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Nama dalam LJU
					</div>
					<div class="col-md-3">
						<input type="text" name="nama_lju" value="<?php echo $nama_lju;?>"><span class="error"><?php echo $nama_ljuErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						NISN
					</div>
					<div class="col-md-3">
						<input type="text" name="nisn" value="<?php echo $nisn;?>"><span class="error"><?php echo $nisnErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Alamat tetap
					</div>
					<div class="col-md-3">
						<textarea name="alamat_tetap" rows="5" cols="100"><?php echo $alamat_tetap;?></textarea><span class="error"><?php echo $alamat_tetapErr;?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Provinsi
					</div>
					<div class="col-md-3">
						<input type="text" name="provinsi_tetap" value="<?php echo $provinsi_tetap;?>"><span class="error"><?php echo $provinsi_tetapErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Kabupaen/kota
					</div>
					<div class="col-md-3">
						<input type="text" name="kota_tetap" value="<?php echo $kota_tetap;?>"><span class="error"><?php echo $kota_tetapErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Kode pos
					</div>
					<div class="col-md-3">
						<input type="text" name="kode_pos" value="<?php echo $kode_pos;?>"><span class="error"><?php echo $kode_posErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Telepon/HP
					</div>
					<div class="col-md-3">
						<input type="text" name="telepon" value="<?php echo $telepon;?>"><span class="error"><?php echo $teleponErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Email
					</div>
					<div class="col-md-3">
						<input type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Provinsi tempat lahir
					</div>
					<div class="col-md-3">
						<input type="text" name="provinsi_lahir" value="<?php echo $provinsi_lahir;?>"><span class="error"><?php echo $provinsi_lahirErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Kabupaten/kota tempat lahir
					</div>
					<div class="col-md-3">
						<input type="text" name="kota_lahir" value="<?php echo $kota_lahir;?>"><span class="error"><?php echo $kota_lahirErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Tanggal lahir
					</div>
					<div class="col-md-3">
						<input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>"><span class="error"><?php echo $tanggal_lahirErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Jenis kelamin 
					</div>
					<div class="col-md-3">
						<input type="radio" name="jenis_kelamin" value="male" checked>Male 
						<input type="radio" name="jenis_kelamin" value="female" <?php if (isset($jenis_kelamin) && $jenis_kelamin=="female") echo "checked";?>>Female
						<span class="error"><?php echo $jenis_kelaminErr;?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Agama
					</div>
					<div class="col-md-3">
						<select name="agama">
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
					<div class="col-md-3">
						Kewarganegaraan
					</div>
					<div class="col-md-3">
						<input type="text" name="kewarganegaraan" value="<?php echo $kewarganegaraan;?>"><span class="error"><?php echo $kewarganegaraanErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Nama ayah
					</div>
					<div class="col-md-3">
						<input type="text" name="ayah" value="<?php echo $ayah;?>"><span class="error"><?php echo $ayahErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						Nama ibu
					</div>
					<div class="col-md-3">
						<input type="text" name="ibu" value="<?php echo $ibu;?>"><span class="error"><?php echo $ibuErr;?></span><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<input type="submit" name="submit">
					</div>
				</div>
			</form>
			
		</div>
		
	</body>
</html>