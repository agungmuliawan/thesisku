<!DOCTYPE html>
<html lang="en">
<?php
$this->load->view('template_frontend/head');
?>

<body>

	<?php
	$this->load->view('template_frontend/topbar');
	?>
	<!-- END nav -->

	<!-- <div class="hero-wrap js-fullheight" style="background-image: url('frontend/images/background.jpg');"> -->
	<div class="hero-wrap js-fullheight" style="background-image: url('../../img/hotel-2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
					<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?php echo site_url('Home') ?>">Home</a></span> <span><a href="<?php echo site_url('Home/hotel_many') ?>">Hotel</a></span> <span>Hotel
							Detail</span></p>
					<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotel Detail
					</h1>
				</div>
			</div>
		</div>
	</div>


	<section class="ftco-section ftco-degree-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 sidebar">
					<!-- <div class="sidebar-wrap bg-light ftco-animate">
					</div> -->
					<!-- <div class="sidebar-wrap bg-light ftco-animate">
						<h3 class="heading mb-4">Star Rating</h3>
						<form method="post" class="star-rating">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
												class="icon-star"></i><i class="icon-star"></i><i
												class="icon-star"></i></span></p>
								</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
												class="icon-star"></i><i class="icon-star"></i><i
												class="icon-star-o"></i></span></p>
								</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
												class="icon-star"></i><i class="icon-star-o"></i><i
												class="icon-star-o"></i></span></p>
								</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
												class="icon-star-o"></i><i class="icon-star-o"></i><i
												class="icon-star-o"></i></span></p>
								</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i
												class="icon-star-o"></i><i class="icon-star-o"></i><i
												class="icon-star-o"></i></span></p>
								</label>
							</div>
						</form>
					</div> -->
				</div>
				<!-- mulaiii -->
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-12 ftco-animate">
							<div class="single-slider owl-carousel">
								<div class="item">
									<div class="hotel-img" style="background-image: url('../../img/bg_detail.jpg');">
									</div>
								</div>
								<div class="item">
									<div class="hotel-img" style="background-image: url('../../img/detail_hotel_1.jpg');"></div>
								</div>
								<div class="item">
									<div class="hotel-img" style="background-image: url('../../img/detail_hotel_3.jpeg');"></div>
								</div>
							</div>
						</div>
						<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
							<h2><?php echo $hotel->nama_hotel ?></h2>
							<p class="rate mb-5">
								<span class="loc"><a href="#"><i class="icon-map"></i> <?php echo $lokasi->nm_lokasi; ?></a></span>
							</p>
							<p>
							<h4>Fasilitas</h4>
							<!-- <ul> -->
							<?php
							$not_in_key = [
								'id_hotel',
								'nama_hotel',
								'id_tipe_kamar'
							];
							foreach ($hotel as $key => $value) {
								// dd($key);
								if (in_array($key, $not_in_key)) {
									continue;
								}
								$field = explode('_', $key); #mecah
								$jumlah_arr = count($field) - 1;
								if ($jumlah_arr > 0) {
									unset($field[$jumlah_arr]); #dibuang
								}
								$key_field = implode(' ', $field); #digabungkan
								#end hilangin suffix
								// if (!in_array($key_field, ['id_transaksi', 'id_user'])) {
								if (!in_array($key_field, ['id', 'result'])) {
									echo "<li>" . ucwords($key_field) . "</li>";
								}
							}
							?>
							</p>
							<!-- <p style="justify-items: auto;"><?php echo $deskripsi ?></p> -->
						</div>
						<!-- <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Take A Tour</h4>
          			<div class="block-16">
		              <figure>
		                <img src="images/hotel-6.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div> -->

						<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
							<h4 class="mb-4">Our Rooms</h4>
							<div class="row">
								<?php
								$result = $this->db->query("SELECT * FROM detail_hotel where id_hotel = '" . $hotel->id_hotel . "' ")->result();
								foreach ($result as $row) {


								?>
									<div class="col-md-4">
										<div class="destination">
											<a href="hotel-single.html" class="img img-2" style="background-image: url('../../img/<?php echo $row->foto_kamar ?>');"></a>
											<div class="text p-3">
												<div class="d-flex">
													<div class="one">
														<h3><a href="hotel-single.html"><?php echo $row->tipe_kamar ?></a></h3>
													</div>
													<div class="two">
														<span class="price per-price">Rp. <?php echo $row->harga ?><br><small>/malam</small></span>
													</div>
												</div>
												<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, praesentium officia vel neque itaque sequi debitis id. Possimus ad est porro nostrum quasi, eum provident dicta labore fugit magni quis.</p>
												<hr>
												<p class="bottom-area d-flex">
													<span><i class="icon-map-o"></i> <?php echo $row->stok_detail_hotel ?></span>
													<span class="ml-auto"><a href="#">Pesan Sekarang</a></span>
												</p>
											</div>
										</div>
									</div>
								<?php
								}
								?>
							</div>
						</div>

						<?php echo form_open_multipart('admin_area/C_transaksi/proses_pemesanan'); ?>
						<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
							<h4 class="mb-5">Pesan Sekarang </h4>
							<div class="fields">
								<div class="row">
									<!-- <div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" readonly value="<?php echo $this->session->userdata()['nama']; ?>">
										</div>
									</div> -->
									<!-- <div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" readonly value="<?php echo $this->session->userdata()['nama']; ?>">
										</div>
									</div>
									<div class=" col-md-6">
										<div class="form-group">
											<input type="text" id="tgl_cek_in" name="tgl_cek_in" class="form-control" placeholder="Tanggal Mulai Inap">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="tgl_cek_out" class="form-control" placeholder="Date to">
										</div>
									</div> -->
									<!-- <div class="col-md-6">
										<div class="form-group">
											<div class="select-wrap one-third">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control" placeholder="Guest">
													<option value="0">Guest</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<div class="select-wrap one-third">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control" placeholder="Children">
													<option value="0">Children</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</div>
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group">
											<input type="hidden" name="param" value="<?php echo htmlentities($param); ?>">
											<input type="hidden" name="result" value="<?php echo $hotel->id_hotel; ?>">
											<input type="submit" value="Pesan Sekarang" class="btn btn-primary py-3">
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
							<h4 class="mb-4">Related Hotels</h4>
							<div class="row">
								<div class="col-md-4">
									<div class="destination">
										<a href="hotel-single.html" class="img img-2"
											style="background-image: url(images/hotel-1.jpg);"></a>
										<div class="text p-3">
											<div class="d-flex">
												<div class="one">
													<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
													<p class="rate">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-o"></i>
														<span>8 Rating</span>
													</p>
												</div>
												<div class="two">
													<span class="price per-price">$40<br><small>/night</small></span>
												</div>
											</div>
											<p>Far far away, behind the word mountains, far from the countries</p>
											<hr>
											<p class="bottom-area d-flex">
												<span><i class="icon-map-o"></i> Miami, Fl</span>
												<span class="ml-auto"><a href="#">Book Now</a></span>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="destination">
										<a href="hotel-single.html" class="img img-2"
											style="background-image: url(images/hotel-2.jpg);"></a>
										<div class="text p-3">
											<div class="d-flex">
												<div class="one">
													<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
													<p class="rate">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-o"></i>
														<span>8 Rating</span>
													</p>
												</div>
												<div class="two">
													<span class="price per-price">$40<br><small>/night</small></span>
												</div>
											</div>
											<p>Far far away, behind the word mountains, far from the countries</p>
											<hr>
											<p class="bottom-area d-flex">
												<span><i class="icon-map-o"></i> Miami, Fl</span>
												<span class="ml-auto"><a href="#">Book Now</a></span>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="destination">
										<a href="hotel-single.html" class="img img-2"
											style="background-image: url(images/hotel-3.jpg);"></a>
										<div class="text p-3">
											<div class="d-flex">
												<div class="one">
													<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
													<p class="rate">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-o"></i>
														<span>8 Rating</span>
													</p>
												</div>
												<div class="two">
													<span class="price per-price">$40<br><small>/night</small></span>
												</div>
											</div>
											<p>Far far away, behind the word mountains, far from the countries</p>
											<hr>
											<p class="bottom-area d-flex">
												<span><i class="icon-map-o"></i> Miami, Fl</span>
												<span class="ml-auto"><a href="#">Book Now</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div> -->

					</div>
				</div>
			</div> <!-- .col-md-8 -->
		</div>
		</div>
	</section> <!-- .section -->

	<?php
	$this->load->view('template_frontend/footer');
	?>
	<?php
	$this->load->view('template_frontend/js');
	?>



	<!-- loader -->


</body>

</html>