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
		EDIT DATA USER

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
			<form class="form-horizontal" action="<?php echo site_url('admin_area/C_user/proses_edit_user/'.$data_edit->nip_user); ?>" method="post" enctype='multipart/form-data'>
				<!-- <?php echo form_open_multipart('C_user/proses_tambah_data_user');?> -->
					<?php #foreach ($data_edit as $edit) {
			# code...
						$nip_user = $data_edit->nip_user;
						$nama = $data_edit->nama;
						$jabatan = $data_edit->jabatan;
						$cabang = $data_edit->cabang;
						$level = $data_edit->level;
						$status = $data_edit->status;
						$password = $data_edit->password;
		#}
						?>
						<div class="form-group">
							<label class="col-md-2 control-label" style="text-align:left;">NIP USER</label>
							<div class="col-md-5"><input class="form-control" type="text" name="nip_user" value="<?php echo $nip_user; ?>" onkeyup="this.value = this.value.toUpperCase()" required/></div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" style="text-align:left;">NAMA</label>
							<div class="col-md-5"><input class="form-control" type="text" name="nama" value="<?php echo $nama; ?>" onkeyup="this.value = this.value.toUpperCase()" required/></div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" style="text-align:left;">JABATAN</label>
							<div class="col-md-5">
								<select class="form-control" name="jabatan" id="jabatan" onchange="proses()">
									<option><?php echo $jabatan; ?></option>
									<?php 
									$result= $this->db->query("SELECT * FROM tb_jabatan")->result();
									?>
									<?php foreach ($result as $row) { ?>
									<option value="<?php echo $row->jabatan ?>"><?php echo $row->jabatan ?></option>
									<?php } ?>

								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label" style="text-align:left;">CABANG</label>
							<div class="col-md-5"><select class="form-control" name="cabang">
								<option><?php echo $cabang; ?></option>
								<?php if ($cabang == "Jember") {
									?>
									<option>Banyuwangi</option>
									<?php 
								} 
								else {
									?>
									<option>Jember</option>
									<?php 	
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" style="text-align:left;">LEVEL</label>
						<div class="col-md-5"><select class="form-control" name="level">
							<option><?php echo $level ?></option>
							<option>administrator</option>
							<option>dosen</option>
							<option>mahasiswa</option>
						</select>
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-2 control-label" style="text-align:left;">FOTO USER</label>
					<div class="col-md-5"><input type="file" name="berkas"></div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" style="text-align:left;">PASSWORD</label>
					<div class="col-md-5"><input class="form-control" type="password" name="password" value="<?php echo ''?>"/></div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" style="text-align:left;">Status</label>
					<div class="col-md-5"><select class="form-control" name="status">
						<option><?php echo $status ?></option>
						<option>Tidak Aktif</option>
					</select>
				</div>
			</div>
			<br>
			<div class="col-md-2"><input type="submit" class="btn btn-block btn-primary" value="save"></div>
			<div class="col-md-2"><a href="<?php echo site_url('C_user');?>" class="btn btn-block btn-primary">back</a></div>

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

