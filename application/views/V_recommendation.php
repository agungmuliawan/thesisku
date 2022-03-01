<?php
//echo "ye";
//die();
?>
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
	<div class="hero-wrap js-fullheight" style="background-image: url('../img/image_5.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
					<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
							class="mr-2"><a href="<?php echo site_url('Home')?>">Home</a></span> <span>Rekomendasi
							Hotel</span></p>
					<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Rekomendasi
						Hotel Anda</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-md-flex">
				<div class="col-md-6 ftco-animate img about-image" style="background-image: url('../img/about.jpg');">
				</div>
				<div class="col-md-6 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
								aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill"
									href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo"
									aria-selected="true">Proses</a>

								<a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
									role="tab" aria-controls="v-pills-mission" aria-selected="false">Misi</a>

								<a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal"
									role="tab" aria-controls="v-pills-goal" aria-selected="false">Goal</a>
							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center">

							<div class="tab-content ftco-animate" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel"
									aria-labelledby="v-pills-whatwedo-tab">
									<div>
										<h2 class="mb-4">Proses</h2>
										<p>Aplikasi Go-Hotel (Gotel) menggunakan permodelan <b><i>case base reason
												</i></b> dimana seluruh history user sebelumnya akan di jadikan
											data olah untuk di liat kemiripan kebutuhan dengan Anda. Penggunaan
											algoritma kemiripan <b><i>K-Nearst Neighbors </i></b> di sangatlah membantu
											dalam proses rekomendasi
										</p>
										<p>Piilihan kriteria kebutuhan Anda sangat di pelruhkan untuk melihat apa saja
											prioritas atau kebutuhan Anda untuk menghasilkan rekomendasi</p>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-mission" role="tabpanel"
									aria-labelledby="v-pills-mission-tab">
									<div>
										<h2 class="mb-4">Misi</h2>
										<p>Aplikasi Go-Hotel (Gotel) memiliki misi untuk memberikan alternatif
											rekomendasi hotel kepada pengguna</p>
										<p>Misi lainnya membedakan dengan aplikasi lainnya yang tidak memberikan
											prioritas kebutuhan kepada pengguna dimana setiap pengguna memilii kebutuhan
											berbeda-beda</p>
									</div>
								</div>

								<div class="tab-pane fade" id="v-pills-goal" role="tabpanel"
									aria-labelledby="v-pills-goal-tab">
									<div>
										<h2 class="mb-4">Goal</h2>
										<p>Tujuan akhir dari aplikasi ini dapat membantu pengguna atau user dalam
											memilih pilihan hotel yang ada dengan melihat kemiripan data sebelumnya</p>
										<p>Di samping itu kita berharap aplikasi ini menjadi tambahan atau rujukan oleh
											aplikasi penyedia layanan hotel lainnya</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">Rekomendasi Hotel</span>
					<h3 class="mb-4"><strong>Silahkan Pilih Kebutuhan dan Prioritas</strong> Anda</h3>
					Keterangan :<br> 
					Kebutuhan Penting (KP) 3 kali lebih penting dari pada kebutuhan Umum (KU) <br>
					Kebutuhan Penting (KP) 5 kali lebih penting dari pada kebutuhan Tambahan (KT) <br>
					Kebutuhan Umum (KU) 2 kali lebih penting dari pada kebutuhan Tambahan (KT) 
					<br>
				</div>
			</div>
			<?php echo form_open_multipart('transaksi/C_transaksi'); ?>
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div id="accordion">
						<div class="row">
							<div class="col-md-6">

								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menuone"
											aria-expanded="false" aria-controls="menuone">Kebutuhan Prioritas (KP) <span
												class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menuone" class="collapse">
										<div class="card-body">
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Fasilitas</b></label>
												<div class="col-md-10">
													<input type="checkbox" name="ac" value="ac" /> Air Conditioner (AC)
													<br>
													<input type="checkbox" name="ac" value="ac" /> Television (TV) <br>
													<input type="checkbox" name="ac" value="ac" /> Internet <br>
													<input type="checkbox" name="ac" value="ac" /> Breakfast (Sarapan)
													<br>
													<input type="checkbox" name="ac" value="ac" /> Ruang Meeting / Rapat
													<br>
													<input type="checkbox" name="ac" value="ac" /> Ruang Kebugaran / Gym
													<br>
													<input type="checkbox" name="ac" value="ac" /> Restoran Cepat Saji
													<br>
													<input type="checkbox" name="ac" value="ac" /> Kolam Renang <br>
													<input type="checkbox" name="ac" value="ac" /> Area Parkiran <br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Harga</b></label>
												<div class="col-md-10">
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> > 1.000.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 500.000 – 1.000.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 300.000 – 500.000 </label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 100.000 – 300.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> < 100.000</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Tipe Kamar</b></label>
												<div class="col-md-10">
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Suite</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Deluxe</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Superior </label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Standart</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Single</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Review</b></label>
												<div class="col-md-10">
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> > 8.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 6.0 – 8.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 4.0 – 6.0 </label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 2.0 – 4.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> < 20.0</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Bintang</b></label>
												<div class="col-md-10">
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 5</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 4</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 3 </label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 2</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 1</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Lokasi</b></label>
												<div class="col-md-10">
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Gubeng</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Rungkut</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Sukolilo </label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Wonokromo</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Mulyorejo</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Lakarsantri</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Tandes</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Tambaksari</label><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menutwo"
											aria-expanded="false" aria-controls="menutwo">Kebutuhan Tambahan (KT) <span
												class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menutwo" class="collapse">
										<div class="card-body">
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Fasilitas</b></label>
												<div class="col-md-10">
													<input type="checkbox" name="ac" value="ac" /> Air Conditioner (AC)
													<br>
													<input type="checkbox" name="ac" value="ac" /> Television (TV) <br>
													<input type="checkbox" name="ac" value="ac" /> Internet <br>
													<input type="checkbox" name="ac" value="ac" /> Breakfast (Sarapan)
													<br>
													<input type="checkbox" name="ac" value="ac" /> Ruang Meeting / Rapat
													<br>
													<input type="checkbox" name="ac" value="ac" /> Ruang Kebugaran / Gym
													<br>
													<input type="checkbox" name="ac" value="ac" /> Restoran Cepat Saji
													<br>
													<input type="checkbox" name="ac" value="ac" /> Kolam Renang <br>
													<input type="checkbox" name="ac" value="ac" /> Area Parkiran <br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Harga</b></label>
												<div class="col-md-10">
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> > 1.000.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 500.000 – 1.000.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 300.000 – 500.000 </label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 100.000 – 300.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> < 100.000</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Tipe Kamar</b></label>
												<div class="col-md-10">
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Suite</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Deluxe</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Superior </label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Standart</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Single</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Review</b></label>
												<div class="col-md-10">
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> > 8.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 6.0 – 8.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 4.0 – 6.0 </label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 2.0 – 4.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> < 20.0</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Bintang</b></label>
												<div class="col-md-10">
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 5</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 4</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 3 </label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 2</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 1</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Lokasi</b></label>
												<div class="col-md-10">
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Gubeng</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Rungkut</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Sukolilo </label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Wonokromo</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Mulyorejo</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Lakarsantri</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Tandes</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Tambaksari</label><br>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
							<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menuthree"
											aria-expanded="false" aria-controls="menuthree">Kebutuhan Umum (KU) <span
												class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menuthree" class="collapse">
										<div class="card-body">
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Fasilitas</b></label>
												<div class="col-md-10">
													<input type="checkbox" name="ac" value="ac" /> Air Conditioner (AC)
													<br>
													<input type="checkbox" name="ac" value="ac" /> Television (TV) <br>
													<input type="checkbox" name="ac" value="ac" /> Internet <br>
													<input type="checkbox" name="ac" value="ac" /> Breakfast (Sarapan)
													<br>
													<input type="checkbox" name="ac" value="ac" /> Ruang Meeting / Rapat
													<br>
													<input type="checkbox" name="ac" value="ac" /> Ruang Kebugaran / Gym
													<br>
													<input type="checkbox" name="ac" value="ac" /> Restoran Cepat Saji
													<br>
													<input type="checkbox" name="ac" value="ac" /> Kolam Renang <br>
													<input type="checkbox" name="ac" value="ac" /> Area Parkiran <br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Harga</b></label>
												<div class="col-md-10">
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> > 1.000.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 500.000 – 1.000.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 300.000 – 500.000 </label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> 100.000 – 300.000</label><br>
													<input type="radio" id="html" name="fav_language" value="HTML">
													<label for="html"> < 100.000</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Tipe Kamar</b></label>
												<div class="col-md-10">
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Suite</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Deluxe</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Superior </label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Standart</label><br>
													<input type="radio" id="tipe_kamar" name="tipe_kamar" value="tipe_kamar">
													<label for="tipe_kamar"> Single</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Review</b></label>
												<div class="col-md-10">
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> > 8.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 6.0 – 8.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 4.0 – 6.0 </label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> 2.0 – 4.0</label><br>
													<input type="radio" id="review" name="review" value="review">
													<label for="review"> < 20.0</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Bintang</b></label>
												<div class="col-md-10">
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 5</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 4</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 3 </label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 2</label><br>
													<input type="radio" id="bintang" name="bintang" value="bintang">
													<label for="bintang"> Bintang 1</label><br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Lokasi</b></label>
												<div class="col-md-10">
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Gubeng</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Rungkut</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Sukolilo </label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Wonokromo</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Mulyorejo</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Lakarsantri</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Tandes</label><br>
													<input type="radio" id="lokasi_kp" name="lokasi_kp" value="lokasi_kp">
													<label for="lokasi_kp"> Tambaksari</label><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<center>
			<div class="col-md-3 form-group">
			<input type="submit" value="Cari Rekomendasi Hotel Saya" class="btn btn-block btn-primary">
		</div>
			</center>
		</div>
	</section>
	<!-- <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">FAQS</span>
					<h2 class="mb-4"><strong>Pertanyaan</strong> dan Jawaban</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div id="accordion">
						<div class="row">
							<div class="col-md-6">

								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menutwo"
											aria-expanded="false" aria-controls="menutwo">Apa itu Go-tel? <span
												class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menutwo" class="collapse">
										<div class="card-body">
											<p>Aplikasi penyedian pemesanan dan booking hotel di Indonesia. Tidak hanya
												itu kita juga dapat memberikan rekomendasi dengan cara melihat kemiripan
												dan kebutuhan pengguna menggunakan algoritma teknologi canggih </p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menutwo"
											aria-expanded="false" aria-controls="menutwo">Apa perbedaan Go-tel dengan
											Aplikasi lainnya?<span class="collapsed"><i
													class="icon-plus-circle"></i></span><span class="expanded"><i
													class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menutwo" class="collapse">
										<div class="card-body">
											<p>Perbedaan paling mencolok dalam memberikan rekomendasi dengan memberikan
												pilihan prioritas kepada pengguna, faktanya aplikasi lain hanya melihat
												melakukan filter secara umum dengan melihat pencarian hotel berdasarkan
												rating saja</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false"
											aria-controls="menu3"> Bagaimana proses menghasilkan rekomendasi ?<span
												class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menu3" class="collapse">
										<div class="card-body">
											<p>Kami memberikan rekomendasi yang memiliki kemiripan tertinggi dengan
												kebutuhan user dengan cara membanding data olah sebelumnya dengan data
												dari user, semakin tinggi kemiripan akan kami berikan kepada user</p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menu4" aria-expanded="false"
											aria-controls="menu4">Pilihan apa saja untuk menghasilkan rekomendasi? <span
												class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menu4" class="collapse">
										<div class="card-body">
											<p>Untuk kriteria kami memberikan 3 kategori yaitu Kebutuhan prioritas (KP),
												kebutuhan Umum (KU) dan Kebutuhan Tambahan (KT). Untuk attribute pilihan
												kita berikan 6 yaitu fasilitas, lokasi, harga, skor, bintang dan rating
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menu5" aria-expanded="false"
											aria-controls="menu5">Bagaimana jika hanya membutuhkan 1 kriteria saja?
											<span class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menu5" class="collapse">
										<div class="card-body">
											<p>Kami sadar setiap user memiliki kebutuhan berbeda-beda jadi tidak masalah
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<a class="card-link" data-toggle="collapse" href="#menu6" aria-expanded="false"
											aria-controls="menu6">Lalu bagaimana cara memulainya? <span
												class="collapsed"><i class="icon-plus-circle"></i></span><span
												class="expanded"><i class="icon-minus-circle"></i></span></a>
									</div>
									<div id="menu6" class="collapse">
										<div class="card-body">
											<p>Silahkan login terlebih dahulu untuk mendaftar supaya data pilihan anda
												dapat di proses dan di jadikan data olah untuk rekomendasi user lainnya
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- <section class="ftco-section-parallax">
		<div class="parallax-img d-flex align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
						<h2>Silihkan Pilih Prioritas Anda</h2>
						<p>Silahkan pilih kriteria kebutuhan dan fasilitas atau item yang dibutuhkan untuk kami berikan
							rekomendasi hotel untuk Anda</p>
						<div class="row d-flex justify-content-center mt-5">
							<div class="col-md-8">
								
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
                      				<input type="text" class="form-control" placeholder="Enter email address">
                      				<input type="submit" value="Subscribe" class="submit px-3">
                   				 </div>
									
								</form>
								
								
								<div class="form-group">
										<input type="submit" value="Rekomendasi Anda" class="btn btn-primary py-3">
									</div>
							</div>
						</div>
					</div>
				</div>
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
