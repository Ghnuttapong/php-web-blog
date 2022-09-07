<?php
    session_start();
    include "../../functions/auth.php";

    if(isset($_POST['auth-btn-login'])) {
     $username = $_POST['username'];
     $password = md5($_POST['password']);
     $model = new Auth();
     $user = $model->login($username, $password);
     if(!empty($user)){
          $msg_suc = "Logined Successfully";
          $_SESSION['username'] = $user['username'];
          $_SESSION['profile-picture'] = $user['picture'];
          $_SESSION['fullname'] = $user['fullname'];
          $_SESSION['password'] = $user['password'];
          header('refresh:2, url = ../index.php');
          die();
     }else {
          $msg_err = 'Username Invalid';
     }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GFP | Login</title>
  <link rel="icon" type="image/png" href=".//" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <p>
        <img src="../../assets/brand/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" width="80" height="80" style="opacity: .8">
        <b>Administrator
      </p>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <?php if(isset($msg_err)) { ?>
            <p class="login-box-msg text-danger"><?php echo $msg_err ?></p>
        <?php }elseif(isset($msg_suc)) { ?>
            <p class="login-box-msg text-success"><?php echo $msg_suc ?></p>
          <?php }else{ ?>
            <p class="login-box-msg">Sign in to start your session</p>
          <?php } ?>
        <form action=""  method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" require class="form-control" placeholder="Username" id="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" require id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-6">
              <input type="submit" name="auth-btn-login" value="Sign In" class="btn btn-primary btn-block swalDefaultSuccess"> 
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
  <script>
    $(document).ready(function() {

      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });



    })
  </script>
</body>

</html>