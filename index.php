<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Générateur de devis</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="//bootswatch.com/flatly/bootstrap.min.css">
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /><![endif]-->

		<script src="https://use.fontawesome.com/9612dfeb67.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container contenu">
			<header class="page-header">
				<h1><i class="fa fa-briefcase icone" aria-hidden="true"></i>Générateur de devis</h1>
			</header>

			<form method="post" action="pdf.php">
				<div class="devis">
					<div class="nav nav-pills">
						<div role="presentation">
							<a href="#configuration" type="button" class="btn btn-success btn-xs">Configuration</a>
						</div>
						<div role="presentation">
							<a href="#conception" type="button" class="btn btn-default btn-xs" disabled="disabled">Conception</a>
						</div>
						<div role="presentation">
							<a href="#etapesSupplementaires" type="button" class="btn btn-default btn-xs" disabled="disabled">Étapes supplémentaires</a>
						</div>
					</div>

					<div class="tab-content">
						<div class="onglet" id="configuration">
							<div class="well">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label for="nom" class="control-label">Nom <span class="text-danger">*</span></label>
											<input type="text" class="form-control input-sm" name="nom_devis" maxlength="35" placeholder="Nom" required>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<label for="description" class="control-label">Description</label>
											<input type="text" class="form-control input-sm" name="description_devis" maxlength="100" placeholder="Description">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="well">
										<div class="row">
											<div class="col-xs-6">
												<legend><i class="fa fa-building icone" aria-hidden="true"></i>Société</legend>
											</div>
											<div class="col-xs-6">
												<div class="row">
													<div class="form-group">
														<label for="filtre" class="col-xs-3 control-label filtre"><i class="fa fa-address-book" aria-hidden="true"></i></label>
														<div class="col-xs-9">
															<select class="form-control input-sm" id="societe" onchange="adresse()">
																<option>- Choix -</option>
																<option>Gaillac</option>
																<option>Bruguières</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="nom" class="control-label">Nom <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="nom_societe" value="Demeurs" placeholder="Nom" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="prenom" class="control-label">Prénom <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="prenom_societe" value="Alexandre" placeholder="Prénom" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-7">
												<div class="form-group">
													<label for="email" class="control-label">Email <span class="text-danger">*</span></label>
													<input type="email" class="form-control input-sm" name="email_societe" value="alexandre.demeurs@gmail.com" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label for="telephone" class="control-label">Téléphone</label>
													<input type="tel" class="form-control input-sm" name="telephone_societe" maxlength="14" value="06 80 59 90 43" placeholder="Téléphone">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="adresse" class="control-label">Adresse <span class="text-danger">*</span></label>
											<input type="text" class="form-control input-sm" name="adresse_societe" id="adresse_societe" placeholder="Adresse" required>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="code_postal" class="control-label">Code Postal <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="code_postal_societe" id="code_postal_societe" maxlength="5" placeholder="Code Postal" required>
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="ville" class="control-label">Ville <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="ville_societe" id="ville_societe" placeholder="Ville" required>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="well">
										<legend><i class="fa fa-user icone" aria-hidden="true"></i>Client</legend>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="nom" class="control-label">Nom <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="nom_client" placeholder="Nom" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="prenom" class="control-label">Prénom <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="prenom_client" placeholder="Prénom" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-7">
												<div class="form-group">
													<label for="email" class="control-label">Email <span class="text-danger">*</span></label>
													<input type="email" class="form-control input-sm" name="email_client" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label for="telephone" class="control-label">Téléphone</label>
													<input type="tel" class="form-control input-sm" name="telephone_client" maxlength="14" placeholder="Téléphone">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="adresse" class="control-label">Adresse <span class="text-danger">*</span></label>
											<input type="text" class="form-control input-sm" name="adresse_client" placeholder="Adresse" required>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label for="code_postal" class="control-label">Code Postal <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="code_postal_client" maxlength="5" placeholder="Code Postal" required>
												</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="ville" class="control-label">Ville <span class="text-danger">*</span></label>
													<input type="text" class="form-control input-sm" name="ville_client" placeholder="Ville" required>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-warning btn-sm suivant pull-right" type="button">Suivant<i class="fa fa-chevron-circle-right bouton" aria-hidden="true"></i></button>
							</div>
						</div>

						<div class="onglet" id="conception">
							<div class="well">
								<table class="table table-condensed">
									<tr>
										<th class="description">Description</th>
										<th>Quantité</th>
										<th>Prix Unitaire</th>
									</tr>
									<?php $taches[] = array( "description" => "Conseil", "name" => "conseil", "prix" => 20, "quantite" => 1 );
									$taches[] = array( "description" => "Spécification", "name" => "specification", "prix" => 20, "quantite" => 1 );
									$taches[] = array( "description" => "Création graphique", "name" => "creation-graphique", "prix" => 50, "quantite" => 1 );
									$taches[] = array( "description" => "Intégration", "name" => "integration", "prix" => 100, "quantite" => 1 );
									$taches[] = array( "description" => "Installation et paramétrage", "name" => "installation-et-parametrage", "prix" => 50, "quantite" => 1 );
									$taches[] = array( "description" => "Développement spécifique", "name" => "developpement-specifique", "prix" => 100, "quantite" => 1 );
									$taches[] = array( "description" => "Intégration du contenu", "name" => "integration-du-contenu", "prix" => 20, "quantite" => 1 );
									$taches[] = array( "description" => "Tests", "name" => "tests", "prix" => 50, "quantite" => 1 );
									$taches[] = array( "description" => "Hébergement", "name" => "hebergement", "prix" => 50, "quantite" => 1 );
									$taches[] = array( "description" => "Recette", "name" => "recette", "prix" => 20, "quantite" => 1 );
									$taches[] = array( "description" => "Mise en ligne", "name" => "mise-en-ligne", "prix" => 30, "quantite" => 1 );
									$taches[] = array( "description" => "Débug / Correction / Ajustement", "name" => "debug-correction-ajustement", "prix" => 20, "quantite" => 1 );
									foreach ( $taches as $tache ): ?>
									<tr>
										<td><input type="hidden" name="description-<?php echo $tache['name']; ?>" value="<?php echo $tache['description']; ?>"><?php echo $tache['description']; ?></td>
										<td><input type="number" class="form-control input-sm" name="quantite-<?php echo $tache['name']; ?>" step="1" min="0" placeholder="Quantité" value="<?php echo $tache['quantite']; ?>" required></td>
										<td><input type="number" class="form-control input-sm" name="prix-<?php echo $tache['name']; ?>" step="5" min="0" placeholder="Prix" value="<?php echo $tache['prix']; ?>" required></td>
									</tr>
									<?php endforeach; ?>
								</table>
							</div>
							<div class="form-group">
								<button class="btn btn-warning btn-sm precedent" type="button"><i class="fa fa-chevron-circle-left icone" aria-hidden="true"></i>Précédent</button>
								<button class="btn btn-warning btn-sm suivant pull-right" type="button">Suivant<i class="fa fa-chevron-circle-right bouton" aria-hidden="true"></i></button>
							</div>
						</div>

						<div class="onglet" id="etapesSupplementaires">
							<div class="well">
								<table class="table table-condensed">
									<tr>
										<th class="description">Description</th>
										<th>Quantité</th>
										<th>Prix Unitaire</th>
									</tr>
									<?php $autres[] = array( "description" => "Maintenance", "name" => "maintenance", "prix" => 20, "quantite" => 2 );
									$autres[] = array( "description" => "Référencement", "name" => "referencement", "prix" => 50, "quantite" => 1 );
									$autres[] = array( "description" => "Ergonomie", "name" => "ergonomie", "prix" => 20, "quantite" => 1 );
									$autres[] = array( "description" => "Gestion multilingue", "name" => "gestion-multilingue", "prix" => 50, "quantite" => 1 );
									$autres[] = array( "description" => "Responsive design", "name" => "responsive-design", "prix" => 50, "quantite" => 1 );
									$autres[] = array( "description" => "Création du contenu (texte, image, relecture, documentation...)", "name" => "creation-du-contenu", "prix" => 20, "quantite" => 1 );
									$autres[] = array( "description" => "Sécurité", "name" => "securite", "prix" => 20, "quantite" => 1 );
									$autres[] = array( "description" => "Performance", "name" => "performance", "prix" => 20, "quantite" => 1 );
									foreach ( $autres as $autre ): ?>
									<tr>
										<td><input type="hidden" name="description-<?php echo $autre['name']; ?>" value="<?php echo $autre['description']; ?>"><?php echo $autre['description']; ?></td>
										<td><input type="number" class="form-control input-sm" name="quantite-<?php echo $autre['name']; ?>" step="1" min="0" placeholder="Quantité" value="<?php echo $autre['quantite']; ?>" required></td>
										<td><input type="number" class="form-control input-sm" name="prix-<?php echo $autre['name']; ?>" step="5" min="0" placeholder="Prix" value="<?php echo $autre['prix']; ?>" required></td>
									</tr>
									<?php endforeach; ?>
								</table>
							</div>
							<div class="form-group">
								<button class="btn btn-warning btn-sm precedent" type="button"><i class="fa fa-chevron-circle-left icone" aria-hidden="true"></i>Précédent</button>
								<button type="submit" id="valider" class="btn btn-warning btn-sm pull-right">Valider</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<footer>
			<div class="container">
				<p><small>Générateur de devis © <?php echo date("Y"); ?> - Tous droits réservés<br />
				<i class="fa fa-github" aria-hidden="true"></i> <a href="//github.com/Alexdms/generateur-devis" target="_blank">Projet GitHub</a> | Par <a href="//alexandre-demeurs.fr/" target="_blank">Alexandre Demeurs</a></small></p>
			</div>
		</footer>

		<!-- Fichiers JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				var navListe = $('div.nav-pills div a'),
					onglets = $('.onglet'),
					btnSuivants = $('.suivant');
					btnPrecedents = $('.precedent');

				onglets.hide();
				navListe.click(function (e) {
					e.preventDefault();
					var $cible = $($(this).attr('href')),
							$objet = $(this);

					if (!$objet.hasClass('disabled')) {
						navListe.removeClass('btn-success').addClass('btn-primary');
						$objet.addClass('btn-success');
						onglets.hide();
						$cible.show();
						$cible.find('input:eq(0)').focus();
					}
				});


				btnPrecedents.click(function(){
					var etapeActive = $(this).closest(".onglet"),
						btnActive = etapeActive.attr("id"),
						etapeSuivante = $('div.nav-pills div a[href="#' + btnActive + '"]').parent().prev().children("a"),
						correct = true;

					if (correct)
						etapeSuivante.removeAttr('disabled').trigger('click');
				});

				btnSuivants.click(function(){
					var etapeActive = $(this).closest(".onglet"),
						btnActive = etapeActive.attr("id"),
						etapeSuivante = $('div.nav-pills div a[href="#' + btnActive + '"]').parent().next().children("a"),
						champsActive = etapeActive.find("input[type='text'], input[type='email']"),
						correct = true;
						$(".form-group").removeClass("has-error");

					for(var i=0; i<champsActive.length; i++){
						if (!champsActive[i].validity.valid){
							correct = false;
							$(champsActive[i]).closest(".form-group").addClass("has-error");
						}
					}

					if (correct)
						etapeSuivante.removeAttr('disabled').trigger('click');
				});
				$('div.nav-pills div a.btn-success').trigger('click');
			});

			var adresse_societe = new Array();
			var code_postal_societe = new Array();
			var ville_societe = new Array();

			adresse_societe[0] = "";
			code_postal_societe[0] = "";
			ville_societe[0] = "";

			adresse_societe[1] = "63 rue Joseph Rigal";
			code_postal_societe[1] = "81600";
			ville_societe[1] = "GAILLAC";

			adresse_societe[2] = "10 impasse des Cournades";
			code_postal_societe[2] = "31150";
			ville_societe[2] = "BRUGUIÈRES";

			function adresse() {
				i = document.getElementById("societe");
				document.getElementById("adresse_societe").value = adresse_societe[i.selectedIndex];
				document.getElementById("code_postal_societe").value = code_postal_societe[i.selectedIndex];
				document.getElementById("ville_societe").value = ville_societe[i.selectedIndex];
			}
		</script>
	</body>
</html>