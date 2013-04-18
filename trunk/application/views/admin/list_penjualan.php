<h2>Penjualan</h2>

<table width=650>
  <tr>
    <td><input type=button value='Semua Data' onclick="window.location.href='<?php echo base_url(); ?>umum/list_penjualan';"></td>
    <td align="right"><form method="post" action="<?php echo base_url();?>admin/penjualan">
 <input name="cari" type="text" value="<?php echo $this->session->userdata('peg');?>" /><input class="tombol" type="submit" name="submit" value="Cari" />
 </form></td>
  </tr>
</table>

          <table width=650 border=1>
	<?php if(count($hasilnya) > 0){ ?>
	<tr><th rowspan=2>No</th><th rowspan=2>Nama</th><th colspan=2>Tanggal</th><th rowspan=2>Jumlah</th></tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th></tr>
	<?php 
			$d = 1;
		foreach ($hasilnya as $row):

		$paket = $row['id_paket'];
		$a = $this->db->query("SELECT COUNT(`id_paket`) AS jumlah FROM jamaah WHERE `id_paket`='$paket'");
		
		
		$b=$a->row()->jumlah;
		
	?>
	
	<tr align="left">
		
		<td align=center><?php echo  $d; $d++;?></td>
		<td align=center><?php echo $row['nama_paket'];?></td>
		
		<td align=center><?php echo $row['jadwal_awal'];?></td>
		<td align=center><?php echo $row['jadwal_akhir'];?></td>
		
		<td align=center><?php echo anchor('umum/jumlah_jamaah/'.$row['id_paket'], $b);?>
		</td>
		
	</tr>
		
	<?php endforeach;?>
</table>
<center><div class="pagination"><?php echo "".$this->pagination->create_links().""; ?></div></center>
 <?php } 
 else {
 	?><table>
 	<tr>
 		<td></td>
 	</tr>
 	</table>
 	<p align="center" style="color: red "><?php echo 'Data Paket yang Anda Cari Tidak Ditemukan'; ?></p>
 	<?php } ?>