 <h2>Daftar Jama'ah Berdasarkan Paket</h2>
 <table width=650 border="0">
 <?php
 $xx = $nomor_paket->row()->id_paket;
 $a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$xx'");
 $jeneng_paket = $a->row()->nama_paket;
 $tgl_awal = $a->row()->jadwal_awal;
 $tgl_akhir = $a->row()->jadwal_akhir;
 $ket = $a->row()->ket;
?>

  <tr>
  <td><input type=button value='excel' onclick="window.location.href='<?php echo base_url(); ?>umum/ex_per_paket/<?php echo $xx; ?>';"></td>
    <td align="right"><form method="post" action="<?php 
    
    echo base_url();?>umum/jumlah_jamaah_paket/<?php echo $xx; ?>">
 <input name="cari" type="text" value="<?php echo $this->session->userdata('peg');?>" /><input class="tombol" type="submit" name="submit" value="Cari" />

 </form></td>
  </tr>
</table>
<h4>
Data Jama'ah Umrah / Haji Paket  <?php echo $jeneng_paket?>
</h4>
<table width=650 border=0>
         
		  <tr>
    <td width=2%></td>
    <td width=17%>Nama Paket </td>
    <td width=2%>:</td>
    <td><?php echo $jeneng_paket;?></td>
	</tr>
	<tr>
    <td width=2%></td>
    <td width=17%>Tanggal </td>
    <td width=2%>:</td>
    <td><?php echo $tgl_awal.' s/d '.$tgl_akhir;?></td>
    </tr>
    
    <tr>
    <td width=2%></td>
    <td width=17%>Keterangan </td>
    <td width=2%>:</td>
    <td></td>
    </tr>
</table>
<?php echo $ket;?>
		<table width=650 border=1>
          <?php if(count($hasilnya) > 0){ ?>
          <tr><th rowspan=2>No</th><th rowspan=2>Nama Jamaah</th><th colspan=2>Tanggal</th><th rowspan=2>Melalui Distro</th><th rowspan=2>Pilihan</th></tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th>
		  <?php
		  
		  $c = 1; 
		foreach ($hasilnya as $jml=>$row):
		$paket = $row['id_paket'];
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		
		$tanggal_awal=$a->row()->jadwal_awal;
		$tanggal_akhir=$a->row()->jadwal_akhir;
		$nama_paket=$a->row()->nama_paket;
		
		$user = $row['id_kl'];
		$x = $this->db->query("SELECT * FROM kl WHERE `id_kl`='$user'");
		$nama_kl = $x->row()->nama_kl;
	?>
	
	<tr align="left">
		
		<td><?php echo $jml+1; //$c; $c++;?></td>
		<td align=center><?php echo $row['nama'];?></td>
		
		<td align=center><?php echo $tanggal_awal;?></td>
		<td align=center><?php echo $tanggal_akhir;?></td>
		<td align=center><?php echo $nama_kl;?></td>
		
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