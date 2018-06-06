<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Nilai Siswa</h3><br><br>
        <a href="<?php echo base_url('nilai/nilai/tambahdatanilai')?>" class="btn btn-primary pull-left" style="width: 30%;">Tambah Data Siswa</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
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
              $n=1;
                foreach ($nilai->result() as $i) {
               ?>
              <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $i->NAMA_SISWA ?></td>
                <td><?php echo $i->matematika ?></td>
                <td><?php echo $i->bahasa_inggris ?></td>
                <td><?php echo $i->IPA ?></td>
                <td><?php echo $i->Bahasa_Indonesia ?></td>
                <td><?php echo $i->Psikologi ?></td>
                <td><?php echo $i->JUMLAH_NILAI_TEST ?></td>
                <td><?php echo $i->RATA_RATA_NILAI_TEST ?></td>
                <td style="text-align: center;">
                  <!-- <?php echo $i->no?> -->
                  <!-- <a href="<?php echo base_url('nilai/nilai/detailnilai/'.$i->ID_SISWA)?>" class="btn btn-warning btn-xs" >Detail</a> -->
                  <a href="<?php echo base_url('nilai/nilai/update/'.$i->ID_SISWA)?>" class="btn btn-info btn-xs" >Update</a>
                  <a class="btn btn-danger btn-xs" onclick="">Delete</a>
                </td>
              </tr>
              <?php $n++; } ?>
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
  // function deleted(param){
  //   var proc = window.confirm('Are you sure delete this data?');
  //   if(proc){
  //     document.location='<?php echo base_url(); ?>index.php/petugasdata/deletedata/'+param;
  //   }
  // }
  // function updatejs(param){
  //     document.location='<?php echo base_url(); ?>index.php/petugasdata/editData/'+param;
  // }
</script>
