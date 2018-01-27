<?php                                 //untuk mecegah user login 2 kali
	if($user_id){                     //cek apakah user id nya sudah login? jika ada user_id maka jalankan header("location: ".BASE_URL)
		header("location: ".BASE_URL); //jika sudah, maka akan dikembalikan ke halaman utama
	}
 ?>

<div id="container-user-akses">

	<form action="<?php echo BASE_URL."proses_login.php";?>" method="POST">
		
		<?php 
		
			$notif=isset($_GET['notif'])? $_GET['notif']:false;
			if($notif== true){
				echo "<div class='notif'>maaf, email atau password yang kamu masukan tiddak cocok </div>";
			}
		
		 ?>	
		<div class="element-form">
			<label >Email</label>
			<span><input type="text" name="email" placeholder="masukan email"></span>
		</div>

		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" placeholder="masukan password" /></span>
		</div>

		<div class="element-form">
			<span><input type="submit" value="Login"></span>
		</div>

	</form>
</div>