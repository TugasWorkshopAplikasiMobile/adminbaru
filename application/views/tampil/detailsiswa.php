

 <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
          
              <li ><a href="#settings" data-toggle="tab">Settings</a></li>
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
            </ul>
            <div class="tab-content">

              <div class="active tab-pane" id="activity">
                <!-- Post -->
              
                <!-- /.post -->

                <!-- Post -->
                <!-- /.post -->

                <!-- Post -->
                
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->
              <?php foreach ($siswa->result() as $i) { ?>
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                   <div class="form-group">
                    <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->ID_SISWA;?>" name="id" readonly>
                      <!-- <label for="inputid" class="col-sm-2 control-label"><?php echo $i->ID_SISWA; ?></label> -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->NAMA_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->NAMA_SISWA; ?></label> -->
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputNamePanggilan" class="col-sm-2 control-label">Nama Panggilan</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->NAMA_PANGGILAN;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->NAMA_PANGGILAN; ?></label> -->
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputUsername" class="col-sm-2 control-label">Tanggal lahir</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->TTL_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->TTL_SISWA; ?></label> -->
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Usia</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->USIA_1JULI;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->USIA_1JULI; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->JK_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->JK_SISWA; ?></label> -->
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="Asaslsekolah" class="col-sm-2 control-label">Agama</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->AGAMA_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->AGAMA_SISWA; ?></label> -->
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="AnakKe" class="col-sm-2 control-label">Kewarganegaraan</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->KEWARGANEGARAAN;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->KEWARGANEGARAAN; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Tinggal Bersama</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->TINGGAL_BERSAMA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->TINGGAL_BERSAMA; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Anak Ke</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $i->ANAK_KE;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $i->ANAK_KE; ?></label> -->
                 
                        <br>
                        <button type="" class="btn btn-danger pull-right" onclick="javascript:history.go(-1);">Kembali</button>
                         </div>

                </form>
              </div>
              <!-- /.tab-pane -->
            <?php }?>
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