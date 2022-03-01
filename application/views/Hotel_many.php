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
	<div class="hero-wrap js-fullheight" style="background-image: url('../img/hotel-1.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
					<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
							class="mr-2"><a href="<?php echo site_url('Home')?>">Home</a></span> <span>Hotel</span></p>
					<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
				</div>
			</div>
		</div>
	</div>


	<section class="ftco-section ftco-degree-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 sidebar">
					<div class="sidebar-wrap bg-light ftco-animate">
						<h3 class="heading mb-4">Find City</h3>
						<form action="#">
							<div class="fields">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Lokasi, Kota">
								</div>
								<div class="form-group">
									<div class="select-wrap one-third">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" id="" class="form-control" placeholder="Keyword search">
										<?php
										$result= $this->db->query("SELECT * FROM tbl_hotel group by lokasi")->result();
										?>
										<?php foreach ($result as $row) { ?>
										<option value="<?php echo $row->lokasi ?>"><?php echo $row->lokasi ?></option>
										<?php } ?>
										</select>
									</div>
								</div>
								<!-- <div class="form-group">
									<input type="text" id="checkin_date" class="form-control" placeholder="Date from">
								</div>
								<div class="form-group">
									<input type="text" id="checkin_date" class="form-control" placeholder="Date to">
								</div> -->
								<div class="form-group">
									<div class="range-slider">
										<span>
											<input type="number" value="25000" min="0" max="120000" /> -
											<input type="number" value="50000" min="0" max="120000" />
										</span>
										<input value="1000" min="0" max="120000" step="500" type="range" />
										<input value="50000" min="0" max="120000" step="500" type="range" />
										</svg>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Search" class="btn btn-primary py-3 px-5">
								</div>
							</div>
						</form>
					</div>
					<div class="sidebar-wrap bg-light ftco-animate">
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
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<?php
						foreach ($daftar_hotel as $row) {
							# code...
						
						?>
						<div class="col-md-4 ftco-animate">
							<div class="destination">
								<a href="<?php echo site_url('Home/detail_hotel/'.$row->id_hotel)?>"
									class="img img-2 d-flex justify-content-center align-items-center"
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
					<div class="row mt-5">
						<div class="col text-center">
							<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
							</div>
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
