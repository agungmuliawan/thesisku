
<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<section class="content-header">
	<h1>
		EDIT DATA JURUSAN

	</h1>
</section>
<!-- <style type="text/css">
	.contoh1::-webkit-input-placeholder{
		color: red;
		.box-dua{
			height: 100px;
			width: 200px;
			margin-left: 70px;
		}
	}
</style> -->
<section class="content">

	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">

			<div class="box-tools pull-right">
			</div>
		</div>
		<div class="container">
			<form class="form-horizontal" action="<?php echo site_url('admin_area/C_jurusan/proses_edit_jurusan/'.$data_edit->id_prodi); ?>" method="post" enctype='multipart/form-data'>
				<!-- <?php echo form_open_multipart('C_user/proses_tambah_data_user');?> -->
					<?php #foreach ($data_edit as $edit) {
			# code...
						$kode_prodi = $data_edit->kode_prodi;
						$nama_prodi = $data_edit->nama_prodi;
						$ketua_prodi = $data_edit->ketua_prodi;
						$ketua_prodi = $data_edit->ketua_prodi;
						$jenjang_prodi = $data_edit->jenjang_prodi;
						$gelar_prodi = $data_edit->gelar_prodi;
						$sks_prodi = $data_edit->sks_prodi;
		#}
						?>
						<div class="form-group">
							<label class="col-md-2 control-label" style="text-align:left;">KODE PRODI</label>
							<div class="col-md-5"><input class="form-control" type="text" name="kode_prodi" value="<?php echo $kode_prodi; ?>" onkeyup="this.value = this.value.toUpperCase()" required/></div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" style="text-align:left;">NAMA PRODI</label>
							<div class="col-md-5"><input class="form-control" type="text" name="nama_prodi" value="<?php echo $nama_prodi; ?>" onkeyup="this.value = this.value.toUpperCase()" required/></div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" style="text-align:left;">KETUA PRODI</label>
							<div class="col-md-5"><input class="form-control" type="text" name="ketua_prodi" value="<?php echo $nama_prodi; ?>" onkeyup="this.value = this.value.toUpperCase()" required/></div>
						</div>
						<div class="col-md-2"><input type="submit" class="btn btn-block btn-primary" value="save"></div>
						<div class="col-md-2"><a href="<?php echo site_url('admin_area/C_jurusan');?>" class="btn btn-block btn-primary">back</a></div>

					</script>

				</form>
			</div>


		</section><!-- /.content -->
	</div><!-- /.box -->

	<?php 
	$this->load->view('template/js');
	?>
	<script>
		function hanyaAngka(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
			return true;
		}
	</script>


	<!--tambahkan custom js disini-->
	<?php
	$this->load->view('template/foot');
	?>

