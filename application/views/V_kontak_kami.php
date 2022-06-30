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

  <div class="hero-wrap js-fullheight" style="background-image: url('../img/destination-4.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hubungi Kami</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hubungi Kami</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Informasi Kontak</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Jalan:</span>Slamet Riyadi Perumahan Pesona Regency AD-43, Patrang, Jember </p>
        </div>
        <div class="col-md-3">
          <p><span>Telphone:</span> <a href="tel://1234567920">089 610 345 572</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">agungmuliawan96@gmail.com</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">gotel.com</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </section>
  <?php
  $this->load->view('template_frontend/footer');
  ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <?php
  $this->load->view('template_frontend/js');
  ?>
</body>

</html>