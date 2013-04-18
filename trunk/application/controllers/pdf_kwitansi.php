<?php
class pdf_kwitansi extends  CI_Controller {

    function pdf_kwitansi()
    {
       parent::__construct();
       $this->load->model('umum_model');
       $this->load->model('admin_model');
       $this->pdf = new TCPDF('L', 'mm', 'A5');
    }
    function tcpdf(){

    	$bayar = $this->input->post('bayar_baru');
		$cicil = $this->input->post('cicil');
		$id=$this->input->post('id');
		
		$baru = $bayar + $cicil;
		$data = array(
			'id_jamaah' => $id,
			'pembayaran' => $baru,
			'cara_bayar' => $this->input->post('keterangan'),
			
		);
		$this->umum_model->update_jamaah($data);
		
    $isi = $this->umum_model->get_detail_jamaah($id);
    
    $biaya =  $isi->row()->harga;
	$cicil = $isi->row()->pembayaran;
	$kekurangan = $biaya - $cicil;
	if ($kekurangan==0){
	$kurang = 'LUNAS';
	}
	else {
	$kurang = $kekurangan;
	}
	
	/*$iduser = $isi->row()->id_user;
	$user = $this->admin_model->get_user_edit($iduser);
	$kota = $user->row()->kota; */
	
    
    $paket = $isi->row()->id_paket;
	$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
	$namap=$a->row()->nama_paket;
	$nama=$isi->row()->nama;
	$hariini = $this->tanggal->tanggal3(date('Y-m-d'));
	
    	
	$bawah = <<<EOF
	<table border="0">
	<tr>
	<td width="60%"></td>
	<td width="40%">
		<table style="text-align:center" border="1" cellpadding="5">
		<tr>
			<td>KWITANSI SAH BILA ADA<br /> TANDATANGAN DAN CAP PERUSAHAAN</td>
		</tr>

		</table>
	</td>
	</tr>
	</table>
	<h1><div style="text-align:left">KWITANSI $namap</div></h1>
	<table cellpadding="10" border="0">
	<tr>
	<td width="30%">NO : $id</td>
	<td width="5%"></td>
	<td width="65%"></td>
	</tr>
	<tr>
	<td width="30%">Sudah Terima Dari</td>
	<td width="5%">:</td>
	<td width="65%">$nama</td>
	</tr>
	<tr>
	<td width="30%">Total Cicilan</td>
	<td width="5%">:</td>
	<td width="65%">Rp $cicil</td>
	</tr>
	<tr>
	<td width="30%">Dari Total Pembayaran</td>
	<td width="5%">:</td>
	<td width="65%">Rp $biaya</td>
	</tr>
	<tr>
	<td width="30%">Kekurangan Pembayaran</td>
	<td width="5%">:</td>
	<td width="65%">Rp $kurang</td>
	</tr>
	</table>
	
	<table border="0">
	<tr>
	<td width="60%"></td>
	<td width="40%">
		<table style="text-align:center" border="0" cellpadding="5">
		<tr>
			<td>BOGOR, $hariini</td>
		</tr>
		</table>
	</td>
	</tr>
	</table>
	<table cellpadding="10" border="0">
	<tr>
	<td width="60%"><h3 style="font-size: 17; font-family: monospace;">Rp $bayar,00</h3> </td>
	<td width="40%">
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
		*/
		//$this->pdf->Image('../3rdparty/tcpdf/images/image_demo.jpg', '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
		
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
		//$this->pdf->writeHTML($html, true, false, false, false);
		$this->pdf->writeHTML($bawah, true, false, false, false);
		//$this->pdf->writeHTML($binnn, true, false, false, false);
		//$this->pdf->writeHTML($xx, true, false, true, false, '');

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
echo $this->pdf->Output('example_001.pdf', 'I');
    }
}