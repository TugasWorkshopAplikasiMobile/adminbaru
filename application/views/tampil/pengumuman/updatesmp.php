<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Verifikasi Data User SMP</h3>
    </div>
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputnama" class="col-sm-2 control-label">Bukti Transaksi</label>
                <div class="col-sm-10">
                    <a href="#myModal"><img class="img-fluid" src="" alt="BUKTI TRANSAKSI" width="304" height="236" href=""></a>
                </div>
            </div>

            <div class="form-group">
                <label for="inputnama" class="col-sm-2 control-label">Nama User</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Nama" placeholder="Nama" readonly="">
                </div>
            </div>

            <div class="form-group">
                <label for="notlp" class="col-sm-2 control-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="notlp" placeholder="Nomor Telephone" readonly="">
                </div>
            </div>

            <div class="form-group">
              <label for="statusverivikasi"  class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status" placeholder="">
                        <option>--*:Pilih aja boy:*--</option>
                        <option>Belum Terverifikasi</option>
                        <option>Terverifikasi</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
              <label for="inputkode" class="col-sm-2 control-label">Kode Verifikasi User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode" placeholder="Kode Verivikasi User" >
                </div>
            </div>

            <div class="box-footer">
                <a href="#" class="btn btn-info " onclick="back('')">Kembali</a>
                <button type="submit" class="btn btn-info pull-right">simpan</button>
            </div>
        </div>
    </form>
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
