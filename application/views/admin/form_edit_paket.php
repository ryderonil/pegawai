
<script type='text/javascript'>
$(function(){
    $('.date').calendar();
});

function angka(evt)
{
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;

   return true;
}
</script>
<script type="text/javascript" src="<?php echo base_url();?>aset/tinymcpuk/tiny_mce_src.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>aset/tinymcpuk/mcpuk.js" ></script>

<h2>Edit paket</h2>
          <?php echo form_open('admin/update_paket'); ?>
          <input type="hidden" name="id" value="<?php echo $hasilnya->row()->id_paket;?>" />
          <table>
          <tr><td width=100>Nama Paket</td>     <td> : <input type=text required="required" name='nama_paket' size=60 value="<?php echo $hasilnya->row()->nama_paket;?>"></td></tr>
          <tr><td width=70>Tanggal Berangkat</td>     <td> : <input type=text required="required" class='date' name='tgl_brngkt' size=40 value="<?php echo $hasilnya->row()->jadwal_awal;?>"></td></tr>
		  <tr><td width=70>Tanggal Pulang</td>     <td> : <input type=text required="required" class='date' name='tgl_plg' size=40 value="<?php echo $hasilnya->row()->jadwal_akhir;?>"></td></tr>
		  <tr><td width=70>Harga (QRD)</td>     <td> : <input type=text onkeypress="return angka(event)" required="required" name='harga_qrd' size=25 value="<?php echo $hasilnya->row()->harga_qrd;?>"></td></tr>
		  <tr><td width=70>Harga (TPL)</td>     <td> : <input type=text onkeypress="return angka(event)" required="required" name='harga_tpl' size=25 value="<?php echo $hasilnya->row()->harga_tpl;?>"></td></tr>
		  <tr><td width=70>Harga (DBL)</td>     <td> : <input type=text onkeypress="return angka(event)" required="required" name='harga_dbl' size=25 value="<?php echo $hasilnya->row()->harga_dbl;?>"></td></tr>
		  <tr><td width=70>Jumlah Maximal</td>     <td> : <input type="number" required="required" name='jumlah' size=25 value="<?php echo $hasilnya->row()->jumlah_max;?>"></td></tr>
		  <tr><td width=70>keterangan</td>     
		  <td> </td></tr>
          </table>
          <table border="0">
		  <textarea name="ket" required="required" style="width: 600px; height: 200px; resize:none; "><?php echo $hasilnya->row()->ket;?></textarea>
          <tr><td></td><td><input type=submit value=Update>
          <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table>
          <?php echo form_close(); ?>