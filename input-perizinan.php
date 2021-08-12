<?php

include "koneksi.php";

if(isset($_POST['submit'])){
    $nama            = $_POST['Nama_mahasiswa'];
    $NIM             = $_POST['NIM'];
    $alamat          = $_POST['Alamat'];
    $notelp          = $_POST['Telp'];
    $judulpenelitian = $_POST['Judul_Penelitian'];
    $pembimbing      = $_POST['Pembimbing'];
    $kalab           = $_POST['Kalab'];
    $k3l             = $_POST['Tim_Fakultas'];
    $laboratorium    = $_POST['Laboratorium'];
    $syarat1         = $_POST['Syrt_1'];
    $syarat2         = $_POST['Syrt_2'];
    $syarat3         = $_POST['Syrt_3'];
    $syarat4         = $_POST['Syrt_4'];
    $syarat5         = $_POST['Syrt_5'];
    $syarat6         = $_POST['Syrt_6'];
    $syarat7         = $_POST['Syrt_7'];
    $syarat8         = $_POST['Syrt_8'];
    $syarat9         = $_POST['Syrt_9'];
    $tglmulai        = $_POST['tgl_mulai'];
    $tglselesai      = $_POST['tgl_selesai'];

    $simpan = "INSERT INTO tb_form_lab VALUES(NULL,'$nama','$NIM','$alamat','$notelp','$judulpenelitian','$pembimbing','$kalab','$k3l','$laboratorium','$syarat1','$syarat2','$syarat3','$syarat4','$syarat5','$syarat6','$syarat7','$syarat8','$syarat9','$tglmulai','$tglselesai',current_timestamp(),'0','0','0','0000-00-00','0000-00-00','0000-00-00')";
    
    $result = mysqli_query($db1,$simpan)or die(mysqli_error($db1));

    if ($result){
        echo "<script type='text/javascript'>window.location='perizinan.php';alert('Data Telah Berhasil Disimpan');</script>";
    }
}

echo "luar";
?>
