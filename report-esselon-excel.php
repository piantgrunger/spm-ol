<?php
include "asset/include/koneksi.php";
include "asset/include/session_admin.php";
//include("cek_session.php");
$localtime				= date("d-m-Y, g:i a"); 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class="row-fluid">
      <div class="span12">
	  <button class="btn btn-primary" id="tombolExport">
					  <h2>Klik disini  </h2>
					  </button>
	  <h1> LAPORAN PEJABAT <?PHP echo $look_esselon1; ?>
	  <BR />
	  PEMERINTAH KOTA BANJARBARU
	  </h1>
	  	<?php
   		include "asset/content/laporan-esselon-excel.php";
   		?>
	  </div>
</div>

<script src="js/jquery-2.0.1.min.js"></script>
<script src="js/jquery.base64.js"></script>
<script src="js/jquery.btechco.excelexport.js"></script>
	<script>
            $(document).ready(function () {
                $("#tombolExport").click(function () {
                    $("#tabelExport").btechco_excelexport({
                        containerid: "tabelExport"
                       , datatype: $datatype.Table
                    });
                });
            });
	</script>



</body>
</html>
