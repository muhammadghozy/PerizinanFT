<?php
session_start();
include "koneksi.php";

// if(isset($POST['submit'])){
    $nama         = $_POST['Nama_mahasiswa'];
    $email        = $_POST['Email'];
    $NIM          = $_POST['NIM'];
    
    $simpan = "UPDATE tuser SET nama='$nama',nim='$NIM',email='$email' WHERE id='".$_SESSION['id']."'"; 

    $result = mysqli_query($db1,$simpan);

    if ($result){
        echo "<script type='text/javascript'>alert('Profil Telah Berhasil Diperbarui');window.location='perizinan.php'</script>";
    }
// }
echo"luar";
?>