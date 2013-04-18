<h2>Edit User</h2>
<?php echo form_open('umum/update_user'); ?>
          <input type=hidden name="pass_lama" value="<?php echo $hasilnya->row()->password;?>">
          <input type=hidden name="username" value="<?php echo $hasilnya->row()->username;?>">
          <input type=hidden name="id" value="<?php echo $hasilnya->row()->id_user;?>">
          <table>
          <tr><td>Username</td>     <td> : <?php echo $hasilnya->row()->username;?></td></tr>
          <tr><td>Password Lama</td>     <td> : <input required="required" type="password" name='pass'>  </td></tr>
          <tr><td>Password Baru</td>     <td> : <input required="required" type="password" name='pass_baru'> </td></tr>
          <tr><td>Ulang Password Baru</td>     <td> : <input required="required" type="password" name='pass_baru2'> </td></tr>
          <tr><td>Nama Lengkap</td> <td> : <input type=text name='nama' size=30  value='<?php echo $hasilnya->row()->nama;?>'></td></tr>
          
          <tr><td>No.Telp/HP</td>   <td> : <input type=text name='no_telp' size=30 value='<?php echo $hasilnya->row()->no_telp;?>'></td></tr><tr>     
         </tr>
          <tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table>
<?php echo form_close(); ?>