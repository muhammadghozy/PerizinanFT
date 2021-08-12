<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama']);
unset($_SESSION['level']);

session_destroy();
echo "<script>document.location='index.php'</script>";
