
              <div class="col-md-12">

                  <div class="nav-tabs-custom">

                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#activity" data-toggle="tab">Data Siswa</a></li>
                      <li ><a href="#settings" data-toggle="tab">Data Keluarga</a></li>
                      <li><a href="#timeline" data-toggle="tab">Riwayat Kesehatan</a></li>
                    </ul>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                      <div class="tab-content">
                          <div class="active tab-pane" id="activity">
                            <?php foreach ($detail1->result() as $d) { ?>
                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="inputid" class="col-sm-2 control-label">ID Pendaftaran</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->id_siswa; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->nama_siswa; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> NAMA_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputNamePanggilan" class="col-sm-2 control-label">Nama Panggilan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->nama_panggilan; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> NAMA_PANGGILAN; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Tanggal lahir</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->tanggal_lahir_siswa; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> TTL_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Usia</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->usia_siswa; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> USIA_1JULI; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($d->id_jenis_kelamin == '1'){ ?>
                                          value="LAKI-LAKI"
                                        <?php } ?>
                                        <?php if($d->id_jenis_kelamin == '2'){ ?>
                                          value="PEREMPUAN"
                                        <?php } ?>
                                        name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> JK_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="Asaslsekolah" class="col-sm-2 control-label">Agama</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($d->id_agama == '1'){ ?>
                                          value="ISLAM"
                                        <?php } ?>
                                        <?php if($d->id_agama == '2'){ ?>
                                          value="KRISTEN"
                                        <?php } ?>
                                        <?php if($d->id_agama == '3'){ ?>
                                          value="KATOLIK"
                                        <?php } ?>
                                        <?php if($d->id_agama == '4'){ ?>
                                          value="HINDU"
                                        <?php } ?>
                                        <?php if($d->id_agama == '5'){ ?>
                                          value="BUDHA"
                                        <?php } ?>
                                        <?php if($d->id_agama == '6'){ ?>
                                          value="KONG HU CU"
                                        <?php } ?>
                                        name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> AGAMA_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="AnakKe" class="col-sm-2 control-label">Kewarganegaraan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"

                                        <?php if($d->id_warganegara == '1'){ ?>
                                        value="Warga Negara Indonesia"
                                        <?php } ?>
                                        <?php if($d->id_warganegara == '2'){ ?>
                                        value="Warga Negara Asing"
                                        <?php } ?>

                                        name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> KEWARGANEGARAAN; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Tinggal Bersama</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->tinggal_bersama_siswa; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> TINGGAL_BERSAMA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Anak Ke</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $d->anak_ke_siswa; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> ANAK_KE; ?></label> -->
                                      </div>
                                  </div>

                                <a href="<?php echo base_url('siswa/siswadirektur/sistk'); ?>" type="button" class="btn btn-primary pull-center">Kembali</a>
                              </form>
                            <?php } ?>
                          <!-- Post -->

                          </div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                          <div class="tab-pane" id="settings">
                            <?php foreach ($detail2->result() as $dd) { ?>
                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="inputAyahname" class="col-sm-2 control-label">Nama Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Nama Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_ibu; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> USIA_1JULI; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Aama Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($dd->id_agama_ayah == 1){ ?>
                                        value="ISLAM"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ayah == 2){ ?>
                                        value="KRISTEN"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ayah == 3){ ?>
                                        value="KATOLIK"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ayah == 4){ ?>
                                        value="HINDU"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ayah == 5){ ?>
                                        value="BUDHA"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ayah == 6){ ?>
                                        value="KONG HU CU"
                                        <?php } ?>
                                        name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> JK_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="Asaslsekolah" class="col-sm-2 control-label">Agama Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($dd->id_agama_ibu == 1){ ?>
                                        value="ISLAM"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ibu == 2){ ?>
                                        value="KRISTEN"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ibu == 3){ ?>
                                        value="KATOLIK"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ibu == 4){ ?>
                                        value="HINDU"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ibu == 5){ ?>
                                        value="BUDHA"
                                        <?php } ?>
                                        <?php if($dd->id_agama_ibu == 6){ ?>
                                        value="KONG HU CU"
                                        <?php } ?>
                                        name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> AGAMA_SISWA; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="AnakKe" class="col-sm-2 control-label">Tanggal Lahir Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->tanggal_lahir_ayah; ?>" name="id" readonly>
                                        <!-- <label class="col-sm-2 control-label"> KEWARGANEGARAAN; ?></label> -->
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Tanggal Lahir Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->tanggal_lahir_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Kewarganegaraan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($dd->id_kewarganegaraan_ayah == 1) { ?>
                                        value="Warga Negara Indonesia"
                                        <?php } ?>
                                        <?php if($dd->id_kewarganegaraan_ayah == 2) { ?>
                                        value="Warga Negara Asing"
                                        <?php } ?>
                                        name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Kewarganegaraan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($dd->id_kewarganegaraan_ibu == 1) { ?>
                                        value="Warga Negara Indonesia"
                                        <?php } ?>
                                        <?php if($dd->id_kewarganegaraan_ibu == 2) { ?>
                                        value="Warga Negara Asing"
                                        <?php } ?>
                                        name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Terakhir Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pendidikan_terakhir_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Terakhir Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pendidikan_terakhir_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jurusan Yang Diambil Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->jurusan_yang_diambil_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jurusan Yang Diambil Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pendidikan_terakhir_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Nama Instansi Ayah Berkerja</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_instansi_ayah_bekerja ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Nama Instansi Ibu Berkerja</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->nama_instansi_ibu_bekerja ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pangkat Golongan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pangkat_golongan_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pangkat Golongan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->pangkat_golongan_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Kerja Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->lama_kerja_ayah_perhari; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Kerja Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->lama_kerja_ibu_perhari; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Penghasilan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->penghasilan_perbulan_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Penghasilan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->penghasilan_perbulan_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jumlah Tanggungan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->jumlah_tanggungan_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jumlah Tanggungan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->jumlah_tanggungan_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Rumah Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_rumah_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Rumah Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_rumah_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Kantor Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_kantor_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Alamat Kantor Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->alamat_kantor_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Rumah Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_rumah_hp_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Rumah Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_rumah_hp_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Kantor Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_kantor_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Telephone Kantor Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->telp_kantor_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Komunikasi Dengan Ayah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->kesempatan_berkomunikasi_dg_ayah; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Lama Komunikasi Dengan Ibu</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dd->kesempatan_berkomunikasi_dg_ibu; ?>" name="id" readonly>
                                      </div>
                                  </div>
                              </form>
                            <?php } ?>
                            <?php foreach ($detail3->result() as $ddd) { ?>
                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Nama Saudara Kandung</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $ddd->nama_saudara_kandung; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Jenis Kelamin Saudara Kandung</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($ddd->id_jenis_kelamin == '1'){ ?>
                                        value="LAKI-LAKI"
                                        <?php } ?>
                                      <?php if($ddd->id_jenis_kelamin == '2'){ ?>
                                        value="PEREMPUAN"
                                        <?php } ?>
                                        name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Pendidikan Saudara Kandung</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $ddd->pendidikan_saudara_kandung; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">Kelas Saudara Kandung</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $ddd->kelas_saudara_kandung; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="TinggalBersama" class="col-sm-2 control-label">No Induk Saudara Kandung</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $ddd->no_induk_saudara_kandung; ?>" name="id" readonly>
                                      </div>
                                  </div>
                              </form>
                            <?php } ?>
                          </div>
                      <!-- /.tab-pane -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                          <div class="tab-pane" id="timeline">
                            <?php foreach ($detail4->result() as $dddd){?>
                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Berat Badan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->berat_badan; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Golongan Darah</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id"
                                        <?php if($dddd->id_golongan_darah == 1){ ?>
                                          value="A"
                                        <?php } ?>
                                        <?php if($dddd->id_golongan_darah == 2){ ?>
                                          value="B"
                                        <?php } ?>
                                        <?php if($dddd->id_golongan_darah == 3){ ?>
                                          value="AB"
                                        <?php } ?>
                                        <?php if($dddd->id_golongan_darah == 4){ ?>
                                          value="O"
                                        <?php } ?>
                                        name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Lama Masa Meminum Asi</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->minum_asi_selama; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Perkembangan Dalam 2 Bulan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->perkembangan_dalam_2bulan; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Kelainan Dalam Tubuh</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->kelainan_dalam_tubuh; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Makan Tambahan < 2 Bulan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->makanan_tambahan_kurang_dari_2bulan ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Imunisasi yang Pernah Diberikan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->imunisasi_yang_diberikan; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Alergi yang Dimiliki</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->alergi_makanan_dan_obat; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Pengelihatan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->penglihatan; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Pendegaran</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->pendengaran; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Penampilan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $dddd->penampilan; ?>" name="id" readonly>
                                      </div>
                                  </div>
                              </form>
                            <?php } ?>
                            <?php foreach ($detail5->result() as $s){ ?>
                              <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Ciri Fisik yang Menonjol</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->ciri_fisik_yang_menonjol; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Ciri Kepribadian yang Menonjol</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->ciri_kepribadian_yang_menonjol; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Bakat Khusus yang Menonjol</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->bakat_khusus_yang_menonjol; ?>" name="id" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="inputUsername" class="col-sm-2 control-label">Prestasi yang Pernah Diraih</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id" value="<?php echo $s->prestasi_yang_pernah_diraih; ?>" name="id" readonly>
                                      </div>
                                  </div>
                              </form>
                            <?php } ?>
                          </div>
                      <!-- /.tab-pane -->

                      </div>
                      <!-- /.tab-content -->
                  </div>
                  <!-- /.nav-tabs-custom -->
              <!-- </div> -->
              <!-- /.col -->
          <!-- </div> -->
          <!-- /.row -->

        <!-- </section> -->
        <!-- /.content -->
      <!-- </div> -->
      <!-- /.content-wrapper -->
  <!-- </body> -->
<!-- </html> -->

<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
<!-- OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT OJO DIEDIT -->
