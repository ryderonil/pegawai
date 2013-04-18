<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/style.css" />
<link rel="sortcut icon" href="<?php echo base_url(); ?>/aset/images/icon.jpg" />
</head>
<body>
<div id="header">
	<div id="menu">
      <ul>
		<li>&#187; <b>Distro <?php echo from_session('nama_kl');?></b> </li>
        <li><a href="<?php echo base_url(); ?>manager">&#187; Home</a></li>
        <li><a href="<?php echo base_url(); ?>umum/editprofil">&#187; Manajemen User</a></li>
        <li><a href='?module=pendaftaran'>&#187; Pendaftaran</a></li>
                
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
