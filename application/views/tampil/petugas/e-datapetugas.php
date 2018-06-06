<!-- <div class="col-md-6> -->
<div class="col-md-6">
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Petugas </h3>
            </div>

          <form method="post" action="<?php echo base_url('petugas/petugasdata/fungsieditdata') ?>">
              <div class="box-body">
                <?php foreach ($dataupdate->result() as $key) { ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">ID Admin</label>
                  <input type="text" class="form-control" id="id" value="<?php echo $key->ID_ADMIN;?>" name="id" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Admin</label>
                  <input type="text" class="form-control" id="idnama" name="nama" value="<?php echo $key->NAMA_ADMIN;?>">
                </div>

                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" id="idjk" required name="jk" style="width: 100%;">
                  <option value="">-Pilih Jenis Kelamin-</option>
                  <option
                  <?php  if ($key->JENIS_KELAMIN=="Laki - Laki"): ?>
                    SELECTED
                  <?php endif ?> value="Laki - Laki">Laki-Laki</option>
                  <option <?php if ($key->JENIS_KELAMIN=="Perempuan"): ?>
                    SELECTED
                  <?php endif ?> value="Perempuan">Perempuan</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Telephone</label>
                  <input type="text" class="form-control" id="idtelp" name="tlp" placeholder="Enter No Telephone" value="<?php echo $key->NO_TELP;?>">
                </div>
                <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="sts" id="idstatus" style="width: 100%;" value="<?php echo $key->STATUS;?>">
                  <option selected="selected">-Pilih Status-</option>
                  <option <?php if ($key->STATUS=="Sekretaris1"): ?>
                    SELECTED
                  <?php endif ?>>Sekretaris 1</option>
                  <option selected="selected">-Pilih Status-</option>
                  <option <?php if ($key->STATUS=="AdminTK"): ?>
                    SELECTED
                  <?php endif ?>>Admin TK</option>
                  <option selected="selected">-Pilih Status-</option>
                  <option <?php if ($key->STATUS=="AdminSD"): ?>
                    SELECTED
                  <?php endif ?>>Admin SD</option>
                  <option selected="selected">-Pilih Status-</option>
                  <option <?php if ($key->STATUS=="AdminSMP"): ?>
                    SELECTED
                  <?php endif ?>>Admin SMP</option>
                  <option selected="selected">-Pilih Status-</option>
                  <option <?php if ($key->STATUS=="Direktur"): ?>
                    SELECTED
                  <?php endif ?>>Direktur</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="idusername" name="username" value="<?php echo $key->USERNAME_ADMIN;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="idpass" name="pass" value="<?php echo $key->PASSWORD_ADMIN;?>">
                </div>


              <?php } ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="" class="btn btn-primary" onclick="javascript:history.go(-1);">Batal</button>
              </div>
            </div>

            </form>
          </div>
        </div>
