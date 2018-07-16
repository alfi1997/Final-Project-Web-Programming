<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="../Pictures/stiki.jpg">
		<title>KERMA</title>
	</head>
<body>
	<?php
		include '../Controller/Login/Handler.php';
		include '../Controller/Database/database_handler.php';
		if(is_login()){
			
			echo "<marquee>Welcome ".$_SESSION['username']."</marquee>";
		}else{
			header("Location: Login/Login_page.php");
			// echo "belum login";
		}
	?>

	<center>
		<img src="../Pictures/stiki.jpg" width="100" height="100">
		<h1>LAPOR KERMA</h1>
		<br><br>
		<table>
			<tr>
				<td>Username </td>
				<td><?php echo(": ".$_SESSION['username']); ?></td>
			</tr>
			<tr>
				<td>User  </td>
				 <td><?php echo(": ".$_SESSION['user']); ?></td>
			</tr>
			<tr>
				<td>Jumlah Partner</td>
				<td> : <?php echo(select_jumlah("tb_partner","")); ?></td>
			</tr>
			<tr>
				<td>Jumlah Kerjasama Unit</td>
				<td> : <?php echo(select_jumlah("tb_tr_kerjasama",$_SESSION['id'])); ?></td>
			</tr>
			<tr>
				<td>Jumlah Kerjasama STIKI</td>
				<td> : <?php echo(select_jumlah("tb_tr_kerjasama","")); ?></td>
			</tr>
		</table>
		<br>
		<form action="partner/list_partner.php">
			<button type="submit" value="Submit">List Partner</button>
		</form>
		<br>
		<form action="Kerjasama/list_kerjasama_page.php">
			<button type="submit" value="Submit">List Kerjasama</button>
		</form>
		<br>
		<form action="../Controller/Login/logout_handler.php">
			<button type="submit" value="Submit">Logout</button>
		</form>
	</center>

</body>
</html>