<?php
class pdf_test extends  CI_Controller {

    function pdf_test()
    {
       parent::__construct();
       $this->load->model('umum_model');
       $this->load->model('admin_model');
       $this->pdf = new TCPDF('P', 'mm', 'A4');
    }
 	

    function tcpdf($id)
	{
	$isi = $this->umum_model->get_detail_jamaah($id);
	$id_paket = $isi->row()->id_paket;
	$paket = $this->admin_model->get_paket_edit($id_paket);
	$nama_paket = $paket->row()->nama_paket;
	$berangkat = $paket->row()->jadwal_awal;
	$pulang = $paket->row()->jadwal_akhir;
	
	//$iduser = $isi->row()->id_user;
	//$user = $this->admin_model->get_user_edit($iduser);
	//$kota = $user->row()->kota;
	
	$no = $isi->row()->id_jamaah;
	$nama = $isi->row()->nama;
	$harga = $isi->row()->harga;
	$bin = $isi->row()->bin;
	$kel = $isi->row()->kel;
	$tempat_lahir = $isi->row()->tempat_lahir;
	$tgl_lahir = $isi->row()->tgl_lahir;
	$no_ktp = $isi->row()->no_ktp;
	$alamatktp = $isi->row()->alamat_ktp;
	$no_rumah = $isi->row()->no_rumah;
	$rt = $isi->row()->rt;
	$rw = $isi->row()->rw;
	$desa = $isi->row()->desa;
	$kec = $isi->row()->kec;
	$kab = $isi->row()->kab;
	$prof = $isi->row()->prof;
	$pos_ktp = $isi->row()->pos_ktp;
	$no_paspor = $isi->row()->no_paspor;
	$tempat_paspor = $isi->row()->tempat_paspor;
	$alamat_rumah = $isi->row()->alamat_rumah;
	$pos = $isi->row()->pos;
	$tlp = $isi->row()->tlp;
	$hp = $isi->row()->hp;
	$pendidikan = $isi->row()->pendidikan;
	$pekerjaan = $isi->row()->pekerjaan;
	$mahram = $isi->row()->mahram;
	$hub = $isi->row()->hub;
	$muka = $isi->row()->muka;
	$rambut = $isi->row()->rambut;
	$alis = $isi->row()->alis;
	$hidung = $isi->row()->hidung;
	$tanda_lain = $isi->row()->tanda_lain;
	$gol_darah = $isi->row()->gol_darah;
	$tinggi = $isi->row()->tinggi;
	$berat = $isi->row()->berat;
	$baju = $isi->row()->baju;
	//-------------------------------------------------------
	$hariini = $this->tanggal->tanggal3(date('Y-m-d'));
$html = <<<EOF
<style>
    div.xx {
     text-align: center;
     width: 200px; 
     float: right;    
    }
</style>
<br /><br /><br />
<h1><div style="text-align:center">FORMULIR PENDAFTARAN CALON JAMAAH HAJI</div></h1>
<table border="0" cellpadding="1">
<tr><td colspan="3"><b><u>Data Pribadi</u></b></td>
<td>NO. $no</td>
</tr>

  <tr>
    <td width="3.5%">1.</td>
    <td width="20%">Nama Lengkap </td>
    <td width="3.5%">:</td>
    <td width="73%">$nama</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Bin / Binti </td>
    <td>:</td>
    <td>$bin
    
     &nbsp;	&nbsp;	&nbsp;	&nbsp;		&nbsp;		&nbsp;		&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;	&nbsp;	&nbsp;	&nbsp;		&nbsp;		&nbsp;		&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;	&nbsp;	&nbsp;	&nbsp;		&nbsp;		&nbsp;		&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;
   
    
    L/P : $kel
    </td> 
   
  </tr>
  <tr>
    <td>2.</td>
    <td>Tempat / Tgl. Lahir </td>
    <td>:</td>
    <td>$tempat_lahir / $tgl_lahir</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Nomor KTP </td>
    <td>:</td>
    <td>$no_ktp</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Alamat Sesuai KTP </td>
    <td>:</td>
    <td>$alamatktp</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No.$no_rumah &nbsp;	&nbsp;	&nbsp;	&nbsp;  Rt.$rt  &nbsp;	&nbsp;	&nbsp;	&nbsp; Rw.$rw </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Desa / Kelurahan </td>
    <td>:</td>
    <td>$desa</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kecamatan</td>
    <td>:</td>
    <td>$kec</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kabupaten / Kodya </td>
    <td>:</td>
    <td>$kab</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Propinsi</td>
    <td>:</td>
    <td>$prof</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td>$pos_ktp</td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Nomor Paspor </td>
    <td>:</td>
    <td>$no_paspor</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tempat dikeluarkan </td>
    <td>:</td>
    <td>$tempat_paspor</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Alamat Rumah </td>
    <td>:</td>
    <td>$alamat_rumah</td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Kode Pos </td>
    <td>:</td>
    <td>$pos</td>
  </tr>
   <tr>
    <td>8.</td>
    <td>Telepon </td>
    <td>:</td>
    <td>$tlp &nbsp;&nbsp;&nbsp;HP : $hp</td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Pendidikan Terakhir </td>
    <td>:</td>
    <td>$pendidikan</td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Pekerjaan </td>
    <td>:</td>
    <td>$pekerjaan</td>
  </tr>
  <tr>
    <td>11.</td>
    <td>Ciri - ciri </td>
    <td>:</td>
    <td><table width=450 border="0" style="margin: 0px;"><tr><td width="30%">Muka	&nbsp;		&nbsp;   :$muka</td>
					<td width="40%">Hidung &nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		&nbsp;	&nbsp;&nbsp; &nbsp; &nbsp;:$hidung </td>
					<td>Tinggi Badan :$tinggi</td></tr>
					<tr>
					<td>Rambut :$rambut</td>
					<td>Tanda lain &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  :$tanda_lain</td>
					<td>Barat Badan &nbsp;:$berat</td>
					</tr>
					<tr>
					<td>Alis &nbsp;	  &nbsp;	&nbsp;	 &nbsp;:$alis</td>
					<td>Golongan Darah &nbsp;:$gol_darah</td>
					<td>Ukuran Baju &nbsp;:$baju</td>
					</tr>
					
					</table></td>
  </tr>
   <tr><td colspan="4"><b><u>Data Kelengkapan Perjalanan Umrah / Haji</u></b></td>
</tr>
<tr>
    <td>12.</td>
    <td>Paket Pilihan </td>
    <td>:</td>
    <td>$nama_paket</td>
  </tr>
   <tr>
    <td>13.</td>
    <td>Harga Paket </td>
    <td>:</td>
    <td>$harga</td>
  </tr>
  <tr>
    <td>14.</td>
    <td>Waktu Perjalanan </td>
    <td>:</td>
    <td>$berangkat s/d $pulang	</td>
  </tr>
   <tr>
    <td>15.</td>
    <td>Nama Mahram </td>
    <td>:</td>
    <td>$mahram</td>
  </tr>
  <tr>
    <td>16.</td>
    <td>Hubungan Keluarga </td>
    <td>:</td>
    <td>$hub</td>
  </tr>
  <tr>
    <td>17.</td>
    <td>Keterangan Tambahan </td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td ></td>
    
    <td colspan="3">Dengan menandatangani formulir ini berarti telah mempelajari leaflet/brosur PT. BPW AL-Utsmaniyah Tours dan menyetujui paket beserta fasilitas dan ketentuannya </td>
   
  </tr>
  </table>
  <div class="xx">
   
</div>
  
EOF;
$bawah = <<<EOF
<table cellpadding="5px" style="text-align:center;" border="0px">
<tr>
	<td width="35%"></td>
	<td width="25%">
		<table cellpadding="0" border="1px" style="height: 4cm;">
			<tr>
				<td style="text-align: center;" width="3cm" height="4cm" >
				  <br/ ><br/ ><br/ ><br/ ><br/ > pas photo 3x4
				</td>
			</tr>
		</table>
	</td>
	<td width="10%"></td>
	<td width="30%">
	<table style="text-align:center;" border="0" cellpadding="1" width="145px">
	<tr>
		<td>BOGOR, $hariini</td>
	</tr>
	<tr><td>Calon Jamaah Haji / Umrah</td></tr>
	<tr><td><br /><br /><br /><br /><br /></td></tr>
	<tr><td>( $nama )</td></tr>
	<tr><td>Nama Jelas</td></tr>
  </table>
  </td>
</tr>
</table>

EOF;


// output the HTML content
// Print text using writeHTMLCell()
		//$this->pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
		/*$this->pdf->setPrintHeader(false);
		$this->pdf->setPrintFooter(false);
		$this->pdf->SetXY(110, 200);
		
		$this->pdf->Image('distrobpw/application/3rdparty/tcpdf/images/image_demo.jpg', '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
		*/
		 $this->pdf->setPrintHeader(false);
		$this->pdf->setPrintFooter(false);
		
        //----- set document information
        $this->pdf->SetSubject('Dp3 Penilaian pegawai pkt kebunraya bogor LIPI');
        $this->pdf->SetKeywords('Dp3, PDF, pkt, LIPI, pegawai');
        
        //---- set font
        $this->pdf->SetFont('helvetica', '0', 10);
        
        //---- add a page
        $this->pdf->AddPage();
		
        // ----print a line using Cell()
		$this->pdf->writeHTML($html, true, false, false, false);
		$this->pdf->writeHTML($bawah, true, false, false, false);
		//$this->pdf->writeHTML($binnn, true, false, false, false);
		//$this->pdf->writeHTML($xx, true, false, true, false, '');

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
echo $this->pdf->Output('example_001.pdf', 'I');
}

} 