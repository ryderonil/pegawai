 <h2>Daftar KL</h2>
 <table width=650>
  <tr>
    <td> <input type=button value='Tambah KL' onclick="window.location.href='<?php echo base_url(); ?>admin/add_kl';"></td>
    <td align="right"><form method="post" action="<?php echo base_url();?>admin/list_user">
 <input name="cari" type="text" value="<?php echo $this->session->userdata('peg');?>" /><input class="tombol" type="submit" name="submit" value="Cari" />
 </form></td>
  </tr>
</table>
		<table width=650 border=1>
          <?php if(count($hasilnya) > 0){ ?>
          <tr><th>no</th><th>nama KL</th><th>nama penanggung jawab</th><th>Alamat</th><th>aksi</th>
		  <?php 
		  $a = 1;
		foreach ($hasilnya as $row):
		$user = $row['id_user'];
		$x = $this->db->query("SELECT * FROM user WHERE `id_user`='$user'");
		$ttg=$x->row()->nama;
	?>
	
	<tr align="left">
		
		<td><?php echo  $a; $a++;?></td>
		<td align=center><?php echo $row['nama_kl'];?></td>
		<td align=center><?php echo $ttg;?></td>
		<td align=center><?php echo $row['alamat'];?></td>
		<td align=center><?php echo anchor("admin/edit_kl/".$row['id_kl'],"Edit");?>  
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