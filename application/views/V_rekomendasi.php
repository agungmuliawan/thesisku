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

<style>
	/* .chartWrapper {
		position: relative;
	}

	.chartWrapper>canvas {
		position: absolute;
		left: 0;
		top: 0;
		pointer-events: none;
	}

	.chartAreaWrapper {
		width: 600px;
		overflow-x: scroll;
	} */

	div.chartWrapper {
		position: relative;
		overflow: auto;
		width: 100%;
	}

	div.chartContainer {
		position: relative;
		height: 500px;
	}
</style>

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
			<div class="chartWrapper">
				<div class="chartContainer">
					<canvas id="myChart" height="500;"></canvas>
				</div>
			</div>
			<div>
				<canvas id="myChartHarvest" height="700;"></canvas>
			</div>
			<!-- <canvas id="myChartAxis" width="0"></canvas> -->
			<div class="container-fluid col-md-10 pt-5">
				<div class="row">
					<?php
					foreach ($result['result'] as $row) {
						// ddd($row);
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
								// var_dump($row);
								?>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="<?php echo site_url('Home/detail_hotel/' . $row['id_hotel']) ?>"><?php echo $row['nama_hotel'] ?></a></h3>
											<p class="rate">
												<?php
												$persentase = $row['persentase'];
												$algoritma = ($row['perhitungan']['algoritmaCollaborativeFiltering']['result'] * 100);
												$hybrid = ($row['perhitungan']['total_result_hybrid'] * 100);

												$clas_persentase = badgeClass($persentase);
												$clas_algoritma = badgeClass($algoritma);
												$clas_hybrid = badgeClass($hybrid);

												if ($persentase >= 80 and $persentase <= 100) { #success
												?>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
												<?php
												} elseif ($persentase >= 60 and $persentase < 80) { #primary
												?>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
												<?php
												} elseif ($persentase >= 40 and $persentase < 60) { #info
												?>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
												<?php
												} elseif ($persentase >= 20 and $persentase < 40) { #warning
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
									<p>Kemiripan dengan metode KNN : <span class="btn-clas-persentase <?php echo $clas_persentase; ?>"><?php echo round($persentase, 3) ?>% </span> </p>
									<p>Kemiripan dengan metode algoritmaCollaborativeFiltering : <span class="btn-clas-algoritma <?php echo $clas_algoritma; ?>"><?php echo round($algoritma, 3) ?>% </span> </p>
									<p>Kemiripan dengan metode total_result_hybrid : <span class="btn-c-as_hybrid<?php echo $clas_hybrid; ?>"><?php echo round($hybrid, 3) ?>% </span> </p>
									<button class="btn-detail-perhitungan btn btn-info" data-id="<?php echo $row['id_data_training']; ?>" data-perhitungan='<?php echo json_encode($row['perhitungan']); ?>'>
										Lihat Perhitungan Detail
									</button>
									<hr>
									<p class=" bottom-area d-flex">
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


	<div class="modal fade" id="perhitungan" tabindex="-1" role="dialog" aria-labelledby="perhitunganLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="perhitunganLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body content-body-perhitungan-detail">

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

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
		$(document).on('click', '.btn-detail-perhitungan', function() {
			let data = $(this).data('perhitungan');
			let id = $(this).data('id')
			$("#perhitunganLabel").html(`Hasil Perhitungan - ${id}`)
			$('#perhitungan').modal('show');
			let html = ``;
			$('.content-body-perhitungan-detail').html(html)
			$.each(data, function(key, value) {
				// console.log(key, value);
				if (typeof value == 'object') {
					// html += `${key} : <br>` + (JSON && JSON.stringify ? JSON.stringify(value) : String(value)) + '<br />';
					html += `${key} : <br>`;
					$.each(value, function(keyValue, valValue) {
						html += `-- ${keyValue} <br>` + (JSON && JSON.stringify ? JSON.stringify(valValue) : String(valValue)) + '<br>';
					});
				} else {
					html += `${key} : ` + value + '<br />';
				}
			});

			$(".content-body-perhitungan-detail").html(html)
			// console.log(data)
		})
		// const config = {
		// 	type: 'line',
		// 	data: data,
		// };
		// const labels = Utils.months({
		// 	count: 7
		// });
		// const data = {
		// 	labels: labels,
		// 	datasets: [{
		// 		label: 'My First Dataset',
		// 		data: [65, 59, 80, 81, 56, 55, 40],
		// 		fill: false,
		// 		borderColor: 'rgb(75, 192, 192)',
		// 		tension: 0.1
		// 	}]
		// };

		const ctx = document.getElementById('myChart');
		const ctxHarvest = document.getElementById('myChartHarvest');
		let data = {
			labels: <?php echo json_encode($arr_nama_hotel); ?>,
			datasets: [{
					label: 'KNN',
					data: <?php echo json_encode($arr_knn); ?>,
					borderWidth: 1
				},
				{
					label: 'algoritmaCollaborativeFiltering',
					data: <?php echo json_encode($arr_algoritma); ?>,
					borderWidth: 1
				},
				{
					label: 'hybrid',
					data: <?php echo json_encode($arr_hybrid); ?>,
					borderWidth: 1
				}
			]
		}
		// console.log(data)
		// new Chart(ctx, {
		// 	type: 'line',
		// 	data: data,
		// 	options: {
		// 		scales: {
		// 			y: {
		// 				beginAtZero: true
		// 			}
		// 		},
		// 		responsive: true,
		// 		maintainAspectRatio: false
		// 	},
		// });

		var xAxisLabelMinWidth = 15; // Replace this with whatever value you like
		var myChart = new Chart(document.getElementById('myChart').getContext('2d'), {
			type: 'line',
			data: data,
			options: {
				responsive: true,
				maintainAspectRatio: false
			}
		});
		fitChart()

		function fitChart() {
			var chartCanvas = document.getElementById('myChart');
			var maxWidth = chartCanvas.parentElement.parentElement.clientWidth;
			var width = Math.max(myChart.data.labels.length * xAxisLabelMinWidth, maxWidth);

			chartCanvas.parentElement.style.width = width + 'px';
		}

		let dataHarvest = {
			labels: <?php echo json_encode($arr_nama_lokasi); ?>,
			datasets: [{
				label: 'Harvest',
				data: <?php echo json_encode($arr_harvest); ?>,
				borderWidth: 1
			}]
		}
		console.log(dataHarvest);
		new Chart(ctxHarvest, {
			type: 'line',
			data: dataHarvest,
			options: {
				scales: {
					y: {
						beginAtZero: true
					}
				},
				responsive: true,
				maintainAspectRatio: false
			},
		});
	</script>

</body>

</html>
