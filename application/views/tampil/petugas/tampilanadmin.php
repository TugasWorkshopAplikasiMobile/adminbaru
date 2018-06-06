<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Petugas</h3><br><br>
        <a href="<?php echo base_url('petugas/petugasdata/tambahData')?>" class="btn btn-primary pull-left" style="width: 30%;">Tambah Data Petugas</a>

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No Telp</th>
            <th>Status</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
              <?php
    					$n=1;
    						foreach ($show->result() as $i) {
    					 ?>
    					<tr>
    						<td><?php echo $n; ?></td>
    						<td><?php echo $i->NAMA_ADMIN; ?></td>
    						<td><?php echo $i->JENIS_KELAMIN ?></td>
    						<td><?php echo $i->NO_TELP ?></td>
    						<td><?php echo $i->STATUS ?></td>
    						<td><?php echo $i->USERNAME_ADMIN ?></td>
    						<td><?php echo $i->PASSWORD_ADMIN ?></td>
    						<td style="text-align: center;">
    							<a href="#" class="btn btn-info " onclick="updatejs('<?php echo $i->ID_ADMIN; ?>')">Update</a>
    							<a class="btn btn-danger " onclick="deleted('<?php echo $i->ID_ADMIN; ?>')">Delete</a>
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
      document.location='<?php echo base_url(); ?>petugas/petugasdata/deletedata/'+param;
    }
  }
  function updatejs(param){
      document.location='<?php echo base_url(); ?>petugas/petugasdata/editData/'+param;
  }
</script>
