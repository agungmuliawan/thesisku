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
        Tambah Data COA

    </h1>
</section>
<section class="content">
    <form id="form1" name="form1" <?php echo form_open_multipart('admin_area/C_coa/proses_tambah_data_coa') ?> <label>
        Jenis Aktiva: </label>
        <select id="jenis_aktiva" name="jenis_aktiva">
            <option value="0">-Pilih Data-</option->
            <option value="1">Aktiva</option>
            <option value="2">Pasiva</option>
        </select>
        <br>
        <label>Jenis Aset: </label>
        <select id="jenis_aset" name="jenis_aset">
            <option value="0">-Pilih Data-</option->
            <option value="1">Tetap</option>
            <option value="2">Lancar</option>
            <option value="3">Tidak berwujud</option>
        </select>
        <br>
        <label>Jenis Aset: </label>
        <select id="kategori" name="kategori" onchange="tampilkan()">
            <option value="0">Pilih Data</option>
            <option value="01">Kas dan Bank</option>
            <option value="02">Piutang</option>
        </select>
        <br />
        <label>Pilih Header 1: </label>
        <select id="tampil" name="tampil" onchange="tampilkan2()">
        </select>
        <br>
        <label>Pilih Detail: </label>
        <select id="tampil_2" name="tampil_2">
        </select>
        <br>
        <label>Nama COA</label>
        <input type="text" name="nama_coa" placeholder="Input Nama COA..." required />
        <br>
        <label>Level COA: </label>
        <select id="level_coa" name="level_coa">
            <option value="1">Level 1</option>
            <option value="2">Level 2</option>
            <option value="3">Level 3</option>
        </select>
        <br>
        <label>ParentID_coa: </label>
        <select id="parentID_coa" name="parentID_coa">
            <option value="1">Level 1</option>
            <option value="2">Level 2</option>
            <option value="3">Level 3</option>
        </select>
        <br>
        <label>ID Kategori: </label>
        <select id="id_kategori" name="id_kategori">
            <option value="1">Level 1</option>
            <option value="2">Level 2</option>
            <option value="3">Level 3</option>
        </select>
        <br>
        <label>FHeader </label>
        <select id="fheader" name="fheader">
            <option value="1">Level 1</option>
            <option value="2">Level 2</option>
            <option value="3">Level 3</option>
        </select>
        <br>
        <label>Faktif </label>
        <select id="faktif" name="faktif">
            <option value="1">Level 1</option>
            <option value="2">Level 2</option>
            <option value="3">Level 3</option>
        </select>
        <br>
            <input type="submit" value="Simpan">
    </form>



</section>
<script>
    function tampilkan() {
        var dataku = document.getElementById("form1").kategori.value;
        if (dataku == "01") {
            document.getElementById("tampil").innerHTML =
                "<option value='01'>Kas Besar</option><option value='02'>Kas Kecil</option><option value='03'>Bank</option>";
        } else if (dataku == "02") {
            document.getElementById("tampil").innerHTML =
                "<option value='04'>Piutang Usaha</option><option value='05'>piutang dosen dan karyawan</option>";
        }
    }

    function tampilkan2() {
        var dataku2 = document.getElementById("form1").tampil.value;
        if (dataku2 == "01") {
            document.getElementById("tampil_2").innerHTML =
                "<option value='001'>Kas Besar A</option><option value='002'>Kas Besar B</option>";
        } else if (dataku2 == "02") {
            document.getElementById("tampil_2").innerHTML =
                "<option value='001'>Kas kecil A</option><option value='002'>Kas kecil B</option>";
        } else if (dataku2 == "03") {
            document.getElementById("tampil_2").innerHTML =
                "<option value='001'>Bank A</option><option value='002'>Bank B</option>";
        } else if (dataku2 == "04") {
            document.getElementById("tampil_2").innerHTML =
                "<option value='001'>Piutang dp2</option><option value='002'>Piutang spp</option>";
        } else if (dataku2 == "05") {
            document.getElementById("tampil_2").innerHTML =
                "<option value='001'>Piutang Dosen</option>";
        }
    }
</script>
<?php
$this->load->view('template/foot');
die();
?>


<section class="content-header">
    <h1>
        Tambah Data COA

    </h1>
</section>
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="container">
            <br>
            <div class="form-horizontal">
                <?php echo form_open_multipart('admin_area/C_coa/proses_tambah_data_coa'); ?>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Input COA</label>
                    <div class="col-md-5"><input class="form-control" type="text" name="no_coa"
                            placeholder="Input No COA..." required /></div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Nama COA</label>
                    <div class="col-md-5"><input class="form-control" type="text" name="nama_coa"
                            placeholder="Input Nama COA..." required /></div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Level COA</label>
                    <div class="col-md-5"><select class="form-control" name="level_coa">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Parent ID COA</label>
                    <div class="col-md-5"><select class="form-control" name="parentID_coa">
                            <option>Pembayaran</option>
                            <option>Aset</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">ID Kategori</label>
                    <div class="col-md-5"><select class="form-control" name="id_kategori">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">F Header</label>
                    <div class="col-md-5"><select class="form-control" name="fheader">
                            <option value="1">header</option>
                            <option value="0">detail</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">F Aktif</label>
                    <div class="col-md-5"><select class="form-control" name="faktif">
                            <option value="1">aktif</option>
                            <option value="0">non aktif</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Jenis Aktiva</label>
                    <div class="col-md-5"><select class="form-control" name="digit1">
                            <option value="1">Aktiva - 1</option>
                            <option value="2">Passiva - 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Kelompok Aset</label>
                    <div class="col-md-5"><select class="form-control" name="digit2">
                            <option value="1">Aset lancar - 1</option>
                            <option value="2">Aset tetap - 2</option>
                            <option value="3">Aset tidak berwujud - 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Jenis Aset</label>
                    <div class="col-md-5"><select class="form-control" name="digit3" onchange="tampilkan()">
                            <option value="01">Kas dan Bank - 1</option>
                            <option value="02">Piutang - 2</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Detail Jenis Aset</label>
                    <div class="col-md-5"><select class="form-control" name="digit4">
                            <option value="01">Kas Besar - 01</option>
                            <option value="02">Kas Kecil - 02</option>
                            <option value="03">Bank - 03</option>
                            <option value="04">Piutang Usaha - 04</option>
                            <option value="05">Piutang Dosen dan Karyawan - 05</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" style="text-align:left;">Item Detail Jenis Aset</label>
                    <div class="col-md-5"><select class="form-control" name="digit5">
                            <option value="001">Kas Besar A - 001</option>
                            <option value="002">Kas Kecil B - 002</option>
                            <option value="001">Kas Kecil A- 001</option>
                            <option value="002">Kas Kecil B - 002</option>
                        </select>
                    </div>
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