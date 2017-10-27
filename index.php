<html>
<head>
	<title>Bank International</title>
</head>
<body>
	<h2>BANK</h2>
	
	<p><a href="index.php">Beranda</a></p>
	
	<h3>Data Nasabah</h3>
		<?php
		include('connect.php');
		$query = oci_parse($conn,"SELECT * FROM NASABAH ORDER BY id DESC") or die(oci_error());
if($conn){
	$q="SELECT * FROM NASABAH";
	$st=oci_parse($conn,$q);
	if(oci_execute($st)){
		echo "<table border=1><tr><td>No. Rekening</td><td>Nama Nasabah</td><td>Alamat Asal</td><td>Tanggal Lahir</td><td>No. KTP</td><td>PIN</td><td>Tambah</td><td>Edit</td><td>Delete</td></tr>";

		while($r=oci_fetch_array($st,OCI_ASSOC)){
			echo "<tr><td>".$r['NO_REKENING']."</td><td>".$r['NAMANASABAH']."</td><td>".$r['ALAMATASAL']."</td><td>".$r['TANGGALLAHIR']."</td><td>".$r['NOKTP']."</td><td>".$r['PIN']."</td><td><a href=tambah.php>Tambah</a></td><td><a href=edit.php?id=".$r['NO_REKENING'].">Edit</a></td><td><a href=hapus.php?id=".$r['NO_REKENING'].">Delete</a></td></tr>";
			}
	}
}
		?>
	</table>
</body>
</html>