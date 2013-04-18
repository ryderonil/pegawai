<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/style.css" />
<link rel="sortcut icon" href="<?php echo base_url(); ?>/aset/images/icon.jpg" />

<script type="text/javascript" src="<?php echo base_url();?>aset/js/jquery.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>aset/calendar/jquery.calendar.js" ></script>


<link href="<?php echo base_url();?>aset/calendar/jquery.calendar.css" rel="stylesheet">
</head>
<body>
<div id="header">
	<div id="menu">
      <ul>
		<li>&#187; <b>Distro <?php echo from_session('nama_kl');?></b> </li>
        <li><a href="<?php echo base_url(); ?>bpw">&#187; Home</a></li>
        <li><a href="<?php echo base_url(); ?>umum/editprofil">&#187; Manajemen User</a></li>
        <li><a href="<?php echo base_url(); ?>bpw/pendaftaran">&#187; Pendaftaran</a></li>
        <li><a href="<?php echo base_url(); ?>umum/list_jamaah">&#187; Data Jamaah BPW</a></li>
        <li><a href="<?php echo base_url(); ?>umum/berdasarkan_paket">&#187; Data Jamaah Current</a></li>
        <li><a href="<?php echo base_url(); ?>umum/data_jamaah">&#187; Semua Data Jamaah</a></li>
        <li><a href="<?php echo base_url(); ?>umum/penjualan">&#187; Semua Penjualan</a></li>
        <li><a href="<?php echo base_url(); ?>umum/penjualan_user">&#187; Penjualan Setiap User</a></li>
        <li><a href="<?php echo base_url(); ?>bpw/paket">&#187; Paket</a></li>
        <li><a href="<?php echo base_url(); ?>login/keluar">&#187; Logout</a></li>
      </ul>
	    <p>&nbsp;</p>
 	</div>

	<div id="content">
	
          <?php $this->load->view($isi);?>
	</div>
  
	<div id="footer" align=center>
			Copyright &copy; 2010 by BPW Al-Utsmaniyah Tours. All rights reserved.
	</div>
</div>
</body>
</html>
