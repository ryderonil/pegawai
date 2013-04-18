
<h2><?php 
$paket = $hasilnya->row()->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		
		$tanggal_awal=$a->row()->jadwal_awal;
		$tanggal_akhir=$a->row()->jadwal_akhir;
		$nama_paket=$a->row()->nama_paket;
		
echo $hasilnya->row()->nama.' : '.$nama_paket.' ( '.$tanggal_awal.' s/d '.$tanggal_akhir.' )';
?> </h2>
<table width=650 border="0">
	<?php $id = $hasilnya->row()->id_jamaah; ?>
	<tr><td colspan=3><b><u>Data Pribadi</u></b></td><td><div align=right></div><div align=right>No : <?php echo $id; ?></div></td></tr>
		  <tr>
    <td width=2%>1.</td>
    <td width=17%>Nama Lengkap </td>
    <td width=2%>:</td>
    <td><?php echo $hasilnya->row()->nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bin / Binti </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->bin; ?>&emsp; 	  &emsp; &emsp;&emsp;&emsp;&emsp;M/F : <?php echo $hasilnya->row()->kel;?>
     </td>
     
  </tr>
  <tr>
    <td>2.</td>
    <td>Tempat / Tgl. Lahir </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->tempat_lahir.' / '.$hasilnya->row()->tgl_lahir; ?></td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Nomor KTP </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->no_ktp; ?></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Alamat Sesuai KTP </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->alamat_ktp; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No. <?php echo $hasilnya->row()->no_rumah; ?>&emsp; &emsp;  Rt. <?php echo $hasilnya->row()->rt; ?> &emsp; &emsp; Rw. <?php echo $hasilnya->row()->rw; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Desa / Kelurahan </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->desa; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kecamatan</td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->kec; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kabupaten / Kodya </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->kab; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Propinsi</td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->prof; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->pos_ktp; ?></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Nomor Paspor </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->no_paspor; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tempat dikeluarkan </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->tempat_paspor; ?></td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Alamat Rumah </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->alamat_rumah; ?></td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->pos; ?></td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Telpon</td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->tlp; ?>&emsp; &emsp; Hp. <?php echo $hasilnya->row()->hp; ?></td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Pendidikan Terakhir </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->pendidikan; ?></td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->pekerjaan; ?></td>
  </tr>
    <tr>
    <td>11.</td>
    <td>ciri - ciri</td>
    <td>:</td>
    <td><table width=500 style="margin: 0px;"><tr><td>Muka	&nbsp;		&nbsp;   :<?php echo $hasilnya->row()->muka; ?></td>
					<td>Hidung &nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;	&nbsp;&nbsp; &nbsp; &nbsp;:<?php echo $hasilnya->row()->hidung; ?> </td>
					<td>Tinggi Badan :<?php echo $hasilnya->row()->tinggi; ?></td></tr>
					<tr>
					<td>Rambut :<?php echo $hasilnya->row()->rambut; ?></td>
					<td>Tanda lain &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  :<?php echo $hasilnya->row()->tanda_lain; ?></td>
					<td>Barat Badan &nbsp;:<?php echo $hasilnya->row()->berat; ?></td>
					</tr>
					<tr>
					<td>Alis &nbsp;	  &nbsp;	&nbsp;	 &nbsp;:<?php echo $hasilnya->row()->alis; ?></td>
					<td>Golongan Darah &nbsp;:<?php echo $hasilnya->row()->gol_darah; ?></td>
					<td> Ukuran Baju &nbsp;:<?php echo $hasilnya->row()->baju; ?></td>
					</tr>
					
					</table></td>
  </tr>
  <tr><td colspan=4><b><u>Data Kelengkapan Perjalanan Umrah / Haji</u></b></td></tr>
   <tr>
    <td>12.</td>
    <td>Paket Pilihan </td>
    <td>:</td>
    <td><?php echo $nama_paket; ?> </td>
  </tr>
   <tr>
    <td>13.</td>
    <td>Harga Paket </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->harga; ?></td>
  </tr>
  <tr>
    <td>14.</td>
    <td>Waktu Perjalanan </td>
    <td>:</td>
    <td><?php echo $tanggal_awal.' s/d '.$tanggal_akhir; ?>
	</td>
  </tr>
   <tr>
    <td>15.</td>
    <td>Nama Mahram </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->mahram; ?></td>
  </tr>
  <tr>
    <td>16.</td>
    <td>Hubungan Keluarga </td>
    <td>:</td>
    <td><?php echo $hasilnya->row()->hub; ?></td>
  </tr>
  <tr><td></td><td><input type=button value=Kembali onclick=self.history.back()></td>
  <td></td>
  
  <td align=right><input type=button value=Ubah onclick="window.location.href='<?php echo base_url(); ?>umum/edit/<?php echo $id;?>'">&emsp;	&emsp;	&emsp;	&emsp;&emsp;	&emsp;	&emsp;	&emsp;&emsp;	&emsp;	&emsp;	&emsp;	
  <input type=button value='Cetak Data' onclick="window.location.href='<?php echo base_url(); ?>pdf_test/tcpdf/<?php echo $id;?>';">
 
	</table>
	