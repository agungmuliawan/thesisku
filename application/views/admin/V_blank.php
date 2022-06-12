<?php
$this->load->view('template/head');
?>
<?php
$panggil = $this->session->userdata();
?>
<!doctype html>
<html class="no-js" lang="en">



<body>
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- preloader area end -->
	<!-- page container area start -->
	<div class="page-container">
		<!-- sidebar menu area start -->
		<?php
		$this->load->view('template/sidebar');
		?>
		<!-- sidebar menu area end -->
		<!-- main content area start -->
		<div class="main-content">
			<!-- header area start -->
			<div class="header-area">
				<div class="row align-items-center">
					<!-- nav and search button -->
					<div class="col-md-6 col-sm-8 clearfix">

					</div>
					<!-- profile info & task notification -->
					<div class="col-md-6 col-sm-4 clearfix">
						<ul class="notification-area pull-right">
							<li id="full-view"><i class="ti-fullscreen"></i></li>
							<li id="full-view-exit"><i class="ti-zoom-out"></i></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- header area end -->
			<!-- page title area start -->
			<div class="page-title-area">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<div class="breadcrumbs-area clearfix">
							<h4 class="page-title pull-left">Dashboard</h4>
							<ul class="breadcrumbs pull-left">
								<li><a href="index.html">Home</a></li>
								<li><span>Dashboard</span></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 clearfix">
						<div class="user-profile pull-right">
							<?php
							$foto = $panggil['foto'] ?? null;

							?>
							<img class="avatar user-thumb" src="<?php echo base_url('assets/images/img_user/' . $foto) ?>" alt="avatar">
							<h4 class="user-name dropdown-toggle" data-toggle="dropdown">
								<?php echo $panggil['nama'] ?? null ?><i class="fa fa-angle-down"></i></h4>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Message</a>
								<a class="dropdown-item" href="#">Settings</a>
								<a class="dropdown-item" href="<?php echo site_url('Login/logout') ?>">Log Out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- page title area end -->
			<div class="main-content-inner">
				<div class="row">
					<!-- seo fact area start -->
					<div class="col-lg-8">
						<div class="row">
							<div class="col-md-6 mt-5 mb-3">
								<div class="card">
									<div class="seo-fact sbg1">
										<div class="p-4 d-flex justify-content-between align-items-center">
										<div class="seofct-icon"><i class="ti-file"></i> Jumlah Hotel</div>
											<h2>213</h2>
										</div>
										<!-- <canvas id="seolinechart1" height="50"></canvas> -->
									</div>
								</div>
							</div>
							<div class="col-md-6 mt-md-5 mb-3">
								<div class="card">
									<div class="seo-fact sbg4">
									<div class="p-4 d-flex justify-content-between align-items-center">
											<div class="seofct-icon"><i class="ti-user"></i> Jumlah User</div>
											<?php
											$result= $this->db->query("SELECT COUNT(id_user) as jumlah_user FROM tb_user")->result();
											?>
											<?php foreach ($result as $row) { ?>
											<h2><?php echo $row->jumlah_user ?></h2>
											<?php } ?>
										</div>
										<!--    <canvas id="seolinechart2" height="50"></canvas> -->
									</div>
								</div>
							</div>
							<div class="col-md-6 mt-md-5 mb-3">
								<div class="card">
									<div class="seo-fact sbg2">
										<div class="p-4 d-flex justify-content-between align-items-center">
										<div class="seofct-icon"><i class="ti-download"></i> Data Training</div>
											<?php
											$result= $this->db->query("SELECT COUNT(id_transaksi) as id_transaksi FROM tb_training")->result();
											?>
											<?php foreach ($result as $row) { ?>
											<h2><?php echo $row->id_transaksi ?></h2>
											<?php } ?>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6 mt-md-5 mb-4">
								<div class="card">
									<div class="seo-fact sbg3">
										<div class="p-4 d-flex justify-content-between align-items-center">
											<div class="seofct-icon"><i class="ti-upload"></i> Data Olah</div>
											<h2>100</h2>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- timeline area start -->
					<div class="col-xl-3 col-ml-4 col-lg-4 mt-1">
						<div class="card">
							<div class="card-body">
								<h4 class="header-title">Pengumuman</h4>
								<div class="timeline-area">
									<div class="timeline-task">
										<div class="icon bg2">
											<i class="fa fa-exclamation-triangle"></i>
										</div>
										<div class="tm-title">
											<h4>Pemesanan Hotel Baru</h4>
											<span class="time"><i class="ti-time"></i>09:35</span>
										</div>
										<p>Pemesanan hotel baru dengan transaksi 002
										</p>
									</div>
									<div class="timeline-task">
										<div class="icon bg2">
											<i class="fa fa-exclamation-triangle"></i>
										</div>
										<div class="tm-title">
											<h4>Pemesanan Hotel Baru</h4>
											<span class="time"><i class="ti-time"></i>11:35</span>
										</div>
										<p>Pemesanan hotel baru dengan transaksi 001
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- timeline area end -->
					<!-- map area end -->
					<!-- testimonial area start -->
					<!-- testimonial area end -->
				</div>
			</div>
		</div>
		<!-- main content area end -->
		<!-- footer area start-->

		<!-- footer area end-->
	</div>
	<!-- page container area end -->
	<!-- offset area start -->

	<!-- offset area end -->
	<!-- jquery latest version -->


	<?php
	$this->load->view('template/js');
	?>
	<?php
	$this->load->view('template/foot');
	?>