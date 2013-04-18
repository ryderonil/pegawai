 <h2>Daftar Jama'ah Umrah</h2>
 <table width=650>
  <tr>
    <td><input type=button value='Berdasarkan Paket' onclick="window.location.href='<?php echo base_url(); ?>umum/data_jamaah';">
     <input type=button value='excel' onclick="window.location.href='<?php echo base_url(); ?>umum/ex_semua_jamaah';"> </td>
    <td align="right"><form method="post" action="<?php echo base_url();?>umum/list_jamaah_semua">
 <input name="cari" type="text" value="<?php echo $this->session->userdata('peg');?>" /><input class="tombol" type="submit" name="submit" value="Cari" />
 </form></td>
  </tr>
</table>
		<table width=650 border=1>
          <?php if(count($hasilnya) > 0){ ?>
          <tr><th>No</th><th>Nama Jamaah</th><th>Paket</th><th>KL</th><th>harga</th><th>progres</th><th>sisa</th><th>Pilihan</th></tr>
		
		  <?php
		  $c = 1; 
		foreach ($hasilnya as $row):
		$paket = $row['id_paket'];
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		
		$tanggal_awal=$a->row()->jadwal_awal;
		$tanggal_akhir=$a->row()->jadwal_akhir;
		$nama_paket=$a->row()->nama_paket;
		
		
		$kl = $row['id_kl'];
		$u=$this->db->query("SELECT * FROM kl WHERE `id_kl`='$kl'");
		$klnya=$u->row()->nama_kl;
	?>
	
	<tr align="left">
		
		<td><?php echo  $c; $c++;?></td>
		<td align=center><?php echo $row['nama'];?></td>
		
		
		<td align=center><?php echo $nama_paket;?></td>
		<td align=center><?php echo $klnya;?></td>
		<td align=center><?php echo $row['harga'];?></td>
		<td align=center><?php echo $row['pembayaran'];?></td>
		<?php $cicilan = $row['harga']-$row['pembayaran'];?>
		<td align=center><?php echo $cicilan;?></td>
		<td align=center><?php echo anchor("umum/lihat_jamaah/".$row['id_jamaah'],"lihat");?>  
		<?php echo "|"; ?>
		<?php echo anchor('umum/kelengkapan/'.$row['id_jamaah'], 'kelengkapan');?>
		</td>
		
	</tr>
		
	<?php endforeach;?></table>
	<center><div class="pagination"><?php echo "".$this->pagination->create_links().""; ?></div></center>
 <?php } 
 else {
 	?>
 	<table>
 	<tr>
 		<td></td>
 	</tr>
 	</table>
 	<div><p align="center" style="color: red "><?php echo 'nama jammah yang anda cari tidak ditemukan'; ?></p></div>
 	<?php } ?>