<?php
// foreach ($daftar_hotel as $row) {
// 	echo $row['nama_hotel'];
// }
// die();
?>
<!--tambahkan custom css disini-->
<!DOCTYPE html>
<html lang="en">
<?php
$this->load->view('template_frontend/head');
?>
<?php
$this->load->view('template_frontend/topbar_member');
?>

<body>

	<!-- akhir menu aplikasi -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-12 heading-section ftco-animate">
					<!-- <span class="subheading">Recommendation Hotel</span> -->

					<h2 class="mb-4"><strong>Top</strong> Rekomendasi untuk Anda</h2>
					Rekomendasi hotel merupakan rekomendasi yang di berikan oleh sistem dengan penggunaan algoritma mesin pintar
					sesuai dengan kebutuhan yang telah anda masukkan Anda. Proses rekomendasi hotel di lakukan dengan cara
					melihat kemiripan kebutuhan Anda dengan pengguna sebelumnya dengan model CBR. Nilai kemiripan semakin tinggi akan
					ditampilkan pada urutan pertama.
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Lihat Perhitungan
					</button>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container-fluid col-md-10">
				<div class="row">
					<?php
					foreach ($result['result'] as $row) {
						// var_dump($result['result']);
						// print_r($result['result']);
						// die(); 
						
					?>

						<div class="col-sm col-md-6 col-lg ftco-animate">
							<div class="destination">
								<a href="<?php echo site_url('Home/detail_hotel/' . $row['id_hotel'] . '?param=' . htmlentities(json_encode($param))) ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../assets/images/card/<?php echo $row['foto'] ?>);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<?php
								//echo $row['image'];
								var_dump($row);
								?>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="<?php echo site_url('Home/detail_hotel/' . $row['id_hotel']) ?>"><?php echo $row['nama_hotel'] ?></a></h3>
											<p class="rate">
												<?php
												$persentase = $row['persentase'];
												if ($persentase > 80 and $persentase < 100) {
												?>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
												<?php
												} elseif ($persentase > 60 and $persentase < 80) {
												?>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
												<?php
												} elseif ($persentase > 40 and $persentase < 60) {
												?>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
												<?php
												} elseif ($persentase > 20 and $persentase < 40) {
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
												<span><?php echo $persentase ?>%</span>
											</p>
										</div>
										<div class="two">
											<span class="price per-price">
												<?php echo $row['harga'] ?></span>
										</div>
									</div>
									<p>Kemiripan : <?php echo round($persentase, 3) ?>%</p>
									<hr>
									<p class="bottom-area d-flex">
										<span><i class="icon-map-o"></i> <?php echo $row['lokasi'] ?></span>
										<span class="ml-auto"><a href="<?php echo site_url('Home/detail_hotel/' . $row['id_hotel']) ?>">Book Now</a></span>
									</p>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Perhitungan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12">
							<h5>Pilihan Kebutuhan Hotel</h5>
						</div>
						<!-- <div class="col-6">
							<div class="form-group">
								<label>Daerah Anda</label>
								<input type="text" class="form-control" readonly value="<?php echo $daerah_anda->nm_lokasi; ?>">
							</div>
						</div> -->
						<div class="col-12">
							<div class="form-group">
								<label>Tujuan Anda</label>
								<input type="text" class="form-control" readonly value="<?php echo $tujuan_anda->nm_lokasi; ?>">
							</div>
						</div>
						<?php
						foreach ($param as $key => $value) {

							if (is_array($value)) {
								echo '
								<div class="col-4">
								';

								if ($key == 'kp') {
									echo '<div class="badge badge-primary"> Kebutuhan Prioritas </div>';
								} else if ($key == 'ku') {
									echo '<div class="badge badge-info"> Kebutuhan Utama </div>';
								} else if ($key == 'kt') {
									echo '<div class="badge badge-warning"> Kebutuhan Tambahan </div>';
								}
								foreach ($value as $key_value => $value_result) {
									switch ($key_value) {
										case 'review':
											echo '<li> Review : ' . $review->review . '</li>';
											break;
										case 'kelas';
											echo '<li> Kelas : ' . $kelas->kelas . '</li>';
											break;
										case 'harga';
											echo '<li> Harga : ' . $harga->harga . '</li>';
											break;
										case 'tipe_kamar';
											echo '<li> Tipe Kamar : ' . $tipe_kamar->tipe_kamar . '</li>';
											break;
										default:
											echo '<li> ' . ucwords(implode(' ', explode('_', $value_result))) . '  </li>';
											break;
									}
								}
								echo "</div>";
							}
						}
						?>
						<div class="col-12">
							<hr>
							<h4>Hitung Lokasi</h4>
							<div class="row">
								<?php
								$i = 1;
								foreach ($result['perhitungan_lokasi'] as $key => $value) {
									echo '
											<div class="col-2">
												&nbsp;
											</div>
											<div class="col-8">
												<h5 class="bg-info text-center">' . ($i++) . '</h5>
												<table class="table">
													<thead>
														<th>Jenis</th>
														<th>Lokasi</th>
														<th>Lat</th>
														<th>Long</th>
													</thead>
													<tbody>
														<tr>
															<td>Lokasi Asal</td>
															<td>' . $value['lokasi_asal']->nm_lokasi . '</td>
															<td>' . $value['lokasi_asal']->lat . '</td>
															<td>' . $value['lokasi_asal']->long . '</td>
														</tr>
														<tr>
															<td>Lokasi Pembanding</td>
															<td>' . $value['lokasi_pembanding']->nm_lokasi . '</td>
															<td>' . $value['lokasi_pembanding']->lat . '</td>
															<td>' . $value['lokasi_pembanding']->long . '</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-2">
												&nbsp;
											</div>
											<div class="col-2">
											&nbsp;
											</div>
											<div class="col-8">
												<li>delta_lat = ' . $value['delta_lat'] . '</li>
												<li>delta_long = ' . $value['delta_long'] . '</li>
												<li>nilai_a = ' . $value['nilai_a'] . '</li>
												<li>nilai_b = ' . $value['nilai_b'] . '</li>
												<li>nilai_c = ' . $value['nilai_c'] . '</li>
												<li>nilai_d = ' . $value['nilai_d'] . '</li>
												<li>Hasil akhir = ' . $value['result'] . '</li>
												<br>
											</div>
											<div class="col-2">
											&nbsp;
											</div>
										';
								}
								?>
							</div>
							<hr>
							<h4>Hitung Metode</h4>
							<h4>
								<div class="row">
									<?php
									foreach ($result['result'] as $key => $value) {
										echo '
										<div class="col-2">
										&nbsp;
										</div>
										<div class="col-8">
										<div class="badge badge-primary">' . ($key + 1) . '. ' . $value['nama_hotel'] . ' [' . $value['persentase'] . '%]' . '</div>
										<ul style="font-size:14px;">
											<li> Harga :' . $value['harga'] . '</li>
											<li> Lokasi :' . $value['lokasi'] . '</li>
											<li> Review :' . $value['skor_review'] . '</li>
											<li> Tipe Kamar :' . $value['tipe_kamar'] . '</li>
										</ul>
										<table class="table table-responsive" style="font-size:14px; width:100%">
													<thead>
														<th>Nama</th>
														<th>Bobot</th>
														<th>Kemiripan</th>
														<th>Total</th>
													</thead>
													<tbody>
										';;
										foreach ($value['perhitungan']['detail'] as $key_perhitungan => $item) {
											$index_perhitungan = explode('_', $key_perhitungan);
											$index_perhitungan = implode(' ', $index_perhitungan);
											$index_perhitungan = strtoupper($index_perhitungan);
											echo '
													<tr>
														<td>' . $index_perhitungan . '</td>
														<td>' . $item['bobot'] . '</td>
														<td>' . $item['kemiripan']['result'] . '</td>
														<td>' . $item['total'] . '</td>
													</tr>
											';
										}
										echo '
													</tbody>
												</table>
												<li style="font-size:12px;">
													Hasil Perhitungan : <br>
													hasil = sum total / sum bobot;<br>
													dari hasil diambil 3 koma
													$hasil = ' . $value['perhitungan']['sum_total'] . ' / ' . $value['perhitungan']['sum_bobot'] . ' <br>
													$hasil = ' . round($value['perhitungan']['skor'], 3) . '<br>
													$data_training_id = ' . $value['id_data_training'] . '

												</li>
										</div>
										<div class="col-2">&nbsp;</div>
										<hr>';
									}
									?>
								</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<?php
	$this->load->view('template_frontend/footer');
	?>
	<?php
	$this->load->view('template_frontend/js');
	?>
	<!-- loader -->


</body>

</html>