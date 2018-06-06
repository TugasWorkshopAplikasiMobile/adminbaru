 <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Siswa</a></li>
              <li ><a href="#settings" data-toggle="tab">Data Keluarga</a></li>
              <li><a href="#timeline" data-toggle="tab">Riwayat Kesehatan</a></li>
            </ul>
            <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <form class="form-horizontal">
                   <div class="form-group">
                    <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->ID_SISWA;?>" name="id" readonly>
                      <!-- <label for="inputid" class="col-sm-2 control-label"><?php echo $siswa->ID_SISWA; ?></label> -->
                    </div>
                  </div>
                </form>
                <!-- Post -->
              
              </div>


              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
            
                  <div class="form-group">
                  <label for="inputAyahname" class="col-sm-2 control-label">Nama Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->NAMA_AYAH;?>" name="id" readonly>
                  </div>
                  </div>
                </form>

              <!-- /.tab-pane -->

              <div class="tab-pane" id="timeline">
                <form class="form-horizontal">

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Berat Badan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->BB_TB;?>" name="id" readonly>
                </div> 
                </div>
              </form>


              <!-- /.tab-pane -->
            





            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>        