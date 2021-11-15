<!-- Left side column. contains the sidebar -->

<?php
    //session_start();
$timeout = 1;
$logout = "http://localhost/umsida";

$timeout = $timeout * 2000;
if (isset($_SESSION['start_session'])) {
    $elapsed_time = time()-$_SESSION['start_session'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script type='text/javascript'>alert('Sesi telah berakhir, silahkan login kembali');window.location='$logout'</script>";
    }
}

$_SESSION['start_session']=time();



$panggil = $this->session->userdata();
         echo $panggil['nama'];
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
               <img src="<?php echo base_url('assets/img_user/'.$panggil['foto']) ?>" class="img-circle" alt="User Image" />
           </div> 
           <div class="pull-left info">
            <?php
            if ($panggil['foto'] == null) {
                ?>
                data kosong
                <?php
            }
            ?>

            <p><?php echo $panggil['nama']; ?> <?php echo $panggil['nip_user'];  ?></p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <?php
    if ($panggil['level'] == 'administrator') {
        ?>
        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>DATA MASTER</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin_area/C_coa')?>"><i class="fa fa-user-md"></i> COA</a></li>
                </ul>
        </li>
      </ul>
<ul class="sidebar-menu">
    <li class="header">PENGGUNA SISTEM</li>
    <li>
        <a href="<?php echo site_url('admin_area/C_user') ?>">
            <i class="fa fa-group"></i> <span>DATA USER</span>
        </a>
<a href="<?php echo site_url('admin_area/C_rubah_password_admin') ?>">
    <i class="fa fa-lock"></i> <span>GANTI PASSWORD</span>
</a> -->
</li>
</ul>
<?php
    } elseif ($panggil['level'] == 'dosen') {
        ?>
    <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li>
            <a href="<?php echo site_url('dosen/C_biodata_dosen') ?>">
                <i class="fa fa-users"></i> <span>BIODATA DOSEN</span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('dosen/C_nilai_mahasiswa') ?>">
                <i class="fa fa-tasks"></i> <span>NILAI MAHASISWA</span>
            </a>
        </li>
        <li>


            <a href="<?php echo site_url('dosen/C_download_dosen') ?>">
                <i class="fa fa-file"></i> <span>DOWNLOAD FILE</span>
            </a>
        </li>
        <li>


            <a href="<?php echo site_url('dosen/C_upload_file_dsn') ?>">
                <i class="fa fa-send"></i> <span>UPLOAD FILE</span>
            </a>
        </li>
    </ul>
    <?php
    } else {
        ?>
    <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li>
            <a href="<?php echo site_url('mahasiswa/C_biodata_mahasiswa') ?>">
                <i class="fa fa-users"></i> <span>BIODATA MAHASISWA</span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('mahasiswa/C_khs') ?>">
                <i class="fa fa-tasks"></i> <span>KHS</span>
            </a>
        </li>
        <li>


            <a href="<?php echo site_url('mahasiswa/C_download_mahasiswa') ?>">
                <i class="fa fa-file"></i> <span>DOWNLOAD FILE</span>
            </a>
        </li>
        <li>


            <a href="<?php echo site_url('mahasiswa/C_upload_file_mhs') ?>">
                <i class="fa fa-send"></i> <span>UPLAOD FILE</span>
            </a>
        </li>
    </ul>
    <ul class="sidebar-menu">
        <li class="header">PENGGUNA SISTEM</li>
<!--         <li>
    <a href="<?php echo site_url('c_karyawan') ?>">
        <i class="fa fa-lock"></i> <span>GANTI PASSWORD</span>
    </a>
</li> -->
</ul>
<?php
    }
?>

</section>
<!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
