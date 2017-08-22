<?php require_once "lib/html2pdf.php";

	$taches[] = array( "description" => $_POST['description-conseil'], "prix" => $_POST['prix-conseil'], "quantite" => $_POST['quantite-conseil'] );
	$taches[] = array( "description" => $_POST['description-specification'], "prix" => $_POST['prix-specification'], "quantite" => $_POST['quantite-specification'] );
	$taches[] = array( "description" => $_POST['description-creation-graphique'], "prix" => $_POST['prix-creation-graphique'], "quantite" => $_POST['quantite-creation-graphique'] );
	$taches[] = array( "description" => $_POST['description-integration'], "prix" => $_POST['prix-integration'], "quantite" => $_POST['quantite-integration'] );
	$taches[] = array( "description" => $_POST['description-installation-et-parametrage'], "prix" => $_POST['prix-installation-et-parametrage'], "quantite" => $_POST['quantite-installation-et-parametrage'] );
	$taches[] = array( "description" => $_POST['description-developpement-specifique'], "prix" => $_POST['prix-developpement-specifique'], "quantite" => $_POST['quantite-developpement-specifique'] );
	$taches[] = array( "description" => $_POST['description-integration-du-contenu'], "prix" => $_POST['prix-integration-du-contenu'], "quantite" => $_POST['quantite-integration-du-contenu'] );
	$taches[] = array( "description" => $_POST['description-tests'], "prix" => $_POST['prix-tests'], "quantite" => $_POST['quantite-tests'] );
	$taches[] = array( "description" => $_POST['description-hebergement'], "prix" => $_POST['prix-hebergement'], "quantite" => $_POST['quantite-hebergement'] );
	$taches[] = array( "description" => $_POST['description-recette'], "prix" => $_POST['prix-recette'], "quantite" => $_POST['quantite-recette'] );
	$taches[] = array( "description" => $_POST['description-mise-en-ligne'], "prix" => $_POST['prix-mise-en-ligne'], "quantite" => $_POST['quantite-mise-en-ligne'] );
	$taches[] = array( "description" => $_POST['description-debug-correction-ajustement'], "prix" => $_POST['prix-debug-correction-ajustement'], "quantite" => $_POST['quantite-debug-correction-ajustement'] );

	$autres[] = array( "description" => $_POST['description-maintenance'], "prix" => $_POST['prix-maintenance'], "quantite" => $_POST['quantite-maintenance'] );
	$autres[] = array( "description" => $_POST['description-referencement'], "prix" => $_POST['prix-referencement'], "quantite" => $_POST['quantite-referencement'] );
	$autres[] = array( "description" => $_POST['description-ergonomie'], "prix" => $_POST['prix-ergonomie'], "quantite" => $_POST['quantite-ergonomie'] );
	$autres[] = array( "description" => $_POST['description-gestion-multilingue'], "prix" => $_POST['prix-gestion-multilingue'], "quantite" => $_POST['quantite-gestion-multilingue'] );
	$autres[] = array( "description" => $_POST['description-responsive-design'], "prix" => $_POST['prix-responsive-design'], "quantite" => $_POST['quantite-responsive-design'] );
	$autres[] = array( "description" => $_POST['description-creation-du-contenu'], "prix" => $_POST['prix-creation-du-contenu'], "quantite" => $_POST['quantite-creation-du-contenu'] );
	$autres[] = array( "description" => $_POST['description-securite'], "prix" => $_POST['prix-securite'], "quantite" => $_POST['quantite-securite'] );
	$autres[] = array( "description" => $_POST['description-performance'], "prix" => $_POST['prix-performance'], "quantite" => $_POST['quantite-performance'] );

ob_start(); ?>

<style type="text/css">
	table { width: 100%; border-collapse: collapse; line-height: 1.3; }
	p { line-height: 1.3; }

	.header { padding: 10mm; }
	.footer { padding: 5mm; text-align: right; }

	.border { padding-top: 8mm; font-size: 13px; }
	.border th { border: 1px solid #eee; background: #ccc; padding: 6px 0; text-align: center; }
	.border td { border: 1px solid #efefef; background: #efefef; padding: 6px; }

	.etapes { font-weight: bold; }
	.valeur { text-align: right; }
	.total { text-align: right; background: #f8f8f8; font-weight: bold; }
</style>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<page backtop="42mm" backleft="10mm" backright="10mm" backbottom="0" footer="page">
	<page_header>
		<table class="header">
			<tr>
				<td style="width: 50%;">
					<strong><?php echo $_POST['prenom_societe'] . " " . $_POST['nom_societe']; ?></strong><br />
					<?php echo $_POST['adresse_societe']; ?><br />
					<?php echo $_POST['code_postal_societe']; ?>
					<?php echo $_POST['ville_societe']; ?><br />
					<?php echo $_POST['telephone_societe']; ?><br />
					<?php echo $_POST['email_societe']; ?>
				</td>
				<td style="width: 50%; text-align: right;">
					<strong><?php echo $_POST['prenom_client'] . " " . $_POST['nom_client']; ?></strong><br />
					<?php echo $_POST['adresse_client']; ?><br />
					<?php echo $_POST['code_postal_client']; ?>
					<?php echo $_POST['ville_client']; ?><br />
					<?php echo $_POST['telephone_client']; ?><br />
					<?php echo $_POST['email_client']; ?>
				</td>
			</tr>
		</table>
	</page_header>

	<table>
		<tr>
			<td style="width: 70%;">
				<h2><?php echo $_POST['nom_devis']; ?></h2>
			</td>
			<td style="width: 30%; text-align: right;">
				<?php echo $_POST['ville_societe']; ?>,<br />
				le <?php setlocale (LC_TIME, 'fr_FR.utf8','fra'); echo (strftime("%A %e %B %Y")); ?>
			</td>
		</tr>
		<tr>
			<td colspan="2"><?php echo $_POST['description_devis']; ?></td>
		</tr>
	</table>

	<table class="border">
		<thead>
			<tr>
				<th style="width: 60%;">Description</th>
				<th style="width: 10%;">Quantité</th>
				<th style="width: 15%;">Prix Unitaire</th>
				<th style="width: 15%;">Montant</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="4" class="etapes">Conception</td>
			</tr>
			<?php foreach ($taches as $tache): ?>
			<tr>
				<td><?php echo $tache['description']; ?></td>
				<td class="valeur"><?php echo $tache['quantite']; ?></td>
				<td class="valeur"><?php echo $tache['prix']; ?> &euro;</td>
				<td class="valeur"><?php $montant = $tache['quantite']*$tache['prix']; echo $montant; ?> &euro;</td>
			</tr>
			<?php $total += $montant;
			endforeach ?>

			<tr>
				<td colspan="4" class="etapes">Étapes supplémentaires</td>
			</tr>
			<?php foreach ($autres as $autre): ?>
			<tr>
				<td><?php echo $autre['description']; ?></td>
				<td class="valeur"><?php echo $autre['quantite']; ?></td>
				<td class="valeur"><?php echo $autre['prix']; ?> &euro;</td>
				<td class="valeur"><?php $montant = $autre['quantite']*$autre['prix']; echo $montant; ?> &euro;</td>
			</tr>
			<?php $total += $montant;
			endforeach ?>

			<tr>
				<td colspan="2" style="background: none; border: none;"></td>
				<td class="total">Total</td>
				<td class="total"><?php echo $total; ?> &euro;</td>
			</tr>
		</tbody>
	</table>

	<p class="footer">Signature suivie de la mension <em>"Bon pour accord"</em>.</p>
</page>

<?php function nettoyage($texte, $separateur = '_', $charset = 'utf-8') {
	$texte = mb_convert_encoding($texte,'HTML-ENTITIES',$charset);
	$texte = preg_replace(   array('/ß/','/&(..)lig;/', '/&([aouAOU])uml;/','/&(.)[^;]*;/'), array('ss',"$1","$1".'e',"$1"), $texte);
	$texte_propre = eregi_replace("[^a-z0-9_-]",' ',trim($texte));
	$array = explode(' ', $texte_propre);
	$str = '';
	$i = 0;
	foreach($array as $cle=>$valeur){
		if(trim($valeur) != '' AND trim($valeur) != $separateur AND $i > 0)
			$str .= $separateur.$valeur;
		elseif(trim($valeur) != '' AND trim($valeur) != $separateur AND $i == 0)
			$str .= $valeur;
		$i++;
	}
	return $str;
}

$contenu = ob_get_clean();
try {
	$pdf = new HTML2PDF('p','A4','fr');
	$pdf->pdf->SetAuthor('Alexandre Demeurs');
	$pdf->pdf->SetTitle('Devis' . ' - ' . $_POST['nom_client'] . ' ' . $_POST['prenom_client'] . ' - ' . $_POST['nom_devis'] . ' - ' . date('j/m/Y'));
	$pdf->pdf->SetSubject($_POST['nom_devis']);
	$pdf->pdf->SetKeywords('Devis, Web');
	$pdf->writeHTML($contenu);
	$pdf->Output(nettoyage($_POST['nom_client']) . nettoyage($_POST['prenom_client']) . ' ' . nettoyage($_POST['nom_devis']) . ' ' . date('j m Y') . '.pdf');
} catch (HTML2PDF_exception $e) {
	die($e);
} ?>