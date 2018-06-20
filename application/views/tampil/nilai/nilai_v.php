<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Masaukan Nilai Siswa TK</h3><br><br>
        <!-- <a href="<?php echo base_url('petugas/petugasdata/tambahData')?>" class="btn btn-primary pull-left" style="width: 30%;">Tambah Data Petugas</a> -->

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
           <th>No</th>
            <th>Nama</th>
            <th>MTK</th>
            <th>BIG</th>
            <th>BIN</th>
            <th>IPA</th>
            <th>Psikologi</th>
            <th>Jumlah</th>
            <th>Rata-rata</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($nilai->result() as $n){
            ?>
              <tr>
                <td><?php echo $no?></td>
                <td><?php echo $n->nama_siswa; ?></td>
                <td>matematika</td>
                <td>BIG</td>
                <td>IPA</td>
                <td>BINDO</td>
                <td>Psikologi</td>
                <td>JUMLAH_NILAI_TEST</td>
                <td>RATA_RATA_NILAI_TEST</td>
                <td style="text-align:center;">
                  <a href="#" class="btn btn-info " onclick="updatejs('')">Update</a>
                  <a class="btn btn-danger " onclick="deleted('')">Delete</a>
                </td>
              </tr>
            <?php
            }
            $n++;
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<script type="text/javascript">
//  function deleted(param){
  //  var proc = window.confirm('Are you sure delete this data?');
//    if(proc){
      //document.location='<?php echo base_url(); ?>petugas/petugasdata/deletedata/'+param;
    //}
  //}
  function updatejs(param){
      document.location='<?php echo base_url(); ?>nilai/nilai/detnilaitk/'+param;
  }
</script>
