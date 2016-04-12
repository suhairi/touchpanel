<?php 
	include_once 'header.php'; 


	if(!$_SESSION['id']) {
		header('location: logout.php');	
		exit;
	}

	
	$sql = "select * from profile where id = " . $_SESSION['id'];
	$query = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($query);

?>
	<br />

	<div class="row">
		<div class="col-xs-4">

			<div class="panel panel-primary">
				<div class="panel-heading"><h4>Profile</h4></div>
				<div class="panel-body">
					<table class="table table-condensed table-striped">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?= $row['name']; ?></td>
					</tr>
					</table>
				</div>
			</div>
						
		</div>
	</div>

	



<?php include_once 'footer.php'; ?>