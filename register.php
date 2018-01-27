<?php
	if($user_id){
		header("location: ".BASE_URL);
	} 
 ?>
<div id="container-user-akses">

	<form action="<?php echo BASE_URL."proses_register.php";?>"  method="POST">
		
		<?php 
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;

			//start mengembalikan nilai ke field/inputan

			$nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
			$email = isset($_GET['email']) ? $_GET['email'] : false;
			$phone = isset($_GET['phone']) ? $_GET['phone'] : false;
			$alamat= isset($_GET['alamat']) ? $_GET['alamat'] : false;

			//end mengembalikan nilai ke field/inputan

			if($notif == "require"){
				echo "<div class='notif'>maaf, kamu harus melengkapi form dibawah ini  </div></br>";
			}else if($notif =="password"){
				echo "<div class='notif'>password yang kamu masukan tidak sama </div>";
			}else if ($notif == "email") {
				echo "<div class='notif'>maaf, email yang kamu masukan sudah terdaftar </div>";
			}
		 ?>
		

		<div class="element-form">
			<label>Nama Lengkap</label>
			<span><input type="text" name="nama_lengkap" placeholder="masukan nama lengkap" value="<?php echo $nama_lengkap; ?>" /></span>
		</div>

		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" placeholder="masukan email" value="<?php echo $email; ?>" /></span>
		</div>

		<div class="element-form">
			<label>No Telepon/Handphone</label>
			<span><input type="text" name="phone" placeholder="masukan no telpon/handphone" value="<?php echo $phone; ?>" /></span>
		</div>

		<div class="element-form">
			<label>Alamat</label>
			<span><textarea name="alamat" placeholder="masukan alamat" ><?php echo $alamat; ?></textarea></span>
		</div>

		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" placeholder="masukan password" /></span>
		</div>

		<div class="element-form">
			<label>Re-type Password</label>
			<span><input type="password" name="re_password" placeholder="masukan password kembali" /></span>
		</div>

		<div class="element-form">
			<span><input type="submit" value="register" /></span>
		</div>
	</form>

</div>
