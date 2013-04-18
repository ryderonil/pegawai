 <h2>Daftar Jama'ah Setiap User </h2>
 <table width=650>
  <tr>
   <?php 
   $no = $nomor_user->row()->id_kl;
   $xxxx = $this->db->query("SELECT * FROM kl WHERE `id_kl`='$no'");
 	$jeneng_paket = $xxxx->row()->nama_kl;
 	
   ?> 
   <td><input type=button value='excel' onclick="window.location.href='<?php echo base_url(); ?>umum/ex_jamaah_user/<?php echo $no; ?>';"></td>
    <td align="right"><form method="post" action="<?php echo base_url();?>umum/jumlah_jamaah_user/<?php echo $no;?>">
    
 <input name="cari" type="text" value="<?php echo $this->session->userdata('peg');?>" /><input class="tombol" type="submit" name="submit" value="Cari" />
 </form></td>
 
  </tr>
</table>
<h4>
Daftar Jama'ah dari <?php echo $jeneng_paket?>
</h4>
		<table width=650 border=1>
          <?php if(count($hasilnya) > 0){ ?>
          <tr><th rowspan=2>No</th><th rowspan=2>Nama Jamaah</th><th colspan=2>Tanggal</th><th rowspan=2>Paket</th><th rowspan=2>Pilihan</th></tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th>
		  <?php 
		  $c = 1;
		foreach ($hasilnya as $row):
		$paket = $row['id_paket'];
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		
		$tanggal_awal=$a->row()->jadwal_awal;
		$tanggal_akhir=$a->row()->jadwal_akhir;
		$nama_paket=$a->row()->nama_paket;
		
	?>
	
	<tr align="left">
		
		<td><?php echo  $c++;?></td>
		<td align=center><?php echo $row['nama'];?></td>
		
		<td align=center><?php echo $tanggal_awal;?></td>
		<td align=center><?php echo $tanggal_akhir;?></td>
		<td align=center><?php echo $nama_paket.'('.$row['harga'].')';?></td>
		
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