<!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Verivikasi Data User TK</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputnama" class="col-sm-2 control-label">Nama User</label>
                  <!--  -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama" placeholder="Nama" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputusername" class="col-sm-2 control-label">Username</label>
                  <!--  -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="usename" placeholder="Username" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputpassword" class="col-sm-2 control-label">Password</label>
                  <!--  -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" placeholder="Password" readonly="">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="notlp" class="col-sm-2 control-label">Nomor Telephone</label>
                  <!--  -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="notlp" placeholder="Nomro Telephone" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gender"  class="col-sm-2 control-label">Jenis Kelamin</label>
                  <!--  -->
                  <div class="col-sm-10">
                    <select class="form-control" id="gender" placeholder="" disabled>
                      <option>Orther</option>
                      
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="statusverivikasi"  class="col-sm-2 control-label">Status</label>
                  <!--  -->
                  <div class="col-sm-10">
                    <select class="form-control" id="status" placeholder="">
                      <option>--*:Pilih aja boy:*--</option>
                      <option>Belum Terverivikasi</option>
                      <option>Terverivikasi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputkode" class="col-sm-2 control-label">Kode Verivikasi User</label>
                  <!--  -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode" placeholder="Kode Verivikasi User" >
                  </div>
                </div>
              </div>


              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="#" class="btn btn-info " onclick="back('')">Kembali</a>
                <button type="submit" class="btn btn-info pull-right">simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
<script type="text/javascript">
  function deleted(param){
    var proc = window.confirm('Are you sure delete this data?');
    if(proc){
      document.location='<?php echo base_url(); ?>petugas/petugasdata/deletedata/'+param;
    }
  }
  function back(param){
      document.location='<?php echo base_url(); ?>pengumuman/pengumuman/pgsd/'+param;
  }
</script>