<?php $id = $hasilnya->row()->id_jamaah; 

$paket = $hasilnya->row()->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		$nama=$a->row()->nama_paket;
?>

<h2>Data Kelengkapan <u><?php echo $nama ?></u> ( <?php echo $hasilnya->row()->nama;?> )</h2>

<?php $tes = $this->umum_model->get_detail_kelengkapan($id)->num_rows();
	if($tes==0){
		?>
		<table width=450 border=1>
          <tr><th width=5%>No </th><th width=30%>Kelengkapan</th><th>Status</th></tr>
		  <tr><td align=center>1. </td><td>Pembayaran</td><td><?php echo $hasilnya->row()->pembayaran;?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  <input type=button value=Edit onclick="window.location.href='<?php echo base_url(); ?>umum/edit_bayar/<?php echo $id;?>';">
		  </td></tr>
		  <tr><td align=center>2. </td><td>Paspor</td><td><?php echo $hasilnya->row()->no_paspor;?>
		  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  <input type=button value=Edit onclick="window.location.href='<?php echo base_url(); ?>umum/edit_paspor/<?php echo $id;?>';">
		  </td></tr>
		  <tr><td align=center>3. </td><td>Buku Kuning</td><td></td></tr>
		  <tr><td align=center>4. </td><td>KTP</td><td></td></tr>
		  <tr><td align=center>5. </td><td>NPWP</td><td></td></tr>
		  <tr><td align=center>6. </td><td>Katu Keluarga</td><td></td></tr>
		  <tr><td align=center>7. </td><td>Foto</td><td></td></tr>
		  </table>
		  <br><input type=button value=Kembali onclick=self.history.back()>
		  <td align=right><input type=button value=Isi onclick="window.location.href='<?php echo base_url(); ?>umum/isi_kelengkapan/<?php echo $id;?>';"></td>
		  <br><br><br><br><br><br><br><br><br>
		  <?php }
		  else {
		  ?>

		<table width=450 border=1>
          <tr><th width=5%>No </th><th width=30%>Kelengkapan</th><th>Status</th></tr>
		  <tr><td align=center>1. </td><td>Pembayaran</td><td><?php echo $hasilnya->row()->pembayaran;?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  <input type=button value=Edit onclick="window.location.href='<?php echo base_url(); ?>umum/edit_bayar/<?php echo $id;?>';">
		  </td></tr>
		  <tr><td align=center>2. </td><td>Paspor</td><td><?php echo $hasilnya->row()->no_paspor;?>	
		  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		  <input type=button value=Edit onclick="window.location.href='<?php echo base_url(); ?>umum/edit_paspor/<?php echo $id;?>';">
		  </td></tr>
		  <tr><td align=center>3. </td><td>Buku Kuning</td><td><?php echo $lengkap->row()->buku_k;?></td></tr>
		  <tr><td align=center>4. </td><td>KTP</td><td><?php echo $lengkap->row()->ktp;?></td></tr>
		  <tr><td align=center>5. </td><td>NPWP</td><td><?php echo $lengkap->row()->npwp;?></td></tr>
		  <tr><td align=center>6. </td><td>Katu Keluarga</td><td><?php echo $lengkap->row()->kk;?></td></tr>
		  <tr><td align=center>7. </td><td>Foto</td><td><?php echo $lengkap->row()->poto;?></td></tr>
		  </table>
		  <br><input type=button value=Kembali onclick=self.history.back()>
		  <td align=right><input type=button value=Edit onclick="window.location.href='<?php echo base_url(); ?>umum/edit_kelengkapan/<?php echo $id;?>';"></td>
		  <br><br><br><br><br><br><br><br><br><?php }?>
		  