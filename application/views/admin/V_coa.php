
<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<?php 
$session = $this->session->userdata;
?>
<section class="content-header">
  <h1>
    Data COA SIKU
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
       <div class="box-body">
        <div class="callout callout-info">
          <h4>Info <br></h4>
          Data COA Universitas Muhammdiyah Sidoarjo
        </div>
        <!-- /.box-header -->

        <a href="<?php echo site_url('admin_area/C_coa/tambah_data_coa');?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah Data COA</a>
        <div class="box-body table-responsive">
          <table id="table_utama" class="table table-bordered table-striped dataTable">
            <thead>
              <tr>
                <th width="8px">No</th>
                <th width="8px">No COA</th>
                <th width="8px">Level COA</th>
                <th width="8px">Parent ID COA</th>
                <th width="8px">ID Kategori</th>
                <th width="8px">Fheader</th>
                <th width="8px">Faktif</th>
                <th width="150px">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php
             $no = 1;
             if ($daftar_coa == 0) {
               echo "<script>alert('Data COA kosong')</script>";
             }

             else {
               /*while($data = mysql_fetch_array($query))*/
               foreach ($daftar_coa as $row) {
                ?>
                <tr>  
                  <td style="text-align: center;"><?php echo $no;?></td>
                  <td><?php echo $row->no_coa ?></td>
                  <td><?php echo $row->level_coa ?></td>
                  <td><?php echo $row->parentID_coa?></td>
                  <td><?php echo $row->id_kategori?></td>
                  <?php
                    if ($row->fheader == '1') {
                    ?>
                    <td>header</td>
                    <?php
                    } else {
                      ?>
                      <td>detail</td>
                      <?php
                    }
                  ?> 
                   <?php
                    if ($row->faktif == '1') {
                    ?>
                    <td>aktif</td>
                    <?php
                    } else {
                      ?>
                      <td>non aktif</td>
                      <?php
                    }
                  ?>  
                  <td>
                    <a href="<?php echo site_url('admin_area/C_coa/edit_data_coa/'.$row->no_coa);?>" span class="btn btn-success"><span class=" glyphicon glyphicon-edit"> Edit</span></a>
                    <a href="<?php echo site_url('admin_area/C_coa/hapus_data_coa/'.$row->no_coa);?>" span class="btn btn-danger"><span class=" glyphicon glyphicon-minus"> Hapus</span></a>
                  </td>
                </tr>
                <?php
                $no++;
              }
            }
            ?>
          </tbody>
        </table>

      </div>
    </div>
    <!-- /.box-body -->
  </section>



  <?php 
  $this->load->view('template/js');
  ?>
  <script type="text/javascript">
    $(document).ready( function () {
      $('#table_utama').DataTable();
    } );
  </script>

  <!-- iCheck -->

  <?php
  $this->load->view('template/foot');
  ?>