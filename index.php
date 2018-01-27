<?php
	session_start();  //cara mengakses session dengan memulai session
	include_once("koneksi.php");
	include_once("function/helper.php");  // menyertakan file helper.php yang ada di folder function
	                                    // include_once -> dengan mengetikan script ini, kita dapat mengakses semua yang ada di helper.php

	$page = isset($_GET['page'])? $_GET['page'] : false;  
	
	/*cara mengeluarkan session ke layar
		echo $_SESSION['user_id']; dilayar akan keluar sesuai dengan kolom user_id di database
		*/

	// start membuat variable user_id , nama, level, berdasarkan session yang telah di buat di proses_login.php

		/* isset($_SESSION['user_id]) ? -> menggunakan tenary(isset) apakah user_id ada atau tidak
			$_SESSION[user_id] -> jika ada, maka gunakan nilai dari session untuk variable $user_id
			:false -> jika tidak ada maka nilainya false

		*/	
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false; 
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;

	// end membuat variable user_id,nama,level
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>weshop | barang-barang elektronik</title>
	
	<link rel="stylesheet" href="<?php echo BASE_URL."css/style.css"; ?>" />
</head>
<body>
	<div id="container">
		<div id="header">
			<a href="<?php echo BASE_URL."index.php"; ?>">
			<img src="<?php echo BASE_URL."images/logo.png"; ?>" alt="logo weshop"/>
			</a>
			<div id="menu">
				<div id="user">
				
				<?php
				
							if($user_id){
								echo "Hi <b>$nama</b>,
									  <a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>
									  <a href='".BASE_URL."logout.php'>Logout</a>";
							}else{
								echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
									 <a href='".BASE_URL."index.php?page=register'>Register</a>";
							}
						
				?>
					
				</div>
				<a href="<?php echo BASE_URL."index.php?page=keranjang";?>" id="button-keranjang">
				<img src="<?php echo BASE_URL."images/cart.png"; ?>" alt="cart" />
				</a>
			</div>
			<div id="content">

				<?php

					$filename = "$page.php";
					
					if(file_exists($filename)){
						include_once($filename);
					}else{
						echo "maaf, file tidak tersedia";
					}
				?>

				
			</div>
		</div>
		<div id="footer">
				<p>copyright weshop 2017</p>
		</div>
	</div>
</body>
</html>