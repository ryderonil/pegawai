<h2>Edit Kelengkapan 

<u><?php
$paket = $nama->row()->id_paket;
$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		$nama_paket=$a->row()->nama_paket;
echo $nama_paket;?></u> ( <?php echo $nama->row()->nama;?> )
</h2>
	<?php echo form_open('umum/update_kelengkapan'); ?>
	<input type="hidden" name="id" value="<?php  echo $hasilnya->row()->id_jamaah?>">
	
	<?php $bk =   $hasilnya->row()->buku_k;
	$ktp = $hasilnya->row()->ktp;
	$npwp = $hasilnya->row()->npwp;
	$kk = $hasilnya->row()->kk;
 	$poto = $hasilnya->row()->poto;
	?>
	<table width=300 border=0>
	<tr>
	    <td>1.</td>
	    <td>Buku Kuning</td>
	    <td>:</td>
	    <td><select name='bk' >
	    	<option  <?php echo ($bk =='Tidak Ada')?'selected':'' ?> value="Tidak Ada">Tidak Ada</option>
	    	<option  <?php echo ($bk =='Ada')?'selected':'' ?> value="Ada">Ada</option>
	    	<option  <?php echo ($bk =='Proses')?'selected':'' ?> value="Proses">Proses</option>
	    </select></td>
  	</tr>
	<tr>
	    <td>2.</td>
	    <td>KTP</td>
	    <td>:</td>
	    <td><select name='ktp'>
	    	<option <?php echo ($ktp =='Tidak Ada')?'selected':'' ?>value="Tidak Ada">Tidak Ada</option>
	    	<option <?php echo ($ktp =='Ada')?'selected':'' ?> value="Ada">Ada</option>
	    	<option <?php echo ($ktp =='Proses')?'selected':'' ?> value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr>
	    <td>3.</td>
	    <td>NPWP</td>
	    <td>:</td>
	    <td><select name='npwp' >
	    	<option  <?php echo ($npwp =='Tidak Ada')?'selected':'' ?> value="Tidak Ada">Tidak Ada</option>
	    	<option  <?php echo ($npwp =='Ada')?'selected':'' ?> value="Ada">Ada</option>
	    	<option  <?php echo ($npwp =='Proses')?'selected':'' ?> value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr>
	    <td>4.</td>
	    <td>Kartu keluarga</td>
	    <td>:</td>
	    <td><select name='kk' >
	    	<option  <?php echo ($kk =='Tidak Ada')?'selected':'' ?> value="Tidak Ada">Tidak Ada</option>
	    	<option  <?php echo ($kk =='Ada')?'selected':'' ?> value="Ada">Ada</option>
	    	<option  <?php echo ($kk =='Proses')?'selected':'' ?> value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr>
	    <td>5.</td>
	    <td>Foto</td>
	    <td>:</td>
	    <td><select name='foto'>
	    	<option <?php echo ($poto =='Tidak Ada')?'selected':'' ?> value="Tidak Ada">Tidak Ada</option>
	    	<option <?php echo ($poto =='Ada')?'selected':'' ?> value="Ada">Ada</option>
	    	<option <?php echo ($poto =='Proses')?'selected':'' ?> value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr><td></td><td align=right><input type=button value=Batal onclick=self.history.back()></td><td></td><td><input type=submit value=Update></td></tr>
  </table>
  	<?php echo form_close(); ?>