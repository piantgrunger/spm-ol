<?php
$conn = mysqli_connect("localhost", "root", "", "spm_");
if(mysqli_connect_errno()){
	echo "Gagal:".mysqli_connect_error();
}else{
	//echo "Koneksi berhasil";
}
?>