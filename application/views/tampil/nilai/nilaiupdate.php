<div class="col-mx-12">
<div class="box box-primary">
          <form action="<?php echo base_url('nilai/nilai/fungsiedit'); ?>" method="post" action="">
            <?php foreach ($nilai->result() as $u){ ?>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="idsiswa" class="col-sm-2 control-label">ID Siswa</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->ID_SISWA ?>" type="text" class="form-control" name="id_siswa" placeholder="" readonly="">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->NAMA_SISWA ?>" type="text" class="form-control" id="inputEmail3" placeholder="" readonly="">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Matematika</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->matematika ?>" type="text" class="form-control" placeholder="Masukan Nilai Matematika" name="matematika">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="big" class="col-sm-2 control-label">Bahasa Inggris</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->bahasa_inggris ?>" type="text" class="form-control" placeholder="Masukan Nilai Bahasa Inggris" name="bahasa_inggris">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Bahasa Indonesia</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->Bahasa_Indonesia ?>" type="text" class="form-control" placeholder="Masukan Nilai Bahasa Indonesia" name="Bahasa_Indonesia">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Psikologi</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->Psikologi ?>" type="text" class="form-control" name="Psikologi" placeholder="Masukan Nilai Psikologi">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">IPA</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->IPA ?>" type="text" class="form-control" name="IPA" placeholder="Masukan Nilai Psikologi">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Jumlah Nilai</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->JUMLAH_NILAI_TEST ?>" type="text" class="form-control" name="JUMLAH_NILAI_TEST" placeholder="Masukan Jumalah Nilai">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="matematik" class="col-sm-2 control-label">Rata - Rata Nilai</label>
                  <div class="col-sm-10">
                  <input value="<?php echo $u->RATA_RATA_NILAI_TEST ?>" type="text" class="form-control" name="RATA_RATA_NILAI_TEST" placeholder="Masukan Rata - Rata Nilai">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->

          <!-- /.box -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url('nilai/nilai') ?>" type="button" class="btn btn-primary">Batal</a>
               <!--  <button type="" class="btn btn-primary" onclick="javascript:history.go(-1);">Batal</button> -->
              </div>
            </div>
            </form>
            <?php } ?>
              <div class="box-body">
              </div>

            <!-- /.box-header -->
            <!-- form start -->

            </form>
          </div>
