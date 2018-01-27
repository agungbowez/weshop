<?php 
	include_once("function/helper.php");
	include_once("function/koneksi.php");

	$email= $_POST['email'];
	$password= md5 ($_POST['password']);

	$query=mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on'");

	if(mysqli_num_rows($query) == 0){
		header("location:".BASE_URL."index.php?page=login&notif=true");
	}else{
		
		$row=mysqli_fetch_assoc($query);
		
		session_start(); //memulai session

		//$_SESSION['user_id] = membuat session user_id   //$row['user_id'] yang di ambil dari kolom user_id
		$_SESSION['user_id'] = $row['user_id'];  
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];

		//sampai disini membuat sessionnya, (user_id,nama,level)
		header("location: ".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");  //memindahkan ke halaman my profile
		
	}
 ?>