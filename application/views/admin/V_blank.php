<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Berada - Sistem Informasi Keuangan
    <small>Universitas Muhammdiyah Jogyakarta</small>
    
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="box">
      <!--   <div class="box-header with-border">
          <?php 
          $panggil = $this->session->userdata();
          ?>
          <h3 class="box-title">Selamat Datang &nbsp;<b><i> <?php echo $panggil['nama']; ?></b></i></h3>
        </div> -->
        <div class="box-body">
          <div class="callout callout-info">
            <h4>Selamat Datang &nbsp;<b><i> <?php echo $panggil['nama']; ?></b></i></h4>
            <p align="justify" style="font-size: 16px">
              Selamat Datang di Sistem Informasi Keungan Universitas Muhammdiyah Sidoarjo
              Segala aktivitas pengguna telah direkam dan di simpan kedalam <i>log</i> sistem kami untuk menghindari hal yang tidak diinginkan. Untuk itu kita lebih berhati-hati dalam melakukan perubahan data master, perubahan data akademik, transaksi keuangan dan sebagainya. Terima kasih
            </p>
          </div>

        </div>
    </div>

  </section><!-- /.content -->

  <?php 
  $this->load->view('template/js');
  ?>
  <!--tambahkan custom js disini-->
  <?php
  $this->load->view('template/foot');
  ?>