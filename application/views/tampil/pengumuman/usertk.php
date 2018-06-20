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
            <th>No Telp</th>
            <th>Verifikasi</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $n = 1;
              foreach ($pengumuman2->result() as $p2) {
            ?>
    					<tr>
    						<td><?php echo $n++;?></td>
    						<td><?php foreach ($pengumuman->result() as $p) { echo $p->nama_siswa; } ?></td>
    						<td><?php echo $p2->no_telp_siswa; ?></td>
                <?php foreach ($pengumuman1->result() as $p1) { ?>
    						        <td>
                          <?php if($p1->id_pembayaran == 2){ ?>
                            BELUM TERVERIFIKASI
                          <?php } ?>
                          <?php if($p1->id_pembayaran == 1){ ?>
                            TERVERIFIKASI
                          <?php } ?>
                        </td>
                <?php } ?>
    						<td style="text-align: center;">
    							<a href="#" class="btn btn-info" <?php foreach ($pengumuman->result() as $p) {?> onclick="updatejs('<?php echo $p->id_user; ?>')" <?php } ?>>Validate</a>
                  <a class="btn btn-danger " <?php foreach ($pengumuman->result() as $p) {?> onclick="deleted('<?php echo $p->id_user; ?>')"<?php } ?>>Delete</a>

                </td>
    					</tr>
              <?php
              }
              ?>
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
      document.location='<?php echo base_url(); ?>pengumuman/pengumuman/'+param;
    }
  }
  function updatejs(param){
      document.location='<?php echo base_url(); ?>pengumuman/pengumuman/dttk/'+param;
  }
</script>
