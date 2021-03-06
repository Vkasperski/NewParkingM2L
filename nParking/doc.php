<?php  $titre = "Documentation"; include('includes/pages/header.php'); ?>
<div class="row">
	<div class="col col-md-12 black">
		<h2>Documentation</h2>

		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel panel-heading">Réservation d'une place</div>
				<div class="panel-body">
					<p>
						Pour réserver une place
						<ul> 
							<li> il ne faut pas avoir de place en cours d'utilisation</li>
							<li> il ne faut pas avoir de rang dans la file d'atente</li>
						</ul>
					</p>
					<p>Si il y a des places de libres, la première vous sera atribuée</p>
					<p>Si il n'y a pas de place disponible vous êtes mis dans la file d'attente</p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel panel-heading">Profil</div>
				<div class="panel-body">
					Vous pouvez
					<ul>
						<li>Changer vos informations</li>
						<li>Changer votre mot de passe</li>
					</ul>
				</div>
			</div>
		</div>
</div>
</div>
<?php include('includes/pages/footer.php'); ?>