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
			<div class="block-17 my-4">
				<?php echo form_open_multipart('transaksi/C_transaksi'); ?>
				<!-- <form action="" method="post" class="d-block d-flex"> -->
				<div class="fields d-block d-flex">
					<div class="select-wrap one-third">
						<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						<select name="daerah_anda" id="daerah_anda" class="form-control" placeholder="Keyword search">
							<option value="0">Daerah Anda</option>
							<?php
                                $result= $this->db->query("SELECT * FROM tb_lokasi")->result();
                                ?>
							<?php foreach ($result as $row) { ?>
							<option value="<?php echo $row->id_lokasi ?>"><?php echo $row->nm_lokasi ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="select-wrap one-third">
						<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						<select name="tujuan_anda" id="tujuan_anda" class="form-control" placeholder="Keyword search">
							<option value="0">Tujuan Lokasi</option>
							<?php
                                $result= $this->db->query("SELECT * FROM tb_lokasi")->result();
                                ?>
							<?php foreach ($result as $row) { ?>
							<option value="<?php echo $row->id_lokasi ?>"><?php echo $row->nm_lokasi ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<!-- <input type="submit" class="search-submit btn btn-primary" value="Search"> -->

			</div>

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
													<input type="checkbox" name="fasilitas" value="ac" /> Air
													Conditioner (AC)
													<br>
													<input type="checkbox" name="fasilitas" value="tv" /> Television
													(TV) <br>
													<input type="checkbox" name="fasilitas" value="internet" /> Internet
													<br>
													<input type="checkbox" name="fasilitas" value="breakfast" />
													Breakfast (Sarapan)
													<br>
													<input type="checkbox" name="fasilitas" value="ruang_meeting" />
													Ruang Meeting / Rapat
													<br>
													<input type="checkbox" name="fasilitas" value="fitness" /> Ruang
													Kebugaran / Fitness
													<br>
													<input type="checkbox" name="fasilitas" value="restoran" /> Restoran
													Cepat Saji
													<br>
													<input type="checkbox" name="fasilitas" value="kolam_renang" />
													Kolam Renang <br>
													<input type="checkbox" name="fasilitas" value="parkiran" /> Area
													Parkiran <br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Harga</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_harga")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_harga ?>" name="harga"
														value="<?php echo $row->id_harga ?>">
													<label for="<?php echo $row->id_harga ?>">
														<?php echo $row->harga ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Tipe Kamar</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_tipe_kamar")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_tipe_kamar ?>" name="tipe_kamar"
														value="<?php echo $row->id_tipe_kamar ?>">
													<label for="<?php echo $row->id_tipe_kamar ?>">
														<?php echo $row->tipe_kamar ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Review</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_review")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_review ?>" name="review"
														value="<?php echo $row->id_review ?>">
													<label for="<?php echo $row->id_review ?>">
														<?php echo $row->review ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Kelas / Bintang</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_kelas")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_kelas ?>" name="kelas"
														value="<?php echo $row->id_kelas ?>">
													<label for="<?php echo $row->id_kelas ?>">
														<?php echo $row->kelas ?></label><br>
													<?php } ?>
													</select>
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
													<input type="checkbox" name="fasilitas" value="ac" /> Air
													Conditioner (AC)
													<br>
													<input type="checkbox" name="fasilitas" value="tv" /> Television
													(TV) <br>
													<input type="checkbox" name="fasilitas" value="internet" /> Internet
													<br>
													<input type="checkbox" name="fasilitas" value="breakfast" />
													Breakfast (Sarapan)
													<br>
													<input type="checkbox" name="fasilitas" value="ruang_meeting" />
													Ruang Meeting / Rapat
													<br>
													<input type="checkbox" name="fasilitas" value="fitness" /> Ruang
													Kebugaran / Fitness
													<br>
													<input type="checkbox" name="fasilitas" value="restoran" /> Restoran
													Cepat Saji
													<br>
													<input type="checkbox" name="fasilitas" value="kolam_renang" />
													Kolam Renang <br>
													<input type="checkbox" name="fasilitas" value="parkiran" /> Area
													Parkiran <br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Harga</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_harga")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_harga ?>" name="harga"
														value="<?php echo $row->id_harga ?>">
													<label for="<?php echo $row->id_harga ?>">
														<?php echo $row->harga ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Tipe Kamar</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_tipe_kamar")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_tipe_kamar ?>" name="tipe_kamar"
														value="<?php echo $row->id_tipe_kamar ?>">
													<label for="<?php echo $row->id_tipe_kamar ?>">
														<?php echo $row->tipe_kamar ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Review</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_review")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_review ?>" name="review"
														value="<?php echo $row->id_review ?>">
													<label for="<?php echo $row->id_review ?>">
														<?php echo $row->review ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Kelas / Bintang</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_kelas")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_kelas ?>" name="kelas"
														value="<?php echo $row->id_kelas ?>">
													<label for="<?php echo $row->id_kelas ?>">
														<?php echo $row->kelas ?></label><br>
													<?php } ?>
													</select>
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
													<input type="checkbox" name="fasilitas" value="ac" /> Air
													Conditioner (AC)
													<br>
													<input type="checkbox" name="fasilitas" value="tv" /> Television
													(TV) <br>
													<input type="checkbox" name="fasilitas" value="internet" /> Internet
													<br>
													<input type="checkbox" name="fasilitas" value="breakfast" />
													Breakfast (Sarapan)
													<br>
													<input type="checkbox" name="fasilitas" value="ruang_meeting" />
													Ruang Meeting / Rapat
													<br>
													<input type="checkbox" name="fasilitas" value="fitness" /> Ruang
													Kebugaran / Fitness
													<br>
													<input type="checkbox" name="fasilitas" value="restoran" /> Restoran
													Cepat Saji
													<br>
													<input type="checkbox" name="fasilitas" value="kolam_renang" />
													Kolam Renang <br>
													<input type="checkbox" name="fasilitas" value="parkiran" /> Area
													Parkiran <br>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Harga</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_harga")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_harga ?>" name="harga"
														value="<?php echo $row->id_harga ?>">
													<label for="<?php echo $row->id_harga ?>">
														<?php echo $row->harga ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Tipe Kamar</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_tipe_kamar")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_tipe_kamar ?>" name="tipe_kamar"
														value="<?php echo $row->id_tipe_kamar ?>">
													<label for="<?php echo $row->id_tipe_kamar ?>">
														<?php echo $row->tipe_kamar ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Review</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_review")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_review ?>" name="review"
														value="<?php echo $row->id_review ?>">
													<label for="<?php echo $row->id_review ?>">
														<?php echo $row->review ?></label><br>
													<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group d-flex" style="font-size: 15px;">
												<label class="col-md-3 control-label"
													style="text-align:left;"><b>Kelas / Bintang</b></label>
												<div class="col-md-10">
													<?php
													$result= $this->db->query("SELECT * FROM tb_kelas")->result();
													?>
													<?php foreach ($result as $row) { ?>
													<input type="radio" id="<?php echo $row->id_kelas ?>" name="kelas"
														value="<?php echo $row->id_kelas ?>">
													<label for="<?php echo $row->id_kelas ?>">
														<?php echo $row->kelas ?></label><br>
													<?php } ?>
													</select>
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

	<?php
	$this->load->view('template_frontend/footer');
	?>
	<?php
	$this->load->view('template_frontend/js');
	?>



	<!-- loader -->


</body>

</html>
