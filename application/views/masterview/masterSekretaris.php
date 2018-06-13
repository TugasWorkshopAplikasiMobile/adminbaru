<!-- Menu Pusat -->

<?php $this->load->view('adminlte2/global/01_head');?>
<?php $this->load->view('adminlte2/global/02_header');?>
<?php $this->load->view('adminlte2/global/03_headerbar');?>
<?php $this->load->view('adminlte2/global/04_slidebar0');?>


<!-- bagian dinamis -->
<?php $this->load->view('adminlte2/'.$active_controller.'/'.$active_function);?>
<!-- tutup bagian dinamis -->


<?php $this->load->view('adminlte2/global/06_footer');?>
<?php $this->load->view('adminlte2/global/07_controlbar');?>
<?php $this->load->view('adminlte2/global/08_javascript');?>
