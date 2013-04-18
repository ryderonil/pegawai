<script type='text/javascript'>
$(function(){
    $('.date').calendar();
});
</script>
<h2>Pendaftaran <?php 
echo $hasilnya->row()->nama_paket.' ( '.$hasilnya->row()->jadwal_awal.' s/d '.$hasilnya->row()->jadwal_akhir.' )';
?> </h2>
	<?php echo form_open('kl/save_jamaah'); ?>
	<input type="hidden" name="id" value="<?php echo from_session('id')?>">
	<input type="hidden" name="id_paket" value="<?php  echo $hasilnya->row()->id_paket?>">
		<table width=650 border=0>
          <tr><td colspan=4><b><u>Data Kelengkapan Umrah</u></b></td></tr>
		  <tr>
    <td width=2%>1.</td>
    <td width=17%>Paket </td>
    <td width=2%>:</td>
    <td><?php echo $hasilnya->row()->nama_paket;?></td>
	</tr>
	<tr>
    <td width=2%>2.</td>
    <td width=17%>Harga </td>
    <td width=2%>:</td>
    <td>
     <input type="text" readonly="readonly" name="harga" value="
	<?php if ($harga == 'qrd'){
    	echo $hasilnya->row()->harga_qrd;
    }
    elseif ($harga == 'tpl'){
    	echo $hasilnya->row()->harga_tpl;
    }
    else {
    	echo $hasilnya->row()->harga_dbl;
    } ?>">
    </td>
	</tr>
	<tr>
    <td width=2%>3.</td>
    <td width=17%>Waktu Perjalanan </td>
    <td width=2%>:</td>
    <td><?php echo $hasilnya->row()->jadwal_awal.' s/d '.$hasilnya->row()->jadwal_akhir?></td>
	</tr>
	
	<tr><td colspan=3><b><u>Data Pribadi</u></b></td><td><div align=right></div></td></tr>
<tr>
    <td width=2%>1.</td>
    <td width=17%>Nama Lengkap </td>
    <td width=2%>:</td>
    <td><input required="required" type=text name='nama_lengkap' size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bin / Binti </td>
    <td>:</td>
    <td><input required="required" type=text name='bin' size=48> <input name='kel' type='radio' value='L'/>laki - laki
    <input required="required" name='kel' type='radio' value='P'/>Perempuan
     </td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Tempat / Tgl. Lahir </td>
    <td>:</td> 
    <td><input required="required" type=text name='tempat' size=20>    Tgl <input required="required" maxlength="2" type=text name='tgl' size=2>  Bln <select  required="required" name='bln'>
                  <option value="">--Pilih Bulan--</option>
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
				  Tahun <input required="required" maxlength="4" type=text name='thn' size=5> </td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Nomor KTP </td>
    <td>:</td>
    <td><input required="required" type=text name='no_ktp' size=77></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Alamat Sesuai KTP </td>
    <td>:</td>
    <td><input type=text name='alamat_ktp' size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No <input type=text name='no_alamat' size=2>  Rt. <input type=text name='rt' size=2>  Rw. <input type=text name='rw' size=2></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Desa / Kelurahan </td>
    <td>:</td>
    <td><input type=text name='desa' size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kecamatan</td>
    <td>:</td>
    <td><input type=text name='kecamatan' size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kabupaten / Kodya </td>
    <td>:</td>
    <td><input type=text name='kabupaten' size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Propinsi</td>
    <td>:</td>
    <td><input type=text name='propinsi' size=77></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td><input type=text maxlength="5" name='kode_pos' size=5></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Nomor Paspor </td>
    <td>:</td>
    <td><input type=text name='pas_awal' size=2> <input type=text name='pas_akhir' size=10></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tempat dikeluarkan </td>
    <td>:</td>
    <td><input type=text name='tempat_dikeluarkan' size=77></td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Alamat Rumah </td>
    <td>:</td>
    <td><textarea  name='alamat_rumah' cols=74></textarea></td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td><input type=text maxlength="5" name='kode_pos_rumah' size=5></td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Telpon</td>
    <td>:</td>
    <td><input type=text maxlength="4" name='t1' size=5> <input type=text name='t2' size=10> Hp. <input type=text name='hp' maxlength="14" size=20></td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Pendidikan Terakhir </td>
    <td>:</td>
    <td><table width=500><tr><td><input name='pendidikan' type='radio' value='SD'/>01. SD </td>
					<td><input name='pendidikan' type='radio' value='SMP'/>02. SMP</td>
					<td><input name='pendidikan' type='radio' value='SMU'/>03. SMU</td>
					<td><input name='pendidikan' type='radio' value='Diploma'/>04. Diploma</td>
					<td><input name='pendidikan' type='radio' value='Sarjana S1/S2/S3'/>05. Sarjana S1/S2/S3</td>
					</tr></table></td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><table width=500><tr><td><input name='pekerjaan' type='radio' value='Peg. Negeri/Swasta/BUMN'/>01. Peg. Negeri/Swasta/BUMN </td>
					<td><input name='pekerjaan' type='radio' value='TNI/Polri'/>02. TNI/Polri</td>
					<td><input name='pekerjaan' type='radio' value='Wiraswasta/Dagang'/>03. Wiraswasta/Dagang</td></tr>
					<tr>
					<td><input name='pekerjaan' type='radio' value='Pensiunan/Purnawirawan'/>04. Pensiunan/Purnawirawan </td>
					<td><input name='pekerjaan' type='radio' value='Ibu Rumah Tangga'/>05. Ibu Rumah Tangga</td>
					<tr>
					<td><input name='pekerjaan' type='radio' value='Pelajar/Mahasiswa'/>06. Pelajar/Mahasiswa </td>
					<td colspan=2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 07. Lainnya <input type=text name='pekerjaan_lain' size=20 ></td>
					</table></td>
  </tr>
    <tr>
    <td>11.</td>
    <td>ciri - ciri</td>
    <td>:</td>
    <td><table width=500 border="0"><tr><td>Muka	&nbsp;		&nbsp;   :<input type=text name='muka' size=10></td>
					<td>Hidung &nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;	&nbsp;	&nbsp;	&nbsp;:<input type=text name='hidung' size=10> </td>
					<td>Tinggi Badan :<input type=text name='tinggi' size=10></td></tr>
					<tr>
					<td>Rambut :<input type=text name='rambut' size=10></td>
					<td>Tanda lain &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  :<input type=text name='lain' size=10></td>
					<td>Barat Badan &nbsp;:<input type=text name='berat' size=10></td>
					</tr>
					<tr>
					<td>Alis &nbsp;	  &nbsp;	&nbsp;	 &nbsp;:<input type=text name='alis' size=10></td>
					<td>Golongan Darah :<input type=text name='gol_darah' size=10></td>
					
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
					<td>Lainnya :<input name='baju_lain' type='text' size="10"></td>
					</tr></table></td>
  </tr>
   <tr>
    <td>13.</td>
    <td>Nama Mahram </td>
    <td>:</td>
    <td><input type=text name='mahram' size=77></td>
  </tr>
  <tr>
    <td>14.</td>
    <td>Hubungan Keluarga </td>
    <td>:</td>
    <td><table width=500 border="0"><tr><td><input name='hub' type='radio' value='Suami'/>01. Suami </td>
					<td><input name='hub' type='radio' value='Ayah Kandung'/>02. Ayah Kandung</td>
					<td><input name='hub' type='radio' value='Saudara Kandung'/>03. Saudara Kandung</td>
					<td><input name='hub' type='radio' value='Anak Kandung'/>04. Anak Kandung</td></tr>
					<tr><td><input name='hub' type='radio' value='Keponakan'/>05. Keponakan</td>
					<td><input name='hub' type='radio' value='Paman'/>06. Paman</td>
					<td><input name='hub' type='radio' value='Kakek'/>07. Kakek</td>
					<td><input name='hub' type='radio' value='Mertua'/>08. Mertua</td>
					</tr>
					<tr>
					<td><input name='hub' type='radio' value='Menantu'/>09. Menantu</td>
					<td><input name='hub' type='radio' value='Cucu'/>10. Cucu</td>
					</tr>
					</table>
	</td>
  </tr>
   <tr><td>15.</td><td>Pembayaran</td><td>:</td><td><input type=text name='pembayaran' size=40> 
   melalui : 
   <select name='keterangan'>
   		<option value="">pilih</option>
   		<option value="Tunai">Tunai</option>
   		<option value="Transfer BSM">Transfer BSM</option>
   		<option value="Transer Mandiri">Transer Mandiri</option>
   		
   </select><br><br></td></tr>
  <tr><td></td><td align=right><input type=button value=Batal onclick=self.history.back()></td><td></td><td><input type=submit value=Simpan></td></tr>
	</table>
	<?php echo form_close(); ?>