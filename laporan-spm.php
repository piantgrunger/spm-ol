 <?php
			  
			 								//tampil
											$no 		= 1;
											$sql_bro 	= "SELECT * FROM spm where id_periode ='$periode' and tahun='$tahun'" ;
											$sql_01		= mysqli_query ($conn,$sql_bro);
											$jml_sekolah		= mysqli_num_rows($sql_01);
											//echo $query_esselon;
											if ($jml_sekolah	== 0)
											{
											?>
											 <div class="col-md-12">
											<div class="alert alert-info col-md-12 col-sm-12  alert-icon alert-dismissible fade in" role="alert">
											 <div class="col-md-1 col-sm-1 icon-wrapper text-center">
											  <span class="fa fa-info fa-2x"></span></div>
											  <div class="col-md-11 col-sm-11">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">�</span></button>
												<p><strong>Info!</strong> Belum Ada Pegawai yang dimasukkan</p>
											  </div>
											</div>
										  </div>

											<?
											}
											else
											{
											?>
            
						
<table width="100%" border="1">
   <thead>
   <tr>
    <td align="center" valign="middle" width="2%" rowspan="2">NO</td>
    <td align="center" valign="middle" width="20%" rowspan="2">SEKOLAH</td>
    <td align="center" colspan="21">INDIKATOR SPM </td>
    <td align="center" valign="middle" width="10%" rowspan="2">JUMLAH</td>
    <td align="center" valign="middle" width="10%" rowspan="2">%</td>
  </tr>
  
  <tr>
    <td align="center" width="2%">1</td>
    <td align="center" width="2%">2</td>
    <td align="center" width="2%">3</td>
    <td align="center" width="2%">4</td>
    <td align="center" width="2%">5</td>
    <td align="center" width="2%">6</td>
    <td align="center" width="2%">7</td>
    <td align="center" width="2%">8</td>
    <td align="center" width="2%">9</td>
    <td align="center" width="2%">10</td>
    <td align="center" width="2%">11</td>
    <td align="center" width="2%">12</td>
    <td align="center" width="2%">13</td>
    <td align="center" width="2%">14</td>
    <td align="center" width="2%">15</td>
    <td align="center" width="2%">16</td>
    <td align="center" width="2%">17</td>
    <td align="center" width="2%">18</td>
    <td align="center" width="2%">19</td>
    <td align="center" width="2%">20</td>
    <td align="center" width="2%">21</td>
    </tr>
	</thead>
	
	 <tbody>
					  
					<?php
			  
			
			  								while($data_bro =  mysqli_fetch_array($sql_01))
											{

			  									$id_spm				= $data_bro['id_spm'];
												$id_sekolah			= $data_bro['id_sekolah'];
												$id_periode			= $data_bro['id_periode'];
												$tahun				= $data_bro['tahun'];		
												$q1					= $data_bro['q1'];
												$q2					= $data_bro['q2'];
												$q3					= $data_bro['q3'];
												$q4					= $data_bro['q4'];
												$q5					= $data_bro['q5'];
												$q6					= $data_bro['q6'];
												$q7					= $data_bro['q7'];
												$q8					= $data_bro['q8'];
												$q9					= $data_bro['q9'];
												$q10				= $data_bro['q10'];
												$q11				= $data_bro['q11'];
												$q12				= $data_bro['q12'];
												$q13				= $data_bro['q13'];
												$q14				= $data_bro['q14'];
												$q15				= $data_bro['q15'];
												$q16				= $data_bro['q16'];
												$q17				= $data_bro['q17'];
												$q18				= $data_bro['q18'];
												$q19				= $data_bro['q19'];
												$q20				= $data_bro['q20'];
												$q21				= $data_bro['q21'];
												$unix				= $data_bro['unix'];
												
												$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q20 + $q21;
												$persen = $total/21 *100;
			  								?>
											<?
											$sql_bro11 	="select * from sekolah where id_sekolah= $id_sekolah ";
											$sql_011	= mysqli_query ($conn,$sql_bro11);
											$data_bro1	= mysqli_fetch_array($sql_011);
											$nama_s			= $data_bro1['sekolah'];
											
											?>
											
											<?php
											 $query_esselon 	= "SELECT COUNT(q1) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql				= mysqli_query ($conn,$query_esselon);
											 $data_bro 			=  mysqli_fetch_array($sql);
											 $tot_q1			= $data_bro['0'];
											 $persen_1			= $tot_q1 / $jml_sekolah *100;
											 ?>
											 <?php
											 $query_esselon_2 	= "SELECT COUNT(q2) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_2				= mysqli_query ($conn,$query_esselon_2);
											 $data_bro_2 		=  mysqli_fetch_array($sql_2);
											 $tot_q_2			= $data_bro_2['0'];
											 $persen_2			= $tot_q_2 / $jml_sekolah *100;
											 
											 ?>
											 <?php
											 $query_esselon_3 	= "SELECT COUNT(q3) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_3				= mysqli_query ($conn,$query_esselon_3);
											 $data_bro_3 		=  mysqli_fetch_array($sql_3);
											 $tot_q_3			= $data_bro_3['0'];
											 $persen_3			= $tot_q_3 / $jml_sekolah *100;
											 ?>
											 <?php
											 $query_esselon_4 	= "SELECT COUNT(q4) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_4				= mysqli_query ($conn,$query_esselon_4);
											 $data_bro_4 		=  mysqli_fetch_array($sql_4);
											 $tot_q_4			= $data_bro_4['0'];
											 $persen_4			= $tot_q_4 / $jml_sekolah *100;
											 
											 ?>
											 <?php
											 $query_esselon_5 	= "SELECT COUNT(q5) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_5				= mysqli_query ($conn,$query_esselon_5);
											 $data_bro_5 		=  mysqli_fetch_array($sql_5);
											 $tot_q_5			= $data_bro_5['0'];
											 $persen_5			= $tot_q_5 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_6 	= "SELECT COUNT(q6) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_6				= mysqli_query ($conn,$query_esselon_6);
											 $data_bro_6 		=  mysqli_fetch_array($sql_6);
											 $tot_q_6			= $data_bro_6['0'];
											 $persen_6			= $tot_q_6 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_7 	= "SELECT COUNT(q7) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_7				= mysqli_query ($conn,$query_esselon_7);
											 $data_bro_7 		=  mysqli_fetch_array($sql_7);
											 $tot_q_7			= $data_bro_7['0'];
											 $persen_7			= $tot_q_7 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_8 	= "SELECT COUNT(q8) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_8				= mysqli_query ($conn,$query_esselon_8);
											 $data_bro_8 		=  mysqli_fetch_array($sql_8);
											 $tot_q_8			= $data_bro_8['0'];
											 $persen_8			= $tot_q_8 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_9 	= "SELECT COUNT(q9) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_9				= mysqli_query ($conn,$query_esselon_9);
											 $data_bro_9 		=  mysqli_fetch_array($sql_9);
											 $tot_q_9			= $data_bro_9['0'];
											 $persen_9			= $tot_q_9 / $jml_sekolah *100;
											 
											 ?>
											 <?php
											 $query_esselon_10 	= "SELECT COUNT(q10) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_10				= mysqli_query ($conn,$query_esselon_10);
											 $data_bro_10 		=  mysqli_fetch_array($sql_10);
											 $tot_q_10			= $data_bro_10['0'];
											 $persen_10			= $tot_q_10 / $jml_sekolah *100;
											 
											 ?>
											 <?php
											 $query_esselon_11 	= "SELECT COUNT(q11) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_11				= mysqli_query ($conn,$query_esselon_11);
											 $data_bro_11 		=  mysqli_fetch_array($sql_11);
											 $tot_q_11			= $data_bro_11['0'];
											 $persen_11			= $tot_q_11 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_12 	= "SELECT COUNT(q12) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_12				= mysqli_query ($conn,$query_esselon_12);
											 $data_bro_12 		=  mysqli_fetch_array($sql_12);
											 $tot_q_12			= $data_bro_12['0'];
											 $persen_12			= $tot_q_12 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_13 	= "SELECT COUNT(q13) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_13				= mysqli_query ($conn,$query_esselon_13);
											 $data_bro_13 		=  mysqli_fetch_array($sql_13);
											 $tot_q_13			= $data_bro_13['0'];
											 $persen_13			= $tot_q_13 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_14 	= "SELECT COUNT(q14) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_14				= mysqli_query ($conn,$query_esselon_14);
											 $data_bro_14 		=  mysqli_fetch_array($sql_14);
											 $tot_q_14			= $data_bro_14['0'];
											 $persen_14			= $tot_q_14 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_15 	= "SELECT COUNT(q15) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_15				= mysqli_query ($conn,$query_esselon_15);
											 $data_bro_15 		=  mysqli_fetch_array($sql_15);
											 $tot_q_15			= $data_bro_15['0'];
											 $persen_15			= $tot_q_15 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_16 	= "SELECT COUNT(q16) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_16				= mysqli_query ($conn,$query_esselon_16);
											 $data_bro_16 		=  mysqli_fetch_array($sql_16);
											 $tot_q_16			= $data_bro_16['0'];
											 $persen_16			= $tot_q_16 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_17 	= "SELECT COUNT(q17) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_17				= mysqli_query ($conn,$query_esselon_17);
											 $data_bro_17 		=  mysqli_fetch_array($sql_17);
											 $tot_q_17			= $data_bro_17['0'];
											 $persen_17			= $tot_q_17 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_18 	= "SELECT COUNT(q18) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_18				= mysqli_query ($conn,$query_esselon_18);
											 $data_bro_18 		=  mysqli_fetch_array($sql_18);
											 $tot_q_18			= $data_bro_18['0'];
											 $persen_18			= $tot_q_18 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_19 	= "SELECT COUNT(q19) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_19				= mysqli_query ($conn,$query_esselon_19);
											 $data_bro_19 		=  mysqli_fetch_array($sql_19);
											 $tot_q_19			= $data_bro_19['0'];
											 $persen_19			= $tot_q_19 / $jml_sekolah *100;
											 
											 ?>
											 
											 <?php
											 $query_esselon_20 	= "SELECT COUNT(q20) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_20				= mysqli_query ($conn,$query_esselon_20);
											 $data_bro_20 		=  mysqli_fetch_array($sql_20);
											 $tot_q_20			= $data_bro_20['0'];
											 $persen_20			= $tot_q_20 / $jml_sekolah *100;
											 
											 ?>
											 <?php
											 $query_esselon_21 	= "SELECT COUNT(q21) FROM spm where id_periode ='$periode' and tahun='$tahun'";
											 $sql_21				= mysqli_query ($conn,$query_esselon_21);
											 $data_bro_21 		=  mysqli_fetch_array($sql_21);
											 $tot_q_21			= $data_bro_21['0'];
											 $persen_21			= $tot_q_21 / $jml_sekolah *100;
											 
											 ?>







			









											 


	
	
	
	
  <tr>
    <td align="center" valign="middle"><?php echo $no++;?></td>
    <td align="center" valign="middle"><?php echo $nama_s;?></td>
    <td align="center"><?php echo $q1;?></td>
    <td align="center"><?php echo $q2;?></td>
    <td align="center"><?php echo $q3;?></td>
   <td align="center"><?php echo $q4;?></td>
    <td align="center"><?php echo $q5;?></td>
    <td align="center"><?php echo $q6;?></td>
  <td align="center"><?php echo $q7;?></td>
    <td align="center"><?php echo $q8;?></td>
    <td align="center"><?php echo $q9;?></td>
     <td align="center"><?php echo $q10;?></td>
    <td align="center"><?php echo $q11;?></td>
    <td align="center"><?php echo $q12;?></td>
     <td align="center"><?php echo $q13;?></td>
    <td align="center"><?php echo $q14;?></td>
    <td align="center"><?php echo $q15;?></td>
    <td align="center"><?php echo $q16;?></td>
    <td align="center"><?php echo $q17;?></td>
    <td align="center"><?php echo $q18;?></td>
    <td align="center"><?php echo $q19;?></td>
    <td align="center"><?php echo $q20;?></td>
    <td align="center"><?php echo $q21;?></td>
    <td align="center" valign="middle"><?php echo $total;?></td>
    <td align="center" valign="middle"><?php echo $persen;?></td>
  </tr>
  
  							<?php
                       			}
                        	?>
							<tr>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">JUMLAH</td>
    <td align="center"><?php echo $tot_q1;?></td>
    <td align="center"><?php echo $tot_q_2;?></td>
    <td align="center"><?php echo $tot_q_3;?></td>
    <td align="center"><?php echo $tot_q_4;?></td>
    <td align="center"><?php echo $tot_q_5;?></td>
    <td align="center"><?php echo $tot_q_6;?></td>
    <td align="center"><?php echo $tot_q_7;?></td>
    <td align="center"><?php echo $tot_q_8;?></td>
    <td align="center"><?php echo $tot_q_9;?></td>
    <td align="center"><?php echo $tot_q_10;?></td>
    <td align="center"><?php echo $tot_q_11;?></td>
    <td align="center"><?php echo $tot_q_12;?></td>
    <td align="center"><?php echo $tot_q_13;?></td>
    <td align="center"><?php echo $tot_q_14;?></td>
    <td align="center"><?php echo $tot_q_15;?></td>
    <td align="center"><?php echo $tot_q_16;?></td>
    <td align="center"><?php echo $tot_q_17;?></td>
    <td align="center"><?php echo $tot_q_18;?></td>
    <td align="center"><?php echo $tot_q_19;?></td>
    <td align="center"><?php echo $tot_q_20;?></td>
    <td align="center"><?php echo $tot_q_21;?></td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
							<tr>
							  <td align="center" valign="middle">&nbsp;</td>
							  <td align="center" valign="middle">%</td>
							  <td align="center"><?php echo $persen_1;?></td>
							  <td align="center"><?php echo $persen_2;?></td>
							  <td align="center"><?php echo $persen_3;?></td>
							  <td align="center"><?php echo $persen_4;?></td>
							  <td align="center"><?php echo $persen_5;?></td>
							  <td align="center"><?php echo $persen_6;?></td>
							  <td align="center"><?php echo $persen_7;?></td>
							  <td align="center"><?php echo $persen_8;?></td>
							  <td align="center"><?php echo $persen_9;?></td>
							  <td align="center"><?php echo $persen_10;?></td>
							  <td align="center"><?php echo $persen_11;?></td>
							  <td align="center"><?php echo $persen_12;?></td>
							  <td align="center"><?php echo $persen_13;?></td>
							  <td align="center"><?php echo $persen_14;?></td>
							  <td align="center"><?php echo $persen_15;?></td>
							  <td align="center"><?php echo $persen_16;?></td>
							  <td align="center"><?php echo $persen_17;?></td>
							  <td align="center"><?php echo $persen_18;?></td>
							  <td align="center"><?php echo $persen_19;?></td>
							  <td align="center"><?php echo $persen_20;?></td>
							  <td align="center"><?php echo $persen_21;?></td>
							  <td align="center" valign="middle">&nbsp;</td>
							  <td align="center" valign="middle">&nbsp;</td>
	   </tr>
                      </tbody>
</table>
<?php
                       			}
                        	?>