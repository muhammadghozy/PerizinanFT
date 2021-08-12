<?php
  include 'koneksi.php';
  session_start();
  include_once'navbar.php';
  
  $cek_user = mysqli_query($db1, "SELECT * FROM tuser WHERE nim = '".$_SESSION['nim']."'");
  $user_valid = mysqli_fetch_array($cek_user);
  $_SESSION['nama'] = $user_valid['nama'];
  $_SESSION['nim'] = $user_valid['nim'];
  $_SESSION['email'] = $user_valid['email'];
	?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block"> </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="profile.php" role="button"><i class="fa far fa-user mt-1"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="d-block bg-white">
          <div class="col">
            <h1 class="text-dark">Profile</h1>
          </div><!-- /.col -->
      </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<head>
    <title> Profile </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<script>
var check = function() {
  if (document.getElementById('Password_Baru').value ==
    document.getElementById('Konfirmasi_Password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>

  <div class="container-fluid">
    <div class="d-block bg-white">
    <div class="col">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="Nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $_SESSION['nama'];?>"  readonly/>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Masukkan Email Student" value="<?php if($_SESSION['email']==''){echo 'Anda Belum Memasukkan Email';}else{echo $_SESSION['email'];}?>" readonly>
          </div>
          <div class="form-group">
            <label>NIM/NIP</label>
            <input type="text" name="NIM" class="form-control" placeholder="Masukkan NIM" value="<?php echo $_SESSION['nim']; ?>" readonly/>
          </div>
        <a href="editprofile.php">
          <button type="submit" class="btn btn-primary" name="submit">Edit</button>
        </a>
    </div>

    <br>
    <div class="d-block bg-white">
        <div class="col">
    <?php
            if(file_exists("upload/ACC/" . $_SESSION['nama'].".jpg")){
    ?>
            <img src="upload/ACC/<?php echo $_SESSION['nama'];?>.jpg" width=240px height=240px>
    <?php
            }else{
                echo "Belum Upload Tanda Tangan";
            }
    ?>
    <br>
    <a href="editttd.php">
        <button class="btn btn-primary">Edit</button>
    </a>
    </div>
    </div>
    
    </div>
        <br>
    <div class="d-block bg-white">
    <div class="col">
        <div class="form-group">
          <label>Password Anda</label>
          <input type="password" name="password" class="form-control" value="<?php echo $_SESSION['password']; ?>" readonly/>
        </div>
    <a href="editpass.php">
        <button class="btn btn-primary">Edit</button>
    </a>
    </div>
    </div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
