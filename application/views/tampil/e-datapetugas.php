<!-- <div class="col-md-6> -->
  <div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Petugas </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form method="post" action="<?php echo base_url('index.php/petugasdata/fungsieditdata') ?>">
              <div class="box-body">
                <?php foreach ($dataupdate->result() as $key) {
                  # code...
                } ?>
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
                <select class="form-control select2" id="idjk" name="jk" style="width: 100%;" value="<?php echo $key->JENIS_KELAMIN;?>">
                  <option selected="selected">-Pilih Jenis Kelamin-</option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
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
                  <option>Sekretaris 1</option>
                  <option>Admin TK</option>
                  <option>Admin SD</option>
                  <option>Admin SMP</option>
                  <option>Direktur</option>
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

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
