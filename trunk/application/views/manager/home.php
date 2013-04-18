<h2>Selamat Datang <?php echo from_session('nama');?></h2>
<p><b><?php echo from_session('nama');?></b>, selamat datang di halaman website pendaftaran Online.</p><p>&nbsp;</p> <p>Silahkan klik menu pilihan yang berada 
          di sebelah kiri untuk mengelola content website. </p><p></p>
          <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
          <p align=right>Login : <?php date_default_timezone_set('Asia/Jakarta');
		  echo $this->tanggal->hari(date('D')).', '.$this->tanggal->tanggal3(date('Y-m-d'));
          echo ' | '.date('H:i:s').' WIB';
          ?></p>  
         