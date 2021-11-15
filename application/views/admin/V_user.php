
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
    Data User SIAKAD
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
       <!-- /.box-header -->
       <div class="box-body">
        <div class="callout callout-info">
          <h4>Perhatian <br></h4>
          Data user Login Politeknik Mitra Global. Isi dengan <b><u>berhati-hati</u></b> karena menyangkut user yang bersangkutan
        </div>
        <a href="<?php echo site_url('admin_area/C_user/tambah_data_user');?>"class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah User</a>
        <div class="box-body table-responsive">
          <table id="table_utama" class="table table-bordered table-striped dataTable">
            <thead>
              <tr>
                <th width="8px">No</th>
                <th width="8px">NIP</th>
                <th width="8px">Nama</th>
                <th width="8px">Jabatan</th>
                <th width="8px">Cabang</th>
                <th width="8px">Level</th>
                <th width="8px">Foto</th>
                <th width="8px">Status</th>
                <th width="8px">Aksi</th>

              </tr>
            </thead>
            <tbody>
             <?php
             $no = 1;
             if ($daftar_user == 0) {
               echo "<script>alert('Data User kosong')</script>";
             }

             else {
               /*while($data = mysql_fetch_array($query))*/
               foreach ($daftar_user as $row) {
                ?>
                <tr>  
                  <td style="text-align: center;"><?php echo $no;?></td>
                  <td><?php echo $row->nip_user ?></td>
                  <td><?php echo $row->nama ?></td>
                  <td><?php echo $row->jabatan?></td>
                  <td><?php echo $row->cabang?></td>
                  <td><?php echo $row->level?></td>
                  <td><img class="user-image" width="50px" height="50px" src="<?php echo base_url().'assets/img_user/'.$row->foto ?>"></td>
                  <td><?php echo $row->status?></td>        
                  <td>
                   <a href="<?php echo site_url('admin_area/C_user/edit_data_user/'.$row->nip_user);?>" span class="btn btn-success"><span class=" glyphicon glyphicon-edit"> Edit</span></a>
                   <a href="<?php echo site_url('admin_area/C_user/hapus_data_user/'.$row->nip_user);?>" span class="btn btn-danger">Hapus</a>
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