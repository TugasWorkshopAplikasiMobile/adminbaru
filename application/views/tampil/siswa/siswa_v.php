<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Siswa</h3><br><br>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Nama Sekolah</th>
            <th>Status Di terima</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $n=1;
                foreach ($siswa->result() as $i) {
               ?>
              <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $i->NAMA_SISWA; ?></td>
                <td><?php echo $i->TTL_SISWA ?></td>
                <td><?php echo $i->JK_SISWA ?></td>
                <td><?php echo $i->NAMA_SEKOLAH ?></td>
                <td><?php echo $i->STATUS_TERIMA ?></td>
                <td style="text-align: center;">
                  <!-- <?php echo $i->no?> -->
                  <a href="<?php echo base_url('siswa/siswa/detailsiswa/'.$i->ID_SISWA)?>"" class="btn btn-warning btn-xs" >Detail</a>
                 
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
  function deleted(param){
    var proc = window.confirm('Are you sure delete this data?');
    if(proc){
      document.location='<?php echo base_url(); ?>index.php/petugasdata/deletedata/'+param;
    }
  }
  // function updatejs(param){
  //     document.location='<?php echo base_url(); ?>index.php/petugasdata/editData/'+param;
  // }
</script>