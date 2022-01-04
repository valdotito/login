<?php
	include "koneksi.php";
	$user=$_POST['username'];
	$pass=$_POST['password'];

	//echo $user,$pass;

	$sql=mysqli_query ($koneksi,"select * from tab_login where username = '$user' 
						and password = '$pass' ");

	$cek = mysqli_num_rows($sql);

			if ($cek >0){
				session_start();
				$_SESSION['username']=$user;
				$_SESSION['password']=$user;
				echo "<center>selamat datang <b>$user</b> di halaman Anda Berhasil Login <br>";
				echo "Silahkan <a href=logout.php>Logout</a></center>";
			}else{
				echo "Username dan Password Anda Salah ";
				echo "Silahkan <a href=index.php>Login</a> Kembali";
			}

	?>

