<?PHP
include("koneksi.php");
$id = $_GET['KODE'];

		
				$sql_00		= "select * from spm where id_spm='$id'";
				$sql_kk 	= mysqli_query($conn, $sql_00);
				$data_kk 	= mysqli_fetch_array($sql_kk);
				$email		= $data_kk['email'];

$sql = "delete from spm where id_spm='$id'";
$ceksql=mysqli_query($conn, $sql);
if ($ceksql){
//echo $sql;
header("location:../../Data-SPM.php?pesan=1&isi=Berhasil Menghapus Data ");
}else{
header("location:../../Data-SPM.php?pesan=2&isi=Gagal Menghapus Data  ".mysql_error());
}
?>