<?PHP
include "assets/include/session-sekolah.php";
include "assets/include/koneksi.php";

?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <?php include "pages/icon-1.php"; ?>
    <?php include "pages/title.php"; ?>
	<?php
  
  				function randomPrefix($length)
				{
				$random	="";
				srand((double)microtime()*1000000);
				
				$data	=  "AbcDE123IJKLMN67QRSTUVWXYZ";
				$data	.= "aBCdefghijkmn123opq45rs67tuv89xyz";
				$data	.= "0FGH45OP89";
				for ($i = 0; $i < $length; $i++)
				{
				$random	.= substr($data,(rand()%(strlen($data))), 1);
				}
				return $random;
				}
				
				
  	$tgl_input		= date("d-m-Y"); 
	$jam			= date("g:i a"); 
	
	$code			= randomPrefix(12);


	$p1				= $_POST['p1'];
	$p2				= $_POST['p2'];
	$p3				= $_POST['p3'];
	$p4				= $_POST['p4'];
	$p5				= $_POST['p5'];
	$p6				= $_POST['p6'];
	$p7				= $_POST['p7'];
	$p8				= $_POST['p8'];
	$p9				= $_POST['p9'];
	$p10			= $_POST['p10'];
	$p11			= $_POST['p11'];
	$p12			= $_POST['p12'];
	$p13			= $_POST['p13'];
	$p14			= $_POST['p14'];
	$p15			= $_POST['p15'];
	$p16			= $_POST['p16'];
	$p17			= $_POST['p17'];
	$p18			= $_POST['p18'];
	$p19			= $_POST['p19'];
	$p20			= $_POST['p20'];
	$p21			= $_POST['p21'];
	
	$periode		= $_POST['periode'];
	$tahun			= $_POST['tahun'];
	
	$id_sekolah	 	= $sekolah;
	
	
  ?>

    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="error-box">
            <div class="error-body text-center">
			<?php
			$jml_data1 	= "SELECT * FROM spm where id_periode='$periode' and tahun ='$tahun' and id_sekolah='$id_sekolah' ";
	$query		= mysqli_query($conn, $jml_data1);
	$data 		= mysqli_num_rows($query);
	//echo $jml_data1;
	if ($data !=0)
	{
	?>
				<h1 class="error-title text-danger">BRO</h1>
                <h3 class="text-uppercase error-subtitle">SILAHKAN CEK KEMBALI</h3>
                <p class="text-muted m-t-30 m-b-30">DATA PADA SEMESTER INI SUDAH ADA</p>
                <a href="Instrumen-SPM.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">Mari Kita Kembali</a> </div>
				
	<?php
	}
	else
	{
	
	
	$nama_layanan		= strtoupper($layanan);
	$nama_tamu			= strtoupper($nama);
					
					$sql = 	" INSERT INTO spm VALUES(NULL,
								'$id_sekolah', 
								'$periode', 
								'$tahun',
								
								'$p1',
								'$p2',
								'$p3',
								'$p4',
								'$p5',
								'$p6',
								'$p7',
								'$p8',
								'$p9',
								'$p10',
								'$p11',
								'$p12',
								'$p13',
								'$p14',
								'$p15',
								'$p16',
								'$p17',
								'$p18',
								'$p19',
								'$p20',
								'$p21',
								'$code',
								'$tgl_input'
								) ";
					$in3 = mysqli_query($conn, $sql);
					?>
					<h1 class="error-title text-success">OK</h1>
                <h3 class="text-uppercase error-subtitle">DATA TERSIMPAN</h3>
                <p class="text-muted m-t-30 m-b-30">TERIMAKASIH ATAS KERJASAMANYA</p>
                <a href="Instrumen-SPM.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">Mari Kita Kembali</a> </div>
					<?php
					}
  
			?>
                
				
				  
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>
</body>

</html>
