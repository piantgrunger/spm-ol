<?PHP
include "assets/include/session-sekolah.php";
include "assets/include/koneksi.php";

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

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
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <?php include "pages/header-sekolah.php";?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php include "pages/sidebar-admin-sekolah.php";?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">INSTRUMEN SPM KOTA BANJARBARU </h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Selamat Datang </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">SPM</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                  
                        
               
				<div class="col-md-12">
                        <div class="card">
						 <div class="card-body">
						 <form class="form-horizontal" action='SPM.php' method='post' enctype='multipart/form-data'>
						 
						 <div class="form-group row">
                    <label for="lname" class="control-label col-lg-9">Periode Pengisian SPM</label>
                    <div class="col-lg-2">
					
					 <select class="select2 form-control custom-select" name="periode" >
							 <option value="1">SEMESTER I</option> 
							 <option value="0">SEMESTER II</option>
						
							
               		 </select>
                    </div>
					<div class="col-lg-1">
					
					 <select class="select2 form-control custom-select" name="tahun" >
							 <option value="2019">2019</option> 
							 <option value="2020">2020</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
						 
						 
             		<div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">Tersedia satuan pendidikan dalam jarak yang terjangkau dengan berjalan kaki yaitu maksimal 3 km untuk SD/MI dan 5 km untuk SMP/MTs dan kelompok permukiman di daerah terpencil</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control custom-select" name="p1" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				  <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Jumlah Peserta didik tidak melebihi 36 orang untuk setiap rombongan belajar tersedia 1 ( satu ruang kelas yang dilengkapi dengan meja dan kursi yang cukup untuk peserta didik dan guru, serta papan tulis
					</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p2" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				    <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Tersedia ruangan laboratorium IPA yang dilengkapi dengan meja dan kursi yang cukup untuk 36 perserta didik dan minimal satu set peralatan praktek IPA demonstrasi dan eksperimen peserta didik
					</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p3" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Tersedia satu ruang guru yang di lengkapi dangan meja dan kursi untuk setiap orang guru, kepala sekolah dan staf kependidikan lainnya; dan di setiap SMP/MTs tersedia ruang kepala sekolah yang terpisah dari ruang guru					</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p4" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Tersedia 1 (satu) orang guru untuk setiap Mata Pelajaran dan untuk daerah khusus tersedia satu orang guru untuk setiap rumpun mata pelajaran
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p5" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Tersedia guru dengan kualifikasi akademik s-1 atau D-lV sebanyak 70% dan separuh diantaranya (35% dari keseluruhan guru) telah memiliki sertifikat pendidik, untuk daerah khusus masing-masing sebanyak 40% dan 20%
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p6" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				  
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Tersedia guru dengan kualifikasi akademik S-1 atau D-lV dan telah memiliki sertifikat pendidikan masing-masing satu orang untuk mata pelajaran Matematika, IPA, Bahasa indonesia, Bahasa inggris dan PKn
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p7" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Kepala SMP/MTs berkualifikasi Akademik S-1 atau D-IV dan telah memiliki sertifikat pendidik
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p8" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Kunjungan pengawas ke satuan pendidikan di lakukan satu kali setiap bulan dan setiap kunjungan di lakukan selama 3 jam untuk melakukan supervisi dan pembinaan
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p9" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Menyediakan buku teks mata pelajaran (bahasa indonesia, IPA, IPS, dan PKn)yang sudah di tetapkan kelayaknnya oleh pemerintah 


</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p10" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
	 <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Menyediakan buku teks yang sudah di tetapkan kelayakannya oleh pemerintah mencakup semua mata pelajaran dengan perbandingan satu set untuk setiap peserta didik

</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p11" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">			  
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Menyediakan buku pengayaan dan referensi 
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p12" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Setiap guru tetap bekerja 37,5 jam per minggu di satuan pendidikan, termasuk merencanakan pembelajaran, melaksanakan pembelajaran, menilai hasil pembelajaran, membimbing peserta didik, dan melaksanakan tugas tambahan</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p13" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Satuan pendidikan menyelenggarakan proses pembelajaran selama 34 minggu pertahun dengan kegiatan pembelajaran sebagai berikut :
<li>Kelas IV-VI 27 jam perminggu</li>
<li>Kelas VII-IX 27 jam per minggu</li>
<li>Kelas VII-IX 27 jam per minggu</li>

</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p14" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				  
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Setiap guru yang menerapkan Rencana Pelaksanaan Pembelajaran ( RPP ) yang di susun  berdasarkan silabus untuk setiap mata pelajaran yang diampunya

</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p15" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Setiap guru yang menerapkan Rencana Pelaksanaan Pembelajaran ( RPP ) yang di susun  berdasarkan silabus untuk setiap mata pelajaran yang diampunya
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p16" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Setiap guru mengembangkan dan menerapkan progam penilaian untuk membantu meningkatkan kemampuan belajaran pesertan didik
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p17" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				  
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Kepala sekolah melakukan supervisi kelas dan memeberikan umpan balik kepada guru dua kali dalam setiap semester

</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p18" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				  
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Setiap guru menyampaikan laporan hasil evaluasi mata pelajaran serta hasil penilaian setiap peserta didik kepada kepala sekolah pada akhir semester dalam bentuk laporan hasil prestasi belajaran peserta didik
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p19" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Kepala Sekolah atau Madrasah menyampaikan Laporan hasil Ulangan Akhir Semester (UAS) dan Ulangan Kenaikan Kelas (UKK) serta Ujian Akhir (US/UN) kepada orang tua peserta didik dan menyampaikan rekapitulasinya Kepada Dinas Pendidikan Kabupaten/Kota atau Kantor Kemenang Kab/kota pada setiap akhir semester
</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p20" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				   <div class="form-group row">
                    <label for="lname" class="control-label col-lg-11">
Satuan Pendidikan telah memiliki Rencana Kerja

</label>
                    <div class="col-lg-1">
					
					 <select class="select2 form-control " name="p21" >
							 <option value="1">YA</option> 
							 <option value="0">TIDAK</option>
						
							
               		 </select>
                    </div>
                  </div>
				  <hr style=" border-style:dashed; margin-bottom:5px; margin-top:1px; ">
				  
              <div class="text-center"> <button type="submit" class="btn btn-primary btn-lg">Input SPM</button> <button type="reset" class="btn btn-primary btn-lg">Reset</button> </div>
                 
               
                 
                </form>
                    <!-- Column -->
                </div>
				</div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
			</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include "pages/footer.php"; ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>
</html>