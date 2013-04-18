
<script type='text/javascript'>
$(function(){
    $('.date').calendar();
});
</script>
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
<script type="text/javascript" src="<?php echo base_url();?>aset/tinymcpuk/tiny_mce_src.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>aset/tinymcpuk/mcpuk.js" ></script>

<h2>Tambah paket</h2>
          <?php echo form_open('bpw/save_paket'); ?>
          <table>
          <tr><td width=100>Nama Paket</td>     <td> : <input type=text required="required" name='nama_paket' size=60></td></tr>
          <tr><td width=70>Tanggal Berangkat</td>     <td> : <input type=text required="required" class='date' name='tgl_brngkt' size=40></td></tr>
		  <tr><td width=70>Tanggal Pulang</td>     <td> : <input type=text required="required" class='date' name='tgl_plg' size=40></td></tr>
		  
		  <tr><td width=70>Harga (QRD)</td>     <td> : <input type=text onkeypress="return angka(event)" placeholder="cth. 20000000" required="required" name='harga_qrd' size=25></td></tr>
		  <tr><td width=70>Harga (TPL)</td>     <td> : <input type=text onkeypress="return angka(event)" required="required" name='harga_tpl' size=25></td></tr>
		  <tr><td width=70>Harga (DBL)</td>     <td> : <input type=text onkeypress="return angka(event)" required="required" name='harga_dbl' size=25></td></tr>
		  <tr><td width=70>Jumlah Maximal</td>     <td> : <input type="number" required="required" name='jumlah' size=25></td></tr>
          <tr><td width=70>keterangan</td>     <td> </td></tr>
          
          </table>
          <textarea name="ket" style="width: 600px; height: 200px; resize:none;">isi keterangan</textarea>
          
          <table border="0">
          <tr><td width="100px"><input type=submit value=Simpan></td><td width="300px">
          <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table>
          <?php echo form_close(); ?>