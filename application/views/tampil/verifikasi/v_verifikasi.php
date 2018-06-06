<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Verifikasi Berkas</h3><br><br>
        <!-- <a href="<?php echo base_url('#')?>" class="btn btn-primary pull-left" style="width: 30%;">Tambah Data Petugas</a> -->

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenjang</th>
            <!-- <th>No Telp</th> -->
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
              <?php
    					$n=1;
    						foreach ($show as $i) {
    					 ?>
    					<tr>
    						<td><?php echo $n; ?></td>
    						<td><?php echo $i->NAMA_USER; ?></td>
    						<td><?php echo $i->NAMA_JENJANG; ?></td>
    						<!-- <td><?php echo $i->NO_TELP ?></td> -->
    						<td style="text-align: center;">
    							<a class="btn btn-info " onclick="validasijs('<?php echo $i->ID_USER; ?>')">Validasi</a>
    							<!-- <a class="btn btn-danger " onclick="deleted('<?php echo $i->ID_ADMIN; ?>')">Delete</a> -->
    						</td>
    					</tr>
    					<?php $n++; } ?>
            </tbody>
            </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<script type="text/javascript">
  function deleted(param){
    var proc = window.confirm('Are you sure delete this data?');
    if(proc){
      document.location='<?php echo base_url(); ?>index.php/petugasdata/deletedata'+param;
    }
  }
  // function validasijs(param){
  //     document.location='<?php echo base_url(); ?>verifikasi/verifikasi_semua_jenjang_update'+param;
  function validasijs(){
      document.location='<?php echo base_url(); ?>verifikasi/verifikasi_semua_jenjang_update/editData';
  }
</script>
