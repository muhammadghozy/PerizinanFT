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
            <h1 class="text-dark">Profile</h1>
          </div><!-- /.col -->
      </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<head>
    <title> Edit Password </title>
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

  var code = document.getElementById("Password_Baru");

  var strengthbar = document.getElementById("meter");
  var display = document.getElementsByClassName("textbox")[0];

code.addEventListener("keyup", function() {
  checkpassword(code.value);
});

function checkpassword(password) {
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[$@#&!%^&*(){}?]+/)) {
    strength += 1;
  }

  if (password.length < 6) {
    display.innerHTML = "minimum number of characters is 6";
  }

  if (password.length > 12) {
    display.innerHTML = "maximum number of characters is 12";
  }

  switch (strength) {
    case 0:
      strengthbar.value = 0;
      break;

    case 1:
      strengthbar.value = 25;
      break;

    case 2:
      strengthbar.value = 50;
      break;

    case 3:
      strengthbar.value = 75;
      break;

    case 4:
      strengthbar.value = 100;
      break;
  }
}

}
</script>
<span id='p'></span>
<div class="container-fluid">
<div class="d-block bg-white">
    <div class="col">
    <form action="proseseditpass.php" method="POST">
        <div class="form-group">
          <label>Password Lama</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Lama" required/>
        </div>
        <div class="form-group">
          <label>Password Baru</label>
          <input type="password" name="Password_Baru" id="Password_Baru" class="form-control" onkeyup='check();' placeholder="Masukkan Password Baru" required/>
          <progress class="progress-bar bg-warning" max="100" value="0" id="meter"></progress>
          <div class="textbox"></div>
        </div>
        <div class="form-group">
          <label>Konfirmasi Password Baru</label>
          <input type="password" name="Konfirmasi_Password" id="Konfirmasi_Password" class="form-control" onkeyup='check();' placeholder="Konfirmasi Password Baru" required/>
          <span id='message'></span>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>
</div>
</div>
<div class="container-fluid">

        </div> 
