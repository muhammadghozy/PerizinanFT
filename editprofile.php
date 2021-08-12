<?php
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
      <div class="d-block bg-white">
          <div class="col">
            <h1 class="text-dark">Edit Profile</h1>
          </div><!-- /.col -->
      </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<head>
    <title> Edit Profile </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<div class="container-fluid">
    <div class="d-block bg-white">
    <div class="col">
      <form action="proseseditprofile.php" method="POST">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="Nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Lengkap" required/>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="Email" class="form-control" placeholder="Masukkan Email Student" required/>
          </div>
          <div class="form-group">
            <label>NIM/NIP</label>
            <input type="text" name="NIM" class="form-control" placeholder="Masukkan NIM/NIP" required/>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
