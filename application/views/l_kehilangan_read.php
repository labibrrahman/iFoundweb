<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">L_kehilangan Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Id Barang</td><td><?php echo $id_barang; ?></td></tr>
	    <tr><td>Tgl Kehilangan</td><td><?php echo $tgl_kehilangan; ?></td></tr>
	    <tr><td>Lokasi Kehilangan</td><td><?php echo $lokasi_kehilangan; ?></td></tr>
	    <tr><td>P</td><td><?php echo $p; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('l_kehilangan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>