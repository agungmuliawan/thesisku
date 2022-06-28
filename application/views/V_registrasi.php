<!doctype html>
<html class="no-js" lang="en">

<?php
$this->load->view('template/head');
?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
             
                    <div class="login-form-head">
                        <h4>Sign up</h4>
                        <p>Hello there, Sign up and Join with Us</p>
                    </div>
                    
                    <div class="login-form-body">
                    <?php echo form_open_multipart('Login/proses_registrasi'); ?>
                        <div class="form-gp">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama">
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="nip_user">Username</label>
                            <input type="text" name="nip_user">
                            <i class="ti-key"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                      
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="login.html">Sign in</a></p>
                        </div>
                    </div>
              
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <?php
    $this->load->view('template/js');
    ?>

</body>

</html>