<?php
session_start();

include "koneksi.php";

if (isset($_SESSION['session_login_by_id']))
{ //jika session loginnya ada maka lanjutkan
	$user_id = $_SESSION['session_login_by_id'];
	//dapatkan data user
	$sql_0 			= "select * from users where id='$user_id'";
	$sql 			= mysqli_query($conn, $sql_0);
	$data 			= mysqli_fetch_array($sql);
	$nama_1 		= $data['nama'];
	$email 			= $data['email'];
	$password		= $data['pswd'];
	$sekolah	 	= $data['id_skpd'];
	$lokasi_pict 	= $data['lokasi_ad'];
	
	$sql_000000000	= "select * from sekolah where id_sekolah='$sekolah'";
	$sql_0000000000	= mysqli_query($conn, $sql_000000000);
	$data_0000000000= mysqli_fetch_array($sql_0000000000);
	$nama_sekolah	= $data_0000000000['sekolah'];
	


}

else
{
	header("location:login.php");

	exit();
}

?>