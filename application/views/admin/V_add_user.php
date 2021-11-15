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
		Tambah Data User

	</h1>
</section>
<section class="content">

	<!-- Default box -->
	<div class="box">
		<div class="callout callout-danger">
			<h4>Perhatian <br></h4>
			Data NIP/NIM/NIDN <strong><u>WAJIB SAMA DENGAN</u></strong> Data NIM/NIDN user yang  
		</div>
		<div class="container">
			<!-- <form class="form-horizontal" action="<?php echo site_url('C_data_master/proses_tambah_data_user'); ?>" method="POST"> -->
				<br>
				<div class="form-horizontal">
					<?php echo form_open_multipart('admin_area/C_user/proses_tambah_data_user');?>
					<div class="form-group">
						<label class="col-md-2 control-label" style="text-align:left;">NIP/NIM/NIDN</label>
						<div class="col-md-5"><input class="form-control" type="text" name="nip_user"  placeholder="Input NIM / NIDN..."required/></div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" style="text-align:left;">NAMA USER</label>
						<div class="col-md-5"><input class="form-control" type="text" name="nama"  placeholder="Input Nama Username..."required/></div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" style="text-align:left;">JABATAN</label>
						<div class="col-md-5">
							<select class="form-control" name="jabatan" id="jabatan" onchange="proses()">
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
							<option>Jember</option>
							<option>Banyuwangi</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" style="text-align:left;">LEVEL</label>
					<div class="col-md-5"><select class="form-control" name="level">
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
				<div class="col-md-5"><input class="form-control" type="password" name="password" placeholder="Input Password User..."required/></div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label" style="text-align:left;">STATUS</label>
				<div class="col-md-5"><select class="form-control" name="status">
					<option>aktif</option>
					<option>tidak aktif</option>
				</select>
			</div>
		</div>

		<br>
		<div class="col-md-2 form-group">
			<input type="submit" value="Simpan" class="btn btn-block btn-primary">
		</div>
	</div>
	<br>
	<br>
	<br>
</div><!-- /.box -->

</section><!-- /.content -->

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

