<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Verifikasi Data User TK</h3><br><br>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Transaksi</th>
            <th>No Telp</th>
            <th>Verifikasi</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
    					<tr>
    						<td>1</td>
    						<td>NAMA_USER</td>
    						<td>TGL_TRANSAKSI</td>
    						<td>NO_TELP</td>
    						<td>STATUS</td>
    						<td style="text-align: center;">
    							<a href="#" class="btn btn-info " onclick="updatejs('')">Validate</a>
    							<a class="btn btn-danger " onclick="deleted('')">Delete</a>
    						</td>
    					</tr>
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
      document.location='<?php echo base_url(); ?>pengumuman/pengumuman/dttk/'+param;
  }
</script>
