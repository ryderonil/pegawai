<SCRIPT language=Javascript>
      <!--
      function angka(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<h2>Pembayaran  
<u><?php 
$paket = $hasilnya->row()->id_paket;
		$a = $this->db->query("SELECT * FROM paket WHERE `id_paket`='$paket'");
		$nama=$a->row()->nama_paket;
echo $nama;?></u> ( <?php echo $hasilnya->row()->nama;?> )
</h2>
<?php echo form_open('pdf_kwitansi/tcpdf'); ?>
	<input type="hidden" name="id" value="<?php  echo $hasilnya->row()->id_jamaah?>">
	<?php $biaya =  $hasilnya->row()->harga;
	$cicil = $hasilnya->row()->pembayaran;
	$kekurangan = $biaya - $cicil;
  	?>
	<table width=300 border="0">
  	<tr>
	    <td></td>
	    <td>Pembayaran </td>
	    <td>:</td>
	    <?php if ($kekurangan==0) 
	    echo '<td>LUNAS</td>';
	    else 
	    echo '<td><input required="required" onkeypress="return angka(event)" type="text" name="bayar_baru" ></td>';
	    ?>
  	</tr>
  	<tr>
	    <td></td>
	    <td>Cicilan </td>
	    <td>:</td>
	    <td><input type="text" name="cicil" readonly="readonly" value="<?php echo $hasilnya->row()->pembayaran;?>"></td>
  	</tr>
  	<tr>
	    <td></td>
	    <td>Melalui </td>
	    <td>:</td>
	    <?php $aa = $hasilnya->row()->cara_bayar;
   ?>
	    <td><select required="required" name='keterangan'>
   		<option value="" >pilih</option>
   		<option <?php if($aa == 'Tunai') echo 'selected="selected"'; ?> value="Tunai">Tunai</option>
   		<option <?php if($aa == 'Transfer BSM') echo 'selected="selected"'; ?>value="Transfer BSM">Transfer BSM</option>
   		<option <?php if($aa == 'Transfer Mandiri') echo 'selected="selected"'; ?> value="Transfer Mandiri">Transfer Mandiri</option>
   		</select></td>
  	</tr>
  	<tr>
	    <td>&emsp;</td>
	    <td></td>
	    <td></td>
	    <td></td>
  	</tr>
  	
  	<tr>
	    <td></td>
	    <td><h3>Kekurangan</h3> </td>
	    <td><h3>:</h3></td>
	    <td><h3><?php echo $kekurangan;?></h3></td>
  	</tr>
  	<tr>
	    <td></td>
	    <td><h3>Total Biaya</h3> </td>
	    <td><h3>:</h3></td>
	    <td><h3><?php echo $biaya;?></h3></td>
  	</tr>
  	
  	
  	
  	<tr><td></td><td align=right><input type=button value=Batal onclick=self.history.back()></td><td></td><td><input type=submit value="Simpan / Kwitansi">
  	<!--   <input type=button value='Cetak Kwitansi' onclick="window.location.href='<?php echo base_url(); ?>pdf_kwitansi/tcpdf/<?php echo $hasilnya->row()->id_jamaah;?>';"> -->
  	</td></tr>
  	</table>
  	<?php echo form_close(); ?>