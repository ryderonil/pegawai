<h2>Isi Kelengkapan 

<u><?php 
$paket = $hasilnya->row()->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		$nama=$a->row()->nama_paket;
		
echo $nama?></u> ( <?php echo $hasilnya->row()->nama;?> )
</h2>
	<?php echo form_open('umum/save_kelengkapan'); ?>
	<input type="hidden" name="id" value="<?php  echo $hasilnya->row()->id_jamaah?>">
	
	<table width=300 border=0>
  	<tr>
	    <td>1.</td>
	    <td>Buku Kuning</td>
	    <td>:</td>
	    <td><select name='bk' >
	    	<option value="Tidak Ada">Tidak Ada</option>
	    	<option value="Ada">Ada</option>
	    	<option value="Proses">Proses</option>
	    </select></td>
  	</tr>
	<tr>
	    <td>2.</td>
	    <td>KTP</td>
	    <td>:</td>
	    <td><select name='ktp'>
	    	<option value="Tidak Ada">Tidak Ada</option>
	    	<option value="Ada">Ada</option>
	    	<option value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr>
	    <td>3.</td>
	    <td>NPWP</td>
	    <td>:</td>
	    <td><select name='npwp'>
	    	<option value="Tidak Ada">Tidak Ada</option>
	    	<option value="Ada">Ada</option>
	    	<option value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr>
	    <td>4.</td>
	    <td>Kartu keluarga</td>
	    <td>:</td>
	    <td><select name='kk'>
	    	<option value="Tidak Ada">Tidak Ada</option>
	    	<option value="Ada">Ada</option>
	    	<option value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr>
	    <td>5.</td>
	    <td>Foto</td>
	    <td>:</td>
	    <td><select name='foto'>
	    	<option value="Tidak Ada">Tidak Ada</option>
	    	<option value="Ada">Ada</option>
	    	<option value="Proses">Proses</option>
	    </select>
	    </td>
  	</tr>
  	<tr><td></td><td align=right><input type=button value=Batal onclick=self.history.back()></td><td></td><td><input type=submit value=Simpan></td></tr>
  </table>
  	<?php echo form_close(); ?>