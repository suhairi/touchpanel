<div class="row">
	<div class="col-xs-8 col-xs-offset-2">

		<div class="panel panel-info">
			<div class="panel-heading"><h4>Profil</h4></div>
			<div class="panel-body">
				<div class="col-xs-4">
					<img src="http://<?= $_SERVER['HTTP_HOST']; ?>/images/profiles/<?= $_SESSION['id']; ?>.jpg" >
				</div>
				<div class="col-xs-8">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th colspan="2"><font style="font-weight: bold; font-color: #43D5D5">Maklumat Peribadi</font></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nama</td>
								<td><?= $profile['name']; ?></td>
							</tr>
							<tr>
								<td>No KP</td>
								<td><?= $profile['nokp']; ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><?= $profile['address']; ?></td>
							</tr>
							<tr>
								<td>Emel</td>
								<td><?= $profile['email']; ?></td>
							</tr>
							<tr>
								<td>No. Telefon</td>
								<td><?= $profile['mobilephone']; ?></td>
							</tr>

						</tbody>
					</table>
					<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				</div>
			</div>
		</div>						
		
	</div>
</div>