<h2>Paspor  
<u><?php 
$paket = $hasilnya->row()->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		$nama=$a->row()->nama_paket;
echo $nama; ?></u> ( <?php echo $hasilnya->row()->nama;?> )
</h2>

<?php echo form_open('umum/save_paspor'); ?>
	<input type="hidden" name="id" value="<?php  echo $hasilnya->row()->id_jamaah?>">
	<table width=450 border=0>
	<tr>
	 <td >Nomor Paspor </td>
    <td>:</td>
    <?php $kata = $hasilnya->row()->no_paspor;?>
    <td><input maxlength="2" type=text name='pas_awal' value="<?php echo substr($kata, 0,2);?>" size=2> <input type=text name='pas_akhir' value="<?php echo substr($kata, -6);?>" size=10></td>
	</tr>
	
	<tr>
   
    <td>Tempat dikeluarkan </td>
    <td>:</td>
    <td><input type=text name='tempat_dikeluarkan' value="<?php echo $hasilnya->row()->tempat_paspor; ?>" size=40></td>
  </tr>
	<tr>
	<td><input type=button value=Batal onclick=self.history.back()></td><td align=right></td>
	<td><input type=submit value=Simpan></td>

	</tr>
  	</table>
  	<?php echo form_close(); ?>