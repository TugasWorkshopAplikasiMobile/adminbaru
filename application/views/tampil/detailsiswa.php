
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detail Data Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  <h3></h3>
        <div class="col-xs-12">

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Detail Siswa</a></li>
              <li><a href="#timeline" data-toggle="tab">Kondisi Keluarga</a></li>
              <li><a href="#settings" data-toggle="tab">Kesehatan Anak</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->

              <?php foreach ($siswa->result() as $i) { ?>
              <div class="post">
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
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
   
</form>
<?php } ?>

</body>
</html>        