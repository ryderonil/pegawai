 <h2>Penjualan Setiap User</h2>
 <table width=650>
  <tr>
    <td> </td>
    <td align="right"><form method="post" action="<?php echo base_url();?>admin/penjualan_user">
 <input name="cari" type="text" value="<?php echo $this->session->userdata('peg');?>" /><input class="tombol" type="submit" name="submit" value="Cari" />
 </form></td>
  </tr>
</table>
		<table width=650 border=1>
          <?php if(count($hasilnya) > 0){ ?>
          <tr><th>no</th><th>nama distro</th><th>nama penggung jawab</th><th>Jumlah </th>
		  <?php
		  $a = 1;  
		foreach ($hasilnya as $row):
		$id = $row['id_kl'];
		
		$d = $this->db->query("SELECT COUNT(`id_kl`) AS jumlah FROM jamaah WHERE `id_kl`='$id'");
		$b=$d->row()->jumlah;
		
		$user = $row['id_user'];
		$userquery = $this->db->query("SELECT * FROM user WHERE `id_user`='$user'");
		$hasil=$userquery->row()->nama;
			?>
	
	<tr align="left">
		
		<td><?php echo $a; ?></td>
		<td align=center><?php echo $row['nama_kl'];?></td>
		
		<td align=center><?php echo $hasil;?></td>
		<td align=center> 
			<?php if($b!=0)
			 echo anchor('umum/jumlah_jamaah_user/'.$id, $b); 
			else
			echo $b;?>
		</td>
		 
		
	</tr>
		
	<?php $a++;
	endforeach;
	?></table>
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