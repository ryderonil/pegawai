<script type='text/javascript'>
$(function(){
    $('.date').calendar();
});
</script>
<h2>Ubah Data Jamaah  <?php 
$paket = $hasilnya->row()->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		
		$tanggal_awal=$a->row()->jadwal_awal;
		$tanggal_akhir=$a->row()->jadwal_akhir;
		$nama_paket=$a->row()->nama_paket;

echo $hasilnya->row()->nama;
?> </h2>
	<?php echo form_open('umum/update_jamaah'); ?>
	<input type="hidden" name='id' value="<?php echo $hasilnya->row()->id_jamaah; ?>" />
		<table width=650 border=0>
          <tr><td colspan=4><b><u>Data Kelengkapan Umrah</u></b></td></tr>
		  <tr>
    <td width=2%>1.</td>
    <td width=17%>Paket </td>
    <td width=2%>:</td>
    <td><?php echo $nama_paket;?></td>
	</tr>
	<tr>
    <td width=2%>2.</td>
    <td width=17%>Harga </td>
    <td width=2%>:</td>
    <td>
     <?php echo $hasilnya->row()->harga;?>
    </td>
	</tr>
	<tr>
    <td width=2%>3.</td>
    <td width=17%>Waktu Perjalanan </td>
    <td width=2%>:</td>
    <td><?php echo $tanggal_awal.' s/d '.$tanggal_akhir;?></td>
	</tr>
	
	<tr><td colspan=3><b><u>Data Pribadi</u></b></td><td><div align=right></div></td></tr>
		  <tr>
    <td width=2%>1.</td>
    <td width=17%>Nama Lengkap </td>
    <td width=2%>:</td>
    <td><input type=text name='nama_lengkap' value="<?php echo $hasilnya->row()->nama; ?>" size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bin / Binti </td>
    <td>:</td><?php $sex = $hasilnya->row()->kel;?>
    <td><input type=text name='bin' value="<?php echo $hasilnya->row()->bin; ?>" size=48> 
    <input name='kel' type='radio' value='M' <?php echo ($sex=='M')?'checked':'' ?> />Laki - laki
    <input name='kel' type='radio' value='F' <?php echo ($sex=='F')?'checked':'' ?> />Perempuan
     </td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Tempat / Tgl. Lahir </td>
    <td>:</td>
    <td><input type=text name='tempat' value="<?php echo $hasilnya->row()->tempat_lahir; ?>" size=20> &emsp; Tgl. Lahir :<?php echo $hasilnya->row()->tgl_lahir; ?> </td>
  </tr>
  <?php $tgl= $hasilnya->row()->tgl_lahir; ?>
  <tr>
  	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>   Tgl <input type=text name='tgl' maxlength="2" value="<?php echo substr($tgl, 0,2);?>" size=2>  Bln 
    			  <select required="required" name='bln'>
                  <option value="" >--Pilih Bulan--</option>
                  <option value=Januari>Januari</option>
				  <option value=Februari>Februari</option>
				  <option value=Maret>Maret</option>
				  <option value=April>April</option>
				  <option value=Mei>Mei</option>
				  <option value=Juni>Juni</option>
				  <option value=Juli>Juli</option>
				  <option value=Agustus>Agustus</option>
				  <option value=September>September</option>
				  <option value=Oktober>Oktober</option>
				  <option value=November>November</option>
				  <option value=Desember>Desember</option>
                  </select>
				  Tahun <input type=text name='thn' maxlength="4" value="<?php echo substr($tgl, -4);?>" size=5> ( pilihlah bulan )</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Nomor KTP </td>
    <td>:</td>
    <td><input type=text name='no_ktp' value="<?php echo $hasilnya->row()->no_ktp; ?>" size=77></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Alamat Sesuai KTP </td>
    <td>:</td>
    <td><input type=text name='alamat_ktp' value="<?php echo $hasilnya->row()->alamat_ktp; ?>" size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No <input type=text name='no_alamat' value="<?php echo $hasilnya->row()->no_rumah; ?>" size=2>  Rt. <input type=text name='rt' value="<?php echo $hasilnya->row()->rt; ?>" size=2>  Rw. <input type=text name='rw' value="<?php echo $hasilnya->row()->rw; ?>" size=2></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Desa / Kelurahan </td>
    <td>:</td>
    <td><input type=text name='desa' value="<?php echo $hasilnya->row()->desa; ?>"size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kecamatan</td>
    <td>:</td>
    <td><input type=text name='kecamatan' value="<?php echo $hasilnya->row()->kec; ?>" size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kabupaten / Kodya </td>
    <td>:</td>
    <td><input type=text name='kabupaten' value="<?php echo $hasilnya->row()->kab; ?>" size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Propinsi</td>
    <td>:</td>
    <td><input type=text name='propinsi' value="<?php echo $hasilnya->row()->prof; ?>" size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td><input type=text maxlength="5" name='kode_pos' value="<?php echo $hasilnya->row()->pos_ktp; ?>" size=5></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Nomor Paspor </td>
    <td>:</td>
    <?php $kata = $hasilnya->row()->no_paspor;?>
    <td><input type=text name='pas_awal' value="<?php echo substr($kata, 0,2);?>" size=2> <input type=text name='pas_akhir' value="<?php echo substr($kata, -6);?>" size=10></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tempat dikeluarkan </td>
    <td>:</td>
    <td><input type=text name='tempat_dikeluarkan' value="<?php echo $hasilnya->row()->tempat_paspor; ?>" size=77></td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Alamat Rumah </td>
    <td>:</td>
    <td><textarea  name='alamat_rumah' " cols=74><?php echo $hasilnya->row()->alamat_rumah; ?></textarea></td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td><input type=text maxlength="5" name='kode_pos_rumah' value="<?php echo $hasilnya->row()->pos; ?>" size=5></td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Telpon</td>
    <td>:</td>
    <td><input type=text maxlength="5" required="required" name='t1' size=5> <input required="required" type=text name='t2' size=10> Hp. <input type=text maxlength="14" name='hp' value="<?php echo $hasilnya->row()->hp; ?>" size=20></td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>masukan no telepon, ganti jika ingin mengubah (<?php echo $hasilnya->row()->tlp; ?>)</td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Pendidikan Terakhir </td>
    <td>:</td><?php $pen = $hasilnya->row()->pendidikan; ?>
    <td><table width=500><tr><td><input name='pendidikan' type='radio' <?php echo ($pen=='SD')?'checked':'' ?> value='SD'/>01. SD </td>
					<td><input name='pendidikan'  type='radio' <?php echo ($pen=='SMP')?'checked':'' ?> value='SMP'/>02. SMP</td>
					<td><input name='pendidikan' type='radio' <?php echo ($pen=='SMU')?'checked':'' ?> value='SMU'/>03. SMU</td>
					<td><input name='pendidikan' type='radio' <?php echo ($pen=='Diploma')?'checked':'' ?> value='Diploma'/>04. Diploma</td>
					<td><input name='pendidikan' type='radio' <?php echo ($pen=='Sarjana S1/S2/S3')?'checked':'' ?> value='Sarjana S1/S2/S3'/>05. Sarjana S1/S2/S3</td>
					</tr></table></td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Pekerjaan</td>
    <td>:</td><?php $kerja = $hasilnya->row()->pekerjaan; ?>
    <td><table width=500><tr><td><input name='pekerjaan' type='radio' value='Peg. Negeri/Swasta/BUMN'/>01. Peg. Negeri/Swasta/BUMN </td>
					<td><input name='pekerjaan' type='radio' value='TNI/Polri'/>02. TNI/Polri</td>
					<td><input name='pekerjaan' type='radio' value='Wiraswasta/Dagang'/>03. Wiraswasta/Dagang</td></tr>
					<tr>
					<td><input name='pekerjaan' type='radio' value='Pensiunan/Purnawirawan'/>04. Pensiunan/Purnawirawan </td>
					<td><input name='pekerjaan' type='radio' value='Ibu Rumah Tangga'/>05. Ibu Rumah Tangga</td>
					<tr>
					<td><input name='pekerjaan' type='radio' value='Pelajar/Mahasiswa'/>06. Pelajar/Mahasiswa </td>
					<td colspan=2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 07. Lainnya <input type=text name='pekerjaan_lain' value="<?php echo $hasilnya->row()->pekerjaan;?>" size=20 ></td>
					</table></td>
  </tr>
    <tr>
    <td>11.</td>
    <td>Ciri - Ciri</td>
    <td>:</td>
    <td><table width=500 border="0"><tr><td>Muka	&nbsp;		&nbsp;   :<input type=text name='muka' value="<?php echo $hasilnya->row()->muka; ?>" size=10></td>
					<td>Hidung &nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;	&nbsp;	&nbsp;	&nbsp;:<input type=text name='hidung' value="<?php echo $hasilnya->row()->hidung; ?>" size=10> </td>
					<td>Tinggi Badan :<input type=text name='tinggi' value="<?php echo $hasilnya->row()->tinggi; ?>"size=10></td></tr>
					<tr>
					<td>Rambut :<input type=text name='rambut' value="<?php echo $hasilnya->row()->rambut; ?>" size=10></td>
					<td>Tanda lain &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  :<input type=text name='lain' value="<?php echo $hasilnya->row()->tanda_lain; ?>" size=10></td>
					<td>Barat Badan &nbsp;:<input type=text name='berat' value="<?php echo $hasilnya->row()->berat; ?>"size=10></td>
					</tr>
					<tr>
					<td>Alis &nbsp;	  &nbsp;	&nbsp;	 &nbsp;:<input type=text name='alis' value="<?php echo $hasilnya->row()->alis; ?>" size=10></td>
					<td>Golongan Darah :<input type=text name='gol_darah' value="<?php echo $hasilnya->row()->gol_darah; ?>" size=10></td>
					
					</tr>
					
					</table></td>
  </tr>
   <tr>
    <td>12.</td>
    <td>Ukuran Baju </td>
    <td>:</td>
    <td><table width=500><tr><td><input name='baju' type='radio' value='S'/>S </td>
					<td><input name='baju' type='radio' value='M'/>M</td>
					<td><input name='baju' type='radio' value='L'/>L</td>
					<td><input name='baju' type='radio' value='XL'/>XL</td>
					<td>Lainnya :<input name='baju_lain' type='text' value="<?php echo $hasilnya->row()->baju;?>" size="10"></td>
					</tr></table></td>
  </tr>
   <tr>
    <td>13.</td>
    <td>Nama Mahram </td>
    <td>:</td>
    <td><input type=text name='mahram' value="<?php echo $hasilnya->row()->mahram; ?>" size=77></td>
  </tr>
  <tr>
    <td>14.</td>
    <td>Hubungan Keluarga </td>
    <td>:</td><?php $hub = $hasilnya->row()->hub;?>
    <td><table width=500 border="0"><tr><td><input name='hub' type='radio' <?php echo ($hub =='Suami')?'checked':'' ?> value='Suami'/>01. Suami </td>
					<td><input name='hub' type='radio' <?php echo ($hub =='Ayah Kandung')?'checked':'' ?> value='Ayah Kandung'/>02. Ayah Kandung</td>
					<td><input name='hub' type='radio' <?php echo ($hub =='Saudara Kandung')?'checked':'' ?> value='Saudara Kandung'/>03. Saudara Kandung</td>
					<td><input name='hub' type='radio' <?php echo ($hub =='Anak Kandung')?'checked':'' ?>value='Anak Kandung'/>04. Anak Kandung</td></tr>
					<tr><td><input name='hub' type='radio' <?php echo ($hub =='Keponakan')?'checked':'' ?> value='Keponakan'/>05. Keponakan</td>
					<td><input name='hub' type='radio' <?php echo ($hub =='Paman')?'checked':'' ?> value='Paman'/>06. Paman</td>
					<td><input name='hub' type='radio' <?php echo ($hub =='Kakek')?'checked':'' ?> value='Kakek'/>07. Kakek</td>
					<td><input name='hub' type='radio' <?php echo ($hub =='Mertua')?'checked':'' ?> value='Mertua'/>08. Mertua</td>
					</tr>
					<tr>
					<td><input name='hub' type='radio' <?php echo ($hub =='Menantu')?'checked':'' ?> value='Menantu'/>09. Menantu</td>
					<td><input name='hub' type='radio' <?php echo ($hub =='Cucu')?'checked':'' ?> value='Cucu'/>10. Cucu</td>
					</tr>
					</table>
	</td>
  </tr>
   <tr><td>15.</td><td>Pembayaran</td><td>:</td><td><input type=text name='pembayaran'value="<?php echo $hasilnya->row()->pembayaran; ?>" size=40> melalui : 
   <select name='keterangan'>
   <?php $aa = $hasilnya->row()->cara_bayar;?>
   		<option value="">pilih</option>
   		<option <?php if($aa == 'Tunai') echo 'selected="selected"'; ?> value="Tunai">Tunai</option>
   		<option <?php if($aa == 'Transfer BSM') echo 'selected="selected"'; ?>value="Transfer BSM">Transfer BSM</option>
   		<option <?php if($aa == 'Transfer Mandiri') echo 'selected="selected"'; ?> value="Transfer Mandiri">Transfer Mandiri</option>
   		</select>
   		<br><br></td></tr>
  <tr><td></td><td align=right><input type=button value=Batal onclick=self.history.back()></td><td></td><td><input type=submit value=Simpan></td></tr>
	</table>
	<?php echo form_close(); ?>