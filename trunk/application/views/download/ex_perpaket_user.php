<?php 
ini_set("memory_limit","130M");

	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Data Jama'ah Tiap User.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>
 <?php
 $user = $hasilnya->row()->id_user;
		$x = $this->db->query("SELECT * FROM user WHERE `id_user`='$user'");
		$nama_kl = $x->row()->nama_kl;
 
 $xx = $nomor_paket->row()->id_paket;
 $a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$xx'");
 $jeneng_paket = $a->row()->nama_paket;
 $tgl_awal = $a->row()->jadwal_awal;
 $tgl_akhir = $a->row()->jadwal_akhir;
 $ket = $a->row()->ket;
?>
<h2>Daftar Jama'ah dari <?php echo $nama_kl;?>, Berdasarkan Paket</h2>
<h4>
Daftar Jama'ah <?php echo $jeneng_paket?>
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
          <tr><th rowspan=2>No</th><th rowspan=2>Nama Jamaah</th><th colspan=2>Tanggal</th><th rowspan=2>Melalui Distro</th></tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th>
		  <?php
		  
		  $c = 1; 
		foreach ($hasilnya->result() as $row):
		$paket = $row->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		
		$tanggal_awal=$a->row()->jadwal_awal;
		$tanggal_akhir=$a->row()->jadwal_akhir;
		$nama_paket=$a->row()->nama_paket;
		
		
	?>
	
	<tr align="left">
		
		<td><?php echo  $c; $c++;?></td>
		<td align=center><?php echo $row->nama;?></td>
		
		<td align=center><?php echo $tanggal_awal;?></td>
		<td align=center><?php echo $tanggal_akhir;?></td>
		<td align=center><?php echo $nama_kl;?></td>
		
		
	</tr>
		
	<?php endforeach;?></table>
	
 <?php } 
 else {
 	?>
 	
 	<?php } ?>