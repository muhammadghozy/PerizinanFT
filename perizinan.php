
<?php
 	include 'koneksi.php';
	session_start();
	include_once'navbar.php';
  
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Perizinan </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Form Perizinan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<head>
    <title> Form Perizinan </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

  <div class="container-fluid">
    <form action="input-perizinan.php" method="post">
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="Nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $_SESSION['nama'];?>"  readonly/>
      </div>
      <div class="form-group">
        <label>NIM</label>
        <input type="text" name="NIM" class="form-control" placeholder="Masukkan NIM" value="<?php echo $_SESSION['nim']; ?>" readonly/>
      </div>
      <div class="form-group">
        <label>Alamat Lengkap</label>
        <input type="text" name="Alamat" class="form-control" placeholder="Masukkan Alamat Lengkap" required/>
      </div>
      <div class="form-group">
        <label>No Telpon</label>
        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="Telp" class="form-control" placeholder="Masukkan Nomor Telpon" required/>
      </div>
      <div class="form-group">
        <label>Judul Penelitian</label>
        <input type="text" name="Judul_Penelitian" class="form-control" placeholder="Masukkan Judul penelitian" required/>
      </div>
      <div class="form-group">
        <label>Promotor/Pembimbing/PIC</label>
        <select class="form-control" name="Pembimbing" required> 
        <?php
            $query = "SELECT * FROM tuser WHERE LENGTH(nim)>10";
            $dewan1 = $db1->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
            if ($res1->num_rows > 0) {
              while ($row = $res1->fetch_assoc()) { 
        ?>
                <option value="<?php echo $row['nama']?>"><?php echo $row['nama']; ?></option>
        <?php
          }
        }
        ?>
        </select>
      </div>
      <div class="form-group">
        <label>Kepala Laboratorium</label>
        <select class="form-control" name="Kalab" required>  
        <?php
            $query = "SELECT * FROM tuser WHERE LENGTH(nim)>10";
            $dewan1 = $db1->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
            if ($res1->num_rows > 0) {
              while ($row = $res1->fetch_assoc()) { 
        ?>
                <option value="<?php echo $row['nama']?>"><?php echo $row['nama']; ?></option>
        <?php
          }
        }
        ?>
        </select>
      </div>
      <div class="form-group">
        <label>Tim K3L</label>
        <select class="form-control" name="Tim_Fakultas" required> 
        <?php
            $query = "SELECT * FROM tuser WHERE LENGTH(nim)>10";
            $dewan1 = $db1->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
            if ($res1->num_rows > 0) {
              while ($row = $res1->fetch_assoc()) { 
        ?>
                <option value="<?php echo $row['nama']?>"><?php echo $row['nama']; ?></option>
        <?php
          }
        }
        ?>
        </select>
      </div>
      <div class="form-group">
        <label>Laboratorium</label>
        <select class="form-control" name="Laboratorium" required>
          <option value="Teknik Elektro">Teknik Elektro</option>
          <option value="Teknik Mesin">Teknik Mesin</option>
          <option value="Teknik Industri">Teknik Industri</option>
          <option value="Teknik Kimia">Teknik Kimia</option>
          <option value="Teknik Arsitektur">Teknik Arsitektur</option>
          <option value="Teknik PWK">Teknik PWK</option>
          <option value="Teknik Sipil">Teknik Sipil</option>
        </select>
      </div>
  <div class="container-fluid">
    <h2>Bersedia melaksanakan hal-hal sebagai berikut :</h2>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
              <th scope="col">Syarat</th>
              <th scope="col">Setuju</th>
              <th scope="col">Tidak Setuju</th>
          </tr>
        <thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td>Mempelajari, mengerti, dan mematuhi secara sungguh-sungguh Protokol Keselamatan dan Kesehatan Bekerja di Laboratorium dalam Masa Pandemi Covid-19, UNS.</td>
            <td><input type="radio" name="Syrt_1" value="1" required></td>
            <td><input type="radio" name="Syrt_1" value="0" required></td>
          </tr>
          <tr>
            <td scope="row">2</td>
            <td>Semua pekerjaan yang bisa diselesaikan secara daring atau dari rumah tetap akan dilaksanakan secara daring dan dilakukan dari rumah.</td>
            <td><input type="radio" name="Syrt_2" value="1" required></td>
            <td><input type="radio" name="Syrt_2" value="0" required></td>
          </tr>
          <tr>
            <td scope="row">3</td>
            <td>Peneliti yang selama masa tanggap darurat tidak berdomisili di wilayah eks-karesidenan Surakarta akan mentaati aturan dari pemda asal, pemda Surakarta dan peraturan UNS tentang kedatangan kembali mahasiswa ke kampus.</td>
            <td><input type="radio" name="Syrt_3" value="1" required></td>
            <td><input type="radio" name="Syrt_3" value="0" required></td>
          </tr>
          <tr>
            <td scope="row">4</td>
            <td>Tetap menjaga jarak minimal 2 m, melakukan protokol desinfeksi, dan memakai masker selama berada di Lingkungan fakultas Teknik UNS.</td>
            <td><input type="radio" name="Syrt_4" value="1" required></td>
            <td><input type="radio" name="Syrt_4" value="0" required></td>
          </tr>
          <tr>
            <td scope="row">5</td>
            <td>Mentaati aturan pengajuan permohononan izin akses mingguan untuk memasuki wilayah kampus FT-UNS.</td>
            <td><input type="radio" name="Syrt_5" value="1" required></td>
            <td><input type="radio" name="Syrt_5" value="0" required></td>
          </tr>
          <tr>
          <td scope="row">6</td>
            <td>Selalu merencanakan dan mengisi kegiatan harian sebelum  masuk laboratorium dan melakukan check list kegiatan ketika  bekerja  di laboratorium.</td>
            <td><input type="radio" name="Syrt_6" value="1" required></td>
            <td><input type="radio" name="Syrt_6" value="0" required></td>
          </tr>
          <tr>
            <td scope="row">7</td>
            <td>Bertanggung jawab untuk menyediakan dan memakai Alat Pelindung Diri (APD) pribadi selama bekerja di dalam laboratorium. APD berupa: masker, face shield atau kacamata (bila kondisi khusus), sarung tangan dan hand sanitizer saku.</td>
            <td><input type="radio" name="Syrt_7" value="1" required></td>
            <td><input type="radio" name="Syrt_7" value="0" required></td>
          </tr>
          <tr>
            <td scope="row">8</td>
            <td>Dalam kondisi sehat atau tidak menunjukkan gejala demam/batuk/gejala flu lainnya, dan jika suatu mengalami gejala demam/batuk/gejala flu lainnya dengan penuh kesadaran untuk tidak melakukan kegiatan di laboratorium dan melakukan karantina/istirahat mandiri.</td>
            <td><input type="radio" name="Syrt_8" value="1" required></td>
            <td><input type="radio" name="Syrt_8" value="0" required></td>
          </tr>
          <tr>
            <td scope="row">9</td>
            <td>Akan menerima sanksi akademis jika melanggar Protokol Kesehatan, Keselamatan dan Kesehatan Bekerja di Laboratorium selama Masa Pandemi Covid-19, UNS.</td>
            <td><input type="radio" name="Syrt_9" value="1" required></td>
            <td><input type="radio" name="Syrt_9" value="0" required></td>
          </tr>
        </tbody>
      </table>
  </div>
  <table class="table table-head-fixed text-nowrap text-center">
    <thead>
    <tr>
      <th>Tanggal Mulai</th>
      <th>Tanggal Selesai</th>
    </tr>
    <tr>
      <th><input type="date" class="form-control" name="tgl_mulai" required></th>
      <th><input type="date" class="form-control" name="tgl_selesai" required></th>
    </tr>
    </thead>
	</table>

  <button type="submit" class="btn btn-primary" name="submit">Ajukan</button>
  <br>
  <br>
  </br>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->        <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




		<!-- Footer -->
<footer class="site-footer bg-dark"> 
	
        <div class="container">
          
          <div class="row">  
              
            <div class="col-md-4">
              <img src="https://spada.uns.ac.id/pluginfile.php/2/course/section/1/uns.png" style="width: 40%; padding-center: 2em;" alt="">      
              <h3 class="footer-heading text-blue" >Fakultas Teknik UNS</h3>
              <p >Jl. Ir. Sutami No.36 A Surakarta 57126 <br>            
              Telp (+62)77358350233 <br>
              Fax (+62)77358350233 <br>
              Email : ft@ft-uns.com </p>
            </div>
  
            <div class="col-md-4">            
              <h3 class="footer-heading text-light">Program Studi</h3>                                    
              <a href="https://arsitektur.ft.uns.ac.id/" target='_blank'>Arsitektur</a> <br>
              <a href="https://sipil.ft.uns.ac.id/?lang=id" target='_blank'>Teknik Sipil</a> <br>
              <a href="https://mesin.ft.uns.ac.id/" target='_blank'>Teknik Mesin</a> <br>
              <a href="http://industri.ft.uns.ac.id/" target='_blank'>Teknik Industri</a> <br>
              <a href="https://che.ft.uns.ac.id/" target='_blank'>Teknik Kimia</a> <br>
              <a href="https://elektro.ft.uns.ac.id/" target='_blank'>Teknik Elektro</a> <br>
              <a href="https://pwk.ft.uns.ac.id/" target='_blank'>Perencanaan Wilayah dan Kota</a> <br>                                            
            </div>          
          
            <div class="col-md-3">
              <div class="col-md-12">
                <h3 class="footer-heading text-light">Maps</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120699070088!2d110.85154081477673!3d-7.5618169945466365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20Uns!5e0!3m2!1sen!2sid!4v1619534477026!5m2!1sen!2sid" style="max-width:300; max-height:200" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    <!-- /.content-header -->
</footer>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->          </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->        <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<footer class="main-footer bg-dark">
    
    SISTEM PENDUKUNG KEPUTUSAN
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
</footer>
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
