<!DOCTYPE html>
<html>
<head>
<title>login</title>
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/style.css" />
<link rel="sortcut icon" href="<?php echo base_url(); ?>/aset/images/icon.jpg" />
</head>
<body OnLoad="document.login.username.focus();">
<div id="header">
  	<div id="content1">
	<h2>Login</h2>
    <img src="<?php echo base_url()?>aset/images/login-welcome.gif" width="97" height="105" hspace="10" align="left">

		<form action="<?php echo site_url();?>/login/masuk" method="post">
			<table >
				<tr><td>Username</td><td> : <input type="text" name="username" required="required"></td></tr>
				<tr><td>Password</td><td> : <input type="password" name="password" required="required"></td></tr>
				<tr><td colspan="2"><input type="submit" value="Login"></td></tr>
			</table>
		</form>


<p>&nbsp;</p>
  	</div>
	<div id="footer" align=center>
			Copyright &copy; 2012 by BPW Al-Utsmaniyah Tours. All rights reserved.
		</div>
</div>
</body>
</html>
