<?php 
ini_set("memory_limit","130M");

	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Laporan_paket.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>
<style type="text/css">	
	table{
		border-width : 1px;
		border-collapse : collapse;
		text-align: center;
		border-style : solid;
		font-size: 10px;
	}
	
	th{
		border-width : 1px;
		border-collapse : solid;
		text-align: center;
		border-style : solid;
		}
	
	td{
		border-width : 1px;
		border-collapse : collapse;
		text-align: center;
		border-style : solid;
		vertical-align : middle;
	}
	
	body {
	  	font-family: sans-serif;
		margin: 0.5cm 0;
		text-align: center;
		font-size: 8px;
	}
	
	}
</style> 
<h1>Daftar Paket</h1>
 <table width=650 border=1>
	<tr><th rowspan=2>No</th><th rowspan=2>Nama</th><th colspan=2>Tanggal</th></tr>
		  <tr><th>Keberangkatan</th><th>Kepulangan</th>
	<?php 
	$a = 1; 
		foreach ($paket->result() as $row):
		
		
	?>
	
	<tr align="left">
		
		<td><?php echo  $a; $a++;?></td>
		<td align=center><?php echo $row->nama_paket;?></td>
		
		<td align=center><?php echo $row->jadwal_awal;?></td>
		<td align=center><?php echo $row->jadwal_akhir;?></td>
		
		
	</tr>
		<?php endforeach;?>
</table>
