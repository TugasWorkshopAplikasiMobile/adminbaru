<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Verifikasi Bukti Daftar Ulang SMP</h3><br><br>
        <!-- <a href="base_url('#')?>" class="btn btn-primary pull-left" style="width: 30%;">Tambah Data Petugas</a> -->

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenjang</th>
            <th>Status</th>
            <!-- <th>No Telp</th> -->
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
             
             
    					<tr>
    						<td>1</td>
    						<td>NAMA_USER</td>
    						<td>NAMA_JENJANG</td>
                <td>Status</td>
    						<!-- <td>$i->NO_TELP ?></td> -->
    						<td style="text-align: center;">
    							<a class="btn btn-info " onclick="validasijs('')">Validasi</a>
    							<!-- <a class="btn btn-danger " onclick="deleted('$i->ID_ADMIN; ?>')">Delete</a> -->
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
      document.location='<?php echo base_url(); ?>siswa/siswasekretaris/deletesiswatk/'+param;
    }
  }
  function validasijs(param){
      document.location='<?php echo base_url(); ?>verifikasi/verifikasi/updatesmp'+param;
  }
</script>
