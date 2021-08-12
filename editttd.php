<?php
        session_start();
        include_once'navbar.php';
?>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

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
            <h1 class="text-dark">Edit Tanda Tangan</h1>
          </div><!-- /.col -->
      </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<head>
    <title> Edit Tanda Tangan </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<div class="container-fluid">
    <div class="col">
            <div class="form-group">    
            <form action="fileupload.php" enctype="multipart/form-data" method="POST">
                <input type="file" name="file" id="file" class="form-control-file" accept="image/*" onchange="loadFile(event)" required/>
                <img id="output" width=240px height=240px/>
                <br>
                <small>Ukuran File Maksimal 2 MB dan file ektensi .jpg</small>
            </div>
                <input id="Submit" class="btn btn-primary" name="submit" type="submit" value="Submit" />
                
            </form>
    </div>
</div>
