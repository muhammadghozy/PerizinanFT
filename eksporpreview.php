<?php
	//Jika download plugin mpdf tanpa composer (versi lama)
	//define('_MPDF_PATH','mpdf/');
	//include(_MPDF_PATH . "mpdf.php");
	//$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');
	
	//Jika download plugin mpdf dengan composer (versi baru)
	require_once __DIR__ . '/vendor/autoload.php';
	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215.9,355.6]]);
	
	//Menggabungkan dengan file koneksi yang telah kita buat
	include 'koneksi.php';
	
	$nama_dokumen='hasil-ekspor';
	ob_start();
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<style>
	.center {
	text-align: center;
	}
	.center2 {
	margin-left: auto;
	margin-right: auto;
	}
	.left {
	text-align: left;
	}
	.justify{
			text-align:justify;
		}
		.justify:after {
			content: "";
			display: inline-block;
			width: 100%;	
		}
		#tagline {
			height: 80px;
			overflow: hidden;
			line-height: 80px; /* vert-center */
		}
	}
	</style>
	</head>
	<body>

		<p class="center" style="font-family:ctimes; font-size:21.250356px; margin:0px">
				Formulir Pengajuan Akses Bekerja di Laboratorium Selama Masa<br>Pandemi Covid-19
		</p>
		<p class="center" style="font-family:ctimes; font-size:14.60962px;; margin:0px; margin-bottom:10.625178px">
				Peneliti/Praktikan tidak diperkenankan melaksanakan kegiatan di laboratorium dalam lingkungan Fakultas
			<br>
				UNS tanpa mengisi dan menandatangani dokumen ini secara lengkap.
		</p>
		<p style="font-family:ctimes; font-size:15.937767px; margin:0px; margin-bottom:10.625178px">
			<b>
			<u>
				Identitas Peneliti
			</u>
			</b>
		</p>
		<?php
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM tb_form_lab WHERE Id='$id'";
			$dewan1 = $db1->prepare($query);
			$dewan1->execute();
			$res1 = $dewan1->get_result();
			$row = $res1->fetch_assoc();
			$explode=explode("-",$row['tanggal_pengajuan']);
			$month1=date("F", strtotime($row['tanggal_pengajuan']));
			$day1=date("j", strtotime($row['tanggal_pengajuan']));
			$explode4=explode("-",$row['tgl_mulai']);
			$day5=date("j", strtotime($row['tgl_mulai']));
			$explode5=explode("-",$row['tgl_selesai']);
			$day6=date("j", strtotime($row['tgl_selesai']));
		?>
		<div>
			<table border="0" style="font-family:ctimes; font-size:15.937767px; margin=0px">
					<tr>
						<td><p style="font-family:ctimes; font-size:15.937767px; margin:0px; margin-bottom:10.625178px">Nama</p></td>
						<td style="padding:2px">:</td>
						<td style="padding-right:20px"><?php echo $row['Nama_mahasiswa']; ?></td>
					</tr>
					<tr>
						<td>NIP/NIM</td>
						<td style="padding:2px">:</td>
						<td style="padding-right:20px"><?php echo $row['NIM']; ?></td>
					</tr>
					<tr>
						<td style="padding-bottom:20px">Alamat</td>
						<td style="padding-bottom:20px">:</td>
						<td style="padding-right:20px"><?php echo $row['Alamat']; ?></td>
					</tr>
					<tr>
						<td>No.Telp</td>
						<td style="padding:2px">:</td>
						<td style="padding-right:20px"><?php echo $row['Telp']; ?></td>
					</tr>	
					<tr>
						<td>Judul Penelitian</td>
						<td>:</td>
						<td><?php echo $row['Judul_Penelitian']; ?></td>
					</tr>
					<tr>
						<td>Promotor/Pembimbing/PIC</td>
						<td>:</td>
						<td><?php echo $row['Pembimbing']; ?></td>
					</tr>
					<tr>
						<td style="width:170px; line-height:1.5">Laboratorium/lokasi kerja (sebutkan lokasi kerja/ laboratorium lain yang akan dipakai)</td>
						<td style="padding-bottom:74px">:</td>
						<td style="padding-bottom:74px"><?php echo $row['Laboratorium']; ?></td>
					</tr>
			</table>
		<p class="justify" style="font-family:ctimes; font-size:15.937767px; margin:0px; margin-bottom:10.625178px">
			Demi kesehatan dan keselamatan bersama, saya mengerti dan bersedia melaksanakan hal-hal<br>sebagai berikut (jika setuju beri tanda V):
		</p>
		</div>
		
		<div>
			<table border="1" style="border: 1px solid black; border-collapse: collapse; font-family:ctimes; font-size:15.937767px; margin=0px">
					<tbody>
					<tr>
						<td style="padding=2px">1.</td>
						<td>
						<p class="justify">
						Mempelajari, mengerti, dan mematuhi secara sungguh-sungguh Protokol Keselamatan dan Kesehatan Bekerja di Laboratorium dalam Masa Pandemi Covid-19, UNS.
						</P>
						</td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_1']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>	
					<tr>
						<td style="padding=2px">2.</td>
						<td>
						<p class="justify">
						Semua pekerjaan yang bisa diselesaikan secara daring atau dari rumah tetap akan dilaksanakan secara daring dan dilakukan dari rumah.
						</p>
						</td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_2']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>
					<tr>
						<td style="padding=2px">3.</td>
						<td>
						<p class="justify">
						Peneliti yang selama masa tanggap darurat tidak berdomisili di wilayah eks-karesidenan Surakarta akan mentaati aturan dari pemda asal, pemda Surakarta<br>dan peraturan UNS tentang kedatangan kembali mahasiswa ke kampus.
						</p>
						</td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_3']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>
					<tr>
						<td style="padding=2px">4.</td>
						<td>
						<p class="justify">
						Tetap menjaga jarak minimal 2 m, melakukan protokol desinfeksi, dan memakai masker selama berada di Lingkungan fakultas Teknik UNS 
						</p>
						</td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_4']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>	
					<tr>
						<td style="padding=2px">5.</td>
						<td>
						<p class="justify">
						Mentaati aturan pengajuan permohononan izin akses mingguan untuk memasuki wilayah kampus FT-UNS.
						</p>
						</td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_5']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>
					<tr>
						<td style="padding=2px">6.</td>
						<td>
						<p class="justify">
						Selalu merencanakan dan mengisi kegiatan harian sebelum  masuk laboratorium dan melakukan check list kegiatan ketika bekerja di laboratorium.<br><b>Check list digunakan sebagai dasar pemberian izin akses periode berikutnya</b>
						</p>
						</td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_6']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>
					<tr>
						<td style="padding=2px">7.</td>
						<td><p class="justify">Bertanggung jawab untuk menyediakan dan memakai Alat Pelindung Diri (APD) pribadi selama bekerja di dalam laboratorium. APD berupa: masker, face shield atau kacamata (bila kondisi khusus), sarung tangan dan hand sanitizer saku</p></td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_7']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>
					<tr>
						<td style="padding=2px">8.</td>
						<td><p id="tagline" class="justify">Dalam kondisi sehat atau tidak menunjukkan gejala demam/batuk/gejala flu lainnya, dan jika suatu mengalami gejala demam/batuk/gejala flu lainnya dengan penuh kesadaran untuk tidak melakukan kegiatan di laboratorium dan melakukan karantina/istirahat mandiri</p></td>
						<td style="padding-left:30px">
						<?php
						if ($row['Syrt_8']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>
					<tr>
						<td style="padding=2px">9.</td>
						<td><p id="tagline" class="justify">Akan menerima sanksi akademis jika melanggar Protokol Kesehatan, Keselamatan dan Kesehatan Bekerja di Laboratorium selama Masa Pandemi Covid-19, UNS.</p></td>
						<td style="padding-left:30px; width:10%">
						<?php
						if ($row['Syrt_9']==1){ ?>
							<p>V</p>
						<?php	
						}else{
							echo "";
						}
						?>
						</td>
					</tr>
					</tbody>
			</table>	
		</div>	
		<pagebreak/>
		<p class="justify" style="font-family:ctimes; font-size:15.937767px; margin-bottom:10.625178px">
			Dengan ini mengajukan izin akses bekerja/melakukan kegiatan di laboratorium berikut (laboratorium bisa lebih dari 1)
		</p>
		
			<div>
			<table border="1" style="border: 1px solid black; border-collapse: collapse; font-family:ctimes; font-size:15.937767px; margin=0px">
				<thead>
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2" style="width:60%">Laboratorium</th>
						<th colspan="2">Perkiraan Akses(dibuat per minggu)</th>
					</tr>
					<tr>
						<th>Tanggal mulai</th>
						<th>Tanggal selesai</th>
					</tr>				
				</thead>
				<tbody>
					<tr>
						<td style="padding=2px">1.</td>
						<td>
						<p class="justify">
						<?php
							echo $row['Laboratorium'];
						?>
						</P>
						</td>
						<td class="center"><?php echo  $day5."-".$explode4[1]."-".$explode4[0]; ?></td>
						<td class="center"><?php echo  $day6."-".$explode5[1]."-".$explode5[0]; ?></td>
					</tr>				
			</table>	
		</div>	
		
		<p style="text-align: right; font-family:ctimes; font-size:15.937767px; margin-bottom:10.625178px">
				Surakarta, <?php echo $day1." ".$month1." ".$explode[0];?>
			<br>
			<img src="upload/ACC/<?php echo $row['Nama_mahasiswa'];?>.jpg" width="145" height="60">
			<br>
				(<?php echo $row['Nama_mahasiswa']; ?>)
		</p>

		<p style="text-align: center; font-family:ctimes; font-size:15.937767px; margin-bottom:10.625178px">
			<b>
				LEMBAR PERSETUJUAN
			</b>
		</p>

		<div>
			<table class="center2" border="1" style="border: 1px solid black; border-collapse: collapse; font-family:ctimes; font-size:15.937767px; margin=0px">
				<thead>
					<tr>
						<th style="width:150px">Nama<br>Jabatan</th>
						<th style="width:200px">Nama</th>
						<th style="width:150px">Tanggal</th>
						<th style="width:180px">Tanda<br>Tangan</th>
					</tr>				
				</thead>
				<tbody>
					<tr>
						<td style="padding=2px">1. Kalab</td>
						<td class="center">
						<?php echo  $row['Kalab']; ?>
						</td>
						<td>
						</td>
						<td style="text-align: center;"></td>
					</tr>	
					<tr>
						<td style="padding=2px">2. Pembimbing</td>
						<td class="center" style="padding=5px">
						<?php echo  $row['Pembimbing']; ?>
						</td>
						<td class="center" style="padding=5px">
						</td>
						<td style="text-align: center;"></td>
					</tr>
					<tr>
						<td style="padding=2px">3. Tim K3L/Fakultas</td>
						<td class="center">
						<?php echo  $row['Tim_Fakultas']; ?>
						</td>
						<td class="center" style="padding=5px">
						</td>
						<td style="text-align: center;"></td>
					</tr>
				</tbody>			
			</table>	
		</div>
	<?php
		}
	?>
	</body>
	</html>
	<?php
	$html = ob_get_contents();
	ob_end_clean();
	
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
	$db1->close();
	?>
