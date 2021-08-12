<?php
session_start();
include "koneksi.php";

if(isset($POST['submit'])){
    $pass   = sha1($_POST['Password_Baru']);

    $simpan = "UPDATE tuser SET password='$pass' WHERE id='".$_SESSION['id']."'"; 

    $result = mysqli_query($db1,$simpan);

    if ($result){
        echo "<script type='text/javascript'>alert('Password Telah Berhasil Diganti');window.location='profile.php'</script>";
    }

echo"luar";
?>