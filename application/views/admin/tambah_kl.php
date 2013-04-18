<h2>Tambah KL</h2>
          <?php echo form_open('admin/save_kl'); ?>
          <table>
          <tr><td>Nama KL</td> <td> : <input required="required" type=text name='nama_kl' size=30></td></tr> 
          <tr><td>Kota</td>     <td> : <input type=text name='kota' size=30></td></tr>
          <tr><td>Penanggung Jawab</td>     <td> : 
          			<select style="width: 190px" name="jawab" required = "required">
	   						<option value="">Penanggung Jawab</option>
							<?php foreach ($hasilnya->result() as $row):?>
							<option value="<?php echo $row->id_user;?>" /><?php echo $row->nama;?>
							<?php endforeach;?>
					</select>
					</td></tr> 
     
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table>
		  <?php echo form_close();?>