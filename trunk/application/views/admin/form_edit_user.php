<h2>Edit User</h2>
<?php echo form_open('admin/update_user'); ?>
          <input type=hidden name="pass_lama" value="<?php echo $hasilnya->row()->password;?>">
          <input type=hidden name="username" value="<?php echo $hasilnya->row()->username;?>">
          <input type=hidden name="id" value="<?php echo $hasilnya->row()->id_user;?>">
          <table>
          <tr><td>Username</td>     <td> : <?php echo $hasilnya->row()->username;?></td></tr>
          <tr><td>Password</td>     <td> : <input type=text name='pass_baru'> *) </td></tr>
          <tr><td>Nama Lengkap</td> <td> : <input type=text name='nama' size=30  value='<?php echo $hasilnya->row()->nama;?>'></td></tr>
         
          <tr><td>No.Telp/HP</td>   <td> : <input type=text name='no_telp' size=30 value='<?php echo $hasilnya->row()->no_telp;?>'></td></tr>
          <tr><td>Kota</td>       <td> : <input type=text name='kota' size=30 value='<?php echo $hasilnya->row()->kota;?>'></td></tr>  
          <tr><td>Blokir</td>   
          <?php $pen =  $hasilnya->row()->blokir;?>
          <td> : <input type=radio name='blokir' <?php echo ($pen=='Y')?'checked':'' ?> value='Y'> Y   
                 <input type=radio name='blokir' <?php echo ($pen=='N')?'checked':'' ?> value='N' > N </td></tr><tr><td colspan=2>*) Apabila password tidak diubah, dikosongkan saja.<br />
                            </td></tr>
          <tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table>
<?php echo form_close(); ?>