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
	<!-- akhir menu aplikasi -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-12 heading-section ftco-animate">
					<!-- <span class="subheading">Recommendation Hotel</span> -->
                   
					<h2 class="mb-4"><strong>5 Top</strong> Rekomendasi untuk Anda</h2>
                    Rekomendasi hotel merupakan rekomendasi yang di berikan oleh sistem dengan penggunaan algoritma mesin pintar 
                    sesuai dengan kebutuhan yang telah anda masukkan Anda. Proses rekomendasi hotel di lakukan dengan cara
                    melihat kemiripan kebutuhan Anda dengan pengguna sebelumnya dengan model CBR. Nilai kemiripan semakin tinggi akan
                    ditampilkan pada urutan pertama.
				</div>
			</div>
		</div>
		<!-- <div class="container-fluid"> -->
		<!-- <div class="container-fluid col-md-10">
			<div class="row">
				<?php
				foreach ($rekomendasi as $row) {
					
				?>

				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="<?php echo site_url('Home/detail_hotel/'.$row->id_hotel)?>" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(../frontend/img/<?php echo $row->foto?>);">
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
							<p>Kemiripan : ....%</p>
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
		</div> -->
		<div class="container-fluid col-md-10">
			<div class="row">
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(../frontend/img/tab_darmo.JPG);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Tab Hotel Darmo Permai Surabaya</a></h3>
								</div>
								<div class="two">
									<span class="price per-price">
										Rp. 200.000</span>
								</div>
							</div>
							<p>Kemiripan : 97,81%</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Dukuh Pakis</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(../frontend/img/primebiz.JPG);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Primebiz Hotel Surabaya</a></h3>
								</div>
								<div class="two">
									<span class="price per-price">
									Rp358.186 </span>
								</div>
							</div>
							<p>Kemiripan : 94,35%</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Wonokromono</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(../frontend/img/fairfield.JPG);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Fairfield By Marriott Surabaya </a></h3>
								</div>
								<div class="two">
									<span class="price per-price">
									Rp594.110</span>
								</div>
							</div>
							<p>Kemiripan : 93,35%</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Dukuh Pakis</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(../frontend/img/<?php echo $row->foto?>);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Java Paragon Hotel And Residence</a></h3>
								</div>
								<div class="two">
									<span class="price per-price">
									Rp582.416</span>
								</div>
							</div>
							<p>Kemiripan : 93,10%</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Dukuh Pakis</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
							style="background-image: url(../frontend/img/papilio.JPG);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Best Western Papilio Hotel</a></h3>
								</div>
								<div class="two">
									<span class="price per-price">
									Rp488.000 </span>
								</div>
							</div>
							<p>Kemiripan : 86,91%</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Wonokromono</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<?php
	$this->load->view('template_frontend/footer');
	?>
	<?php
	$this->load->view('template_frontend/js');
	?>
	<!-- loader -->


</body>

</html>
