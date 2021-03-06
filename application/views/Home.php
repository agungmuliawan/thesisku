<?php
// foreach ($daftar_hotel as $row) {
// 	echo $row->nama_hotel;
// }
// die();
?>
<!--tambahkan custom css disini-->
<!DOCTYPE html>
<html lang="en">
<?php
$this->load->view('template_frontend/head');
?>

<body>
	<?php
$this->load->view('template_frontend/topbar');
?>
	<div class="hero-wrap js-fullheight" style="background-image: url('frontend/images/background.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
				data-scrollax-parent="true">
				<div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Telusuri
							<br></strong> Hotel Terbaikmu</h1>
					<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Dapatkan pengalaman rekomendasi
						hotel sesuai dengan kebutuhanmu</p>
					<div>
						<form action="<?php echo site_url('Login'); ?>" method="post" class="d-block d-flex">
							<!-- <div class="fields d-block d-flex">
								<div class="textfield-search one-third">
									<input type="text" class="form-control" placeholder="Ex : Hotel Sahid Surabaya">
								</div>
								<div class="select-wrap one-third">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control" placeholder="Keyword search">
										<option value="">Lokasi</option>
										<option value="">San Francisco USA</option>
										<option value="">Berlin Germany</option>
										<option value="">Lodon United Kingdom</option>
										<option value="">Paris Italy</option>
									</select>
								</div>
							</div> -->
							<input type="submit" class="search-submit btn btn-primary" value="Cari Rekomendasi Saya">
						</form>
					</div>
					<!-- <p>Atau Mencari Hotel Lainnya</p>
					<p class="browse d-md-flex">
						<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i
									class="flaticon-fork"></i>Termurah</a></span>
						<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i
									class="flaticon-hotel"></i>Rating</a></span>
					</p> -->
				</div>
			</div>
		</div>
	</div>
	<!-- start menu aplikasi -->
	<section class="ftco-section services-section bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon"><span class="flaticon-like"></span></div>
						</div>
						<div class="media-body p-2 mt-2">
							<h3 class="heading mb-3">Kepuasan Pengguna</h3>
							<p>Kepuasan pengguna adalah prioritas kami</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon"><span class="flaticon-detective"></span></div>
						</div>
						<div class="media-body p-2 mt-2">
							<h3 class="heading mb-3">Rekomendasi Terbaik</h3>
							<p>Menemukan hotel yang sesuai dengan kebutuhan prioritas pengguna</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon"><span class="flaticon-support"></span></div>
						</div>
						<div class="media-body p-2 mt-2">
							<h3 class="heading mb-3">Support</h3>
							<p>Support kepada pengguna 24 jam apabila ada kendala</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- untuk rekomendasi kemiripan hotel -->
	<!-- akhir kemiripan hotel -->
	<!-- akhir menu aplikasi -->
	<!-- <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">Hotel Populer</span>
					<h2 class="mb-4"><strong>TOP 8</strong> Hotel Populer 2021</h2>
				</div>
			</div>

		<div class="container-fluid col-md-10">
			<div class="row">
				<?php
				foreach ($daftar_hotel as $row) {
					
				?>

				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="<?php echo site_url('Home/detail_hotel/'.$row->id_hotel)?>" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(frontend/img/<?php echo $row->foto?>);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="<?php echo site_url('Home/detail_hotel/'.$row->id_hotel)?>"><?php echo $row->nama_hotel ?></a></h3>
									<p class="rate">
										<?php
										$review = $row->review;
										if ($review>80 AND $review<100) {
										?>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<?php
										} elseif($review>60 AND $review<80) { 
										?>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<?php
										} elseif ($review>40 AND $review<60){
										?>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<?php
										} elseif ($review>20 AND $review<40){
										?>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<?php
										} else {
										?>
										<i class="icon-star"></i>
										<?php
										}
										?>
										<span><?php echo $row->review?></span>
									</p>
								</div>
								<div class="two">
									<span class="price per-price">
										<?php echo $row->harga?></span>
								</div>
							</div>
							<p><?php echo substr($row->deskripsi, 0, 50) ?></p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> <?php echo $row->lokasi ?></span>
								<span class="ml-auto"><a href="<?php echo site_url('Home/detail_hotel/'.$row->id_hotel)?>">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</section> -->
	
	<?php
	$this->load->view('template_frontend/footer');
	?>
	<?php
	$this->load->view('template_frontend/js');
	?>
	<!-- loader -->


</body>

</html>
