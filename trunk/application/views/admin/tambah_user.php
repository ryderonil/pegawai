<h2>Tambah User</h2>
          <?php echo form_open('admin/save_user'); ?>
          <table>
          <tr><td>Nama</td> <td> : <input required="required" type=text name='nama' size=30></td></tr> 
          <tr><td>Username (email)</td>     <td> : <input type=text name='username' size=30></td></tr>
          <tr><td>Password</td>     <td> : <input type=text name='password' size=30></td></tr>
         <!--   <tr><td>Nama Distro / KL</td> <td> : <input required="required" type=text name='nama_kl' size=30></td></tr>-->  
          <tr><td>No.Telp/HP</td>   <td> : <input required="required" type=text name='no_tlp' size=20></td></tr>
          <tr><td>Kota</td>   <td> : <input required="required" type=text name='kota' size=30></td></tr>
		  <tr><td>Level</td>     <td> : <input type=radio name='level' value='manager' >management 
                                         <input type=radio name='level' value='bpw' >bpw 
										 <input type=radio name='level' value='kl' checked>user (KL) 
										 </td></tr>
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table>
		  <?php echo form_close();?>