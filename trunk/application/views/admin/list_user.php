 <h2>Manajemen User</h2>
 <table width=650>
  <tr>
    <td> <input type=button value='Tambah User' onclick="window.location.href='<?php echo base_url(); ?>admin/add_user';"></td>
    <td> <input type=button value='Data KL' onclick="window.location.href='<?php echo base_url(); ?>admin/list_kl';"></td>
    <td align="right"><form method="post" action="<?php echo base_url();?>admin/list_user">
 <input name="cari" type="text" value="<?php echo $this->session->userdata('peg');?>" /><input class="tombol" type="submit" name="submit" value="Cari" />
 </form></td>
  </tr>
</table>
		<table width=650 border=1>
          <?php if(count($hasilnya) > 0){ ?>
          <tr><th>no</th><th>nama</th><th>email (username)</th><th>No.Telp/HP</th><th>level</th><th>Blokir</th><th>aksi</th>
		  <?php 
		  $a = 1;
		foreach ($hasilnya as $row):
		
		
	?>
	
	<tr align="left">
		
		<td><?php echo  $a; $a++;?></td>
		<td align=center><?php echo $row['nama'];?></td>
		<td align=center><?php echo $row['username'];?></td>
		<td align="center"><?php echo $row['no_telp'];?></td>
		<td align="center"><?php echo $row['level'];?></td>
		<td align=center><?php echo $row['blokir'];?></td>
		
		<td align=center><?php echo anchor("admin/edit_user/".$row['id_user'],"Edit");?>  
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