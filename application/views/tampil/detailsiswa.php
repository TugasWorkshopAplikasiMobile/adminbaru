 <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Siswa</a></li>
              <li ><a href="#settings" data-toggle="tab">Data Keluarga</a></li>
              <li><a href="#timeline" data-toggle="tab">Riwayat Kesehatan</a></li>
            </ul>
            <div class="tab-content">

              <?php foreach ($show->result() as $s) { ?>

            <div class="active tab-pane" id="activity">
                <form class="form-horizontal">
                   <div class="form-group">
                    <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->id_siswa;?>" name="id" readonly>
                      <!-- <label for="inputid" class="col-sm-2 control-label"><?php echo $siswa->ID_SISWA; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->NAMA_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->NAMA_SISWA; ?></label> -->
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputNamePanggilan" class="col-sm-2 control-label">Nama Panggilan</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->NAMA_PANGGILAN;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->NAMA_PANGGILAN; ?></label> -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputUsername" class="col-sm-2 control-label">Tanggal lahir</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->TTL_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->TTL_SISWA; ?></label> -->
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Usia</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->USIA_1JULI;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->USIA_1JULI; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->JK_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->JK_SISWA; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Asaslsekolah" class="col-sm-2 control-label">Agama</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->AGAMA_SISWA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->AGAMA_SISWA; ?></label> -->
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="AnakKe" class="col-sm-2 control-label">Kewarganegaraan</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->KEWARGANEGARAAN;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->KEWARGANEGARAAN; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Tinggal Bersama</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->TINGGAL_BERSAMA;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->TINGGAL_BERSAMA; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Anak Ke</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->ANAK_KE;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->ANAK_KE; ?></label> -->
                    </div>


                  </div>
                  <a href="http://localhost/kuliah/jann/siswa/siswa" type="button" class="btn btn-primary pull-center">Kembali</a>
                </form>
                <!-- Post -->

              <?php } ?>

              </div>


              <div class="tab-pane" id="settings">
                <form class="form-horizontal">

                  <div class="form-group">
                  <label for="inputAyahname" class="col-sm-2 control-label">Nama Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->NAMA_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                   <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Nama Ibu</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->NAMA_IBU;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->USIA_1JULI; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Aama Ayah</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->AGAMA_AYAH;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->JK_SISWA; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Asaslsekolah" class="col-sm-2 control-label">Agama Ibu</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->AGAMA_IBU;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->AGAMA_SISWA; ?></label> -->
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="AnakKe" class="col-sm-2 control-label">Tanggal Lahir Ayah</label>

                   <div class="col-sm-10">
                      <input type="text" class="form-control" id="id" value="<?php echo $siswa->TGL_LAHIR_AYAH;?>" name="id" readonly>
                      <!-- <label class="col-sm-2 control-label"><?php echo $siswa->KEWARGANEGARAAN; ?></label> -->
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Tanggal Lahir Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->TGL_LAHIR_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Kewarga Negaraan Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->KEWARGANEGARAAN_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Kewarga Negaraan Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->KEWARGANEGARAAN_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Terakhir Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->PEND_TERAKHIR_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Terakhir Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->PEND_AKHIR_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Jurusan Yang Diambil Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->JUR_YG_DIAMBIL_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Jurusan Yang Diambil Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->JUR_YG_DIAMBIL_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Jurusan Yang Diambil Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->JUR_YG_DIAMBIL_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Nama Instansi Ayah Berkerja</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->NAMA_INSTANSI_AYAH_BEKERJA;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Nama Instansi Ibu Berkerja</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->NAMA_INSTANSI_IBU_BEKERJA;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Pangkat Golongan Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->PANGKAT_GOL_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Pangkat Golongan Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->PANGKAT_GOL_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Lama Kerja Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->LAMA_KERJA_AYAH_PERHARI;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Lama Kerja Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->LAMA_KERJA_IBU_PERHARI;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Penghasilan Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->PENGHASILAN_PERBULAN_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Penghasilan Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->PENGHASILAN_PERBULAN_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Jumlah Tanggungan Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->JUMLAH_TANGGUNGAN_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Jumlah Tanggungan Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->JUMLAH_TANGGUNGAN_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Rumah Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->ALAMAT_RMH_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Rumah Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->ALAMAT_RMH_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Kantor Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->ALAMAT_KANTOR_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Kantor Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->ALAMAT_KANTOR_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Rumah Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->TLP_RMH_HP_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Rumah Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->TLP_RMH_HP_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Kantor Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->TLP_KANTOR_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Kantor Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->TLP_KANTOR_IBU;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Lama Komunikasi Dengan Ayah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->KESEMPATAN_BERKOMUNIKASI_DG_AYAH;?>" name="id" readonly>
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="TinggalBersama" class="col-sm-2 control-label">Lama Komunikasi Dengan Ibu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value="<?php echo $siswa->KESEMPATAN_BERKOMUNIKASI_DG_IBU;?>" name="id" readonly>
                  </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="timeline">
                <form class="form-horizontal">

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Berat Badan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->BB_TB;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Golongan Darah</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->GOLDAR;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Lama Masa Meminum Asi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->MINUM_ASI_SELAMA;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Perkembangan Dalam 2 Bulan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->PERKEMBANGAN_DLM_2BLN;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Kondisi Organ Tubuh</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->KELAINAN_DLM_TUBUH;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Makan Tambahan < 4 Bulan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->MAKANAN_TAMBAHAN_KURANG_DARI_4BLN;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Imunisasi yang Pernah Diberikan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->IMUNISASI_YG_DIBERIKAN;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Alergi yang Dimiliki</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->ALERGI_MAKANAN_DAN_OBAT;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Pengelihatan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->PENGLIHATAN;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Pendegaran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->PENDENGARAN;?>" name="id" readonly>
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Penampilan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" value="<?php echo $siswa->PENAMPILAN;?>" name="id" readonly>
                </div>

                </form>
              </div>
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
