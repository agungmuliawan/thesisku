<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SIKU- Sistem Informasi Keuangan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
#background1 {
    /*background-image: url('assets/logo.jpg');*/
    /*background-image: url('logo.jpg');*/
        /*background-image: url('../login_bg.jpg');
        background-size: cover;
        background-size: 1600px;
        background-position: right;*/

        /*width: 300px;
        height: 300px;*/
        /* background-attachment: fixed;*/
        /*height: 600px;
        width: 800px;*/
        position: relative;
        z-index: 0;
    }

    #background1 {
     
     background: url("assets/img/hotel.jpg") no-repeat center center fixed;
     content: "";
     opacity: 0.8;
     position: fixed;
     top: 0;
     bottom: 0;
     right: 0;
     left: 0;
     z-index: -1;
     background-size: cover;
     background-position: right;

 }
</style>
<br>
<body id="background1">
    <div class="login-box">
      <div class="login-logo" style="color:black">
        <b><strong><h2><b>Sistem Rekomendasi</b> Hotel</h2></strong></b>
    </div><!-- /.login-logo -->
    <div class="login-box-body">

        <!-- <center><img src="<?php echo base_url('assets/img/logo_umsida.jpg') ?>" width="50%" height="130"></center> -->
        <p align="center">Sign in to start your session</p>
        <br>
        <form action="<?php echo site_url('Login/proses') ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" value="" placeholder="NIM..."/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" value="" placeholder="Password..."/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">

            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div><!-- /.col -->
      </div>
  </form>
  <br>
  <a href="#">Lupa Password</a>
  <br>
  <a href="#">Daftar Baru</a>
</div><!-- /.login-box-body -->
<br>
<center><small><b><a href="#">Thesis</a> © 2021 Pasca - PENS</small></b></center>
</div><!-- /.login-box -->

<!-- jQuery 2.1.3 -->
<script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
      });
});
</script>
</body>
</div>
</html>

<!-- <style type="text/css">
    .form-control::-webkit-input-placeholder{
        font-weight: bold;
        color :#483D8B;
        .hitam {
            background: black;
        }
    </style> -->