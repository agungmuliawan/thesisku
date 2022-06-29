<!-- Left side column. contains the sidebar -->

<?php
/*$timeout = 1; 
$logout = "http://localhost/siak_pmg"; 

$timeout = $timeout * 2000;  
if(isset($_SESSION['start_session'])){
    $elapsed_time = time()-$_SESSION['start_session'];
    if($elapsed_time >= $timeout){
        session_destroy();
        echo "<script type='text/javascript'>alert('Sesi telah berakhir, silahkan login kembali');window.location='$logout'</script>";
    }
}

$_SESSION['start_session']=time();
*/
$panggil = $this->session->userdata();
?>
<div class="sidebar-menu">
	<div class="sidebar-header">
		<div class="logo">
			<a href="index.html">
				<!-- <img width="150px" height="50px" src="<?php echo base_url('assets/images/logo.png') ?>" alt="logo"> -->
				<h4>Gotel</h4>
			</a>
		</div>
	</div>
	<div class="main-menu">
		<div class="menu-inner">
			<nav>
				<ul class="metismenu" id="menu">
					<?php
					$level = $panggil['level'] ?? null;
					if ($level == 'administrator') {
					?>

					<li class="active">
						<a href="<?php echo site_url('admin/C_home') ?>" aria-expanded="true"><i
								class="ti-home active"></i><span>Home</span></a>
					</li>
					<li>
						<a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Data
								Master</span></a>
						<ul class="collapse">
							<li><a href="<?php echo site_url('admin/C_user') ?>">Data User</a></li>
							<li><a href="<?php echo site_url('admin/C_mahasiswa') ?>">Data Hotel</a></li>
							<li><a href="<?php echo site_url('admin/C_mahasiswa') ?>">Data Pengumuman</a></li>
						</ul>
					</li>
					<li><a href="<?php echo site_url('admin/C_modul') ?>"><i class="ti-search"></i>
							<span>Bobot Kriteria</span></a></li>
					<li><a href="<?php echo site_url('admin/C_modul') ?>"><i class="ti-folder"></i>
							<span>Pemesanan</span></a></li>
					<li><a href="<?php echo site_url('admin/C_user') ?>"><i class="ti-info"><span>Info</span></i></a>
					</li>
					<li><a href="<?php echo site_url('admin/C_user') ?>"><i class="ti-user"><span>Rubah
									Password</span></i></a>
					</li>

					<?php
					} elseif ($level == 'dosen') {
					?>
					<li class="active">
						<a href="<?php echo site_url('dosen/C_home') ?>" aria-expanded="true"><i
								class="ti-home active"></i><span>Home</span></a>
					</li>
					<li><a href="<?php echo site_url('dosen/C_bio_dsn') ?>"><i class="ti-folder"></i>
							<span>Biodata</span></a></li>
					<li><a href="<?php echo site_url('dosen/C_modul_dsn') ?>"><i class="ti-folder"></i>
							<span>E-Modul</span></a></li>
					<li><a href="<?php echo site_url('dosen/C_pgm_dsn') ?>"><i
								class="ti-info"><span>Pengumuman</span></i></a></li>
					<?php
					} else {
					?>
					<li class="active">
						<a href="<?php echo site_url('admin_area/C_home')?>"><i
								class="ti-home active"></i><span>Home</span></a>
					</li>
					<li><a href="<?php echo site_url('admin_area/C_master') ?>"><i class="ti-user"></i>
							<span>User</span></a></li>
					<!-- <li>
						<a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Attribute</span></a>
						<ul class="collapse">
							<li><a href="<?php echo site_url('admin_area/C_master/data_attribute_lokasi')?>">Lokasi</a></li>
							<li><a href="<?php echo site_url('admin_area/C_master/data_attribute_harga')?>">Harga</a></li>
							<li><a href="<?php echo site_url('admin_area/C_master/data_attribute_tipe_kamar')?>">Tipe Kamar</a></li>
							<li><a href="<?php echo site_url('admin_area/C_master/data_attribute_review')?>">Review</a></li>
							<li><a href="<?php echo site_url('admin_area/C_master/data_attribute_kelas')?>">Kelas</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="<?php echo site_url('admin_area/C_master/data_hotel') ?>"><i class="ti-folder"></i>
							<span>Data Hotel</span></a></li> -->
					<li><a href="<?php echo site_url('admin_area/C_master/data_training') ?>"><i class="ti-folder"></i>
							<span>Data Training</span></a></li>

					<?php
					}
					?>
				</ul>
			</nav>
		</div>
	</div>
</div>
