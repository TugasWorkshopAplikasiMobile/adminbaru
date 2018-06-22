<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Verifikasi Data User TK</h3>
    </div>

    <?php foreach ($pengumuman->result() as $p) { ?>
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputnama" class="col-sm-2 control-label">Bukti Transaksi</label>
                <div class="col-sm-10">
                    <a data-toggle="modal" data-target="#gambarModal"><img class="img-fluid" src="" alt="BUKTI TRANSAKSI" width="304" height="236"></a>
                </div>
            </div>


            <div class="form-group">
                <label for="inputnama" class="col-sm-2 control-label">Nama User</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Nama" value="<?php echo $p->nama_siswa; ?>" readonly="">
                </div>
            </div>

            <div class="form-group">
                <label for="notlp" class="col-sm-2 control-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="notlp" value="<?php echo $p->no_telp_siswa; ?>" readonly="">
                </div>
            </div>

            <div class="form-group">
              <label for="statusverivikasi"  class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status">
                      <?php foreach ($pengumuman1->result() as $p1) { ?>
                        <option value="">-Pilih-</option>
                        <option
                        <?php  if ($p1->id_pembayaran=="2"): ?>
                          SELECTED
                        <?php endif ?> value="2">BELUM TERVERIFIKASI</option>
                        <option <?php if ($p1->id_pembayaran=="1"): ?>
                          SELECTED
                        <?php endif ?> value="1">TERVERIFIKASI</option>
                      <?php } ?>
                    </select>
                </div>
            </div>

            <div class="box-footer">
                <a href="#" class="btn btn-info " onclick="back('')">Kembali</a>
                <button type="submit" class="btn btn-info pull-right">simpan</button>
            </div>
        </div>
    </form>
    <?php } ?>

  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="gambarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url('/gambar/user.jpg'); ?>" alt="BUKTI TRANSAKSI">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function deleted(param){
var proc = window.confirm('Are you sure delete this data?');
if(proc){
document.location='<?php echo base_url(); ?>petugas/petugasdata/deletedata/'+param;
}
}
function back(param){
document.location='<?php echo base_url(); ?>pengumuman/pengumuman/pgtk/'+param;
}
</script>
