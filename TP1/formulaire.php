<!DOCTYPE html>
<html >
<head>

	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id = "cadre">

		<h1 id = "titre">Formulaire d'inscription</h1>
		<form method="POST" action="traitement.php">
			
				<fieldset>
					<legend><b>Identification</b></legend>
					<div class="left">
						<table>
							<tr>
								<td><label id="name">Nom </label><br></td>
								<td><input type="text" name="nom" required="Y"></td>
							</tr>
							<tr>
								<td><label id="pname">Prenom</label> </td>
								<td><br><input type="text" name="prenom" required="Y"><br></td>
							</tr>
							<tr>
								<td>
									<label>Civilite</label>	 
								</td>
								<td>
									<select>
										<option>Mr</option>
										<option>Mme</option>
										<option>Mlle</option>
								    </select>
							    </td>
							</tr>
							<tr>
								<td><label>Date de naissance</label></td>
								<td><input type="date" name="date" required="Y"></td>
							</tr>
							<tr>
								<td><label>Lieu de naissance</label></td>
								<td><input type="lieu" name="lieu" required="Y"></td>
							</tr>
						</table>
					</div>
					<div class="right">
						<table>
							<tr>
								<td><label>CNI</label> </td>
								<td><input type="number" name="cni" required="Y"></td>
							</tr>
							<tr>
								<td><label>INE</label></td>
								<td><input type="text" name="ine" required="Y"></td>
							</tr>
							<tr>
								<td><label> Numero carte d'Etudiant</label></td>
								<td><input type="text" name="nce"><br></td>
							</tr>
							<tr>
								<td><label>Pays de nationalité</label></td>
								<td><input type="text" name="pays"></td>
							</tr>
							<tr>
								<td><label>Nationalité</label></td>
								<td><input type="text" name="nat"></td>
							</tr>
						</table>
					</div>		
				</fieldset>
				<fieldset>
					<legend><b>Adresse Actuelle</b></legend>
					<div class="left">
						<table>
							<tr>
								<td><label>Adresse Principale</label></td>
								<td><input type="text" name="adr"></td>
							</tr>
							<tr>
								<td><label>Adresse Secondaire</label></td>
								<td><input type="text" name="adr1"></td>
							</tr>
							<tr>
								<td><label>Email</label></td>
								<td><input type="Email" name="email"></td>
							</tr>
							<tr>
								<td><label>Telephone Portable</label></td>
								<td><input type="tel" name="telP"></td>
							</tr>
						</table>
					</div>
					<div class="right">
						<table>
							<tr>
								<td><label>Telephone Fixe</label></td>
								<td><input type="tel" name="telF"></td>
							</tr>
							<tr>
								<td><label>Email Personnel</label></td>
								<td><input type="Email" name="emlP"></td>
							</tr>
							<tr>
								<td><label>Email Institutionnel</label></td>
								<td><input type="Email" name="emlI"></td>
							</tr>
							<tr>
								<td><label>Boîte Postale</label></td>
								<td><input type="number" name="bp"></td>
							</tr>
						</table>
					</div>
				</fieldset>
				<fieldset>
					<legend><b>Emploi</b></legend>
					<div class="left">
						<table>
							<tr>
								<td><label>Activite Salarie</label></td>
							</tr>
							<tr>
								<td><input type="radio" name="actS" value="OUI">OUI</td>
							</tr>
							<tr>
								<td><input type="radio" name="actS1" value="NON">NON</td>
							</tr>
						</table>
					</div>
					<div class="right">
						<table>
							<tr>
								<td><label>Statut Etudiant</label></td>
								<td>
									<select>
										<option>Régime normal</option>
										<option>Régime salarié</option>
										<option>Régime particulier</option>
										<option>Mise en position de stage</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Categorie Socio-Professionnel</label></td>
								<td><input type="text" name="categ"></td>
							</tr>
						</table>
					</div>	
				</fieldset>

				<fieldset>
					<legend><b>Situation familiale</b></legend>
					<div class="left">
						<table>
							<tr>
								<td><label>Situation matrimoniale</label></td>
								<td>
									<select>
										<option>Marie</option>
										<option>Célibataire</option>
										<option>Veuf</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					<div class="right">
						<table>
							<tr>
								<td>Nombre d'enfants</td>
								<td><input type="nombre" required = "Y"></td>
							</tr>
						</table>
					</div>
				</fieldset>

				<fieldset>
					<legend><b>Bourses</b></legend>
					<div class="left">
						<table>
							<tr>
								<td><label>Bourse</label></td>
								<tr>
									<td><input type="radio" required = "Y">Non boursier</td>
								</tr>
								<tr>
									<td><input type="radio" required = "Y">Boursier</td>
								</tr>
								<tr>
									<td><input type="radio" required = "Y">Etranger</td>
								</tr>
								<tr>
									<td><input type="radio" required = "Y">Etranger exonoré</td>
								</tr>
								<tr>
									<td><input type="radio" required = "Y">Etranger tarif normal</td>
								</tr>
							</tr>
						</table>
					</div>
					<div class="right">
						<table>
							<tr>
								<td><label>Nature bourse</label></td>
								<tr>
									<td><input type="radio">Nationale</td>
								</tr>
								<tr>
									<td><input type="radio">Etranger de l'établissement</td>
								</tr>
							</tr>
							<tr>
								<td><label>Montant de la bourse</label></td>
								<td><input type="nombre"></td>
							</tr>
						</table>
					</div>
					
				</fieldset>
				<fieldset>
					<legend><b>Contact</b></legend>
					<div class = "left">
						<table>
							<tr>
								<td><label>Nom</label></td>
								<td><input type="text" name = "nom1"></td>
							</tr>
							<tr>
								<td><label>Prenom</label></td>
								<td><input type="text" name = "prenom1"></td>
							</tr>
							<tr>
								<td><label>Telephone Portable</label></td>
								<td><input type="text" name = "telport"></td>
							</tr>
							<tr>
								<td><label>Telephone Fixe</label></td>
								<td><input type="text" name = "telfix"></td>
							</tr>
							<tr>
								<td><label>Email Personnel</label></td>
								<td><input type="text" name = "mailpers"></td>
							</tr>
						</table>
					</div>
					<div class = "right">
						<table>
							<tr>
								<td><label>Boite Postal</label></td>
								<td><input type="text" name = "boite"></td>
							</tr>
							<tr>
								<td><label>Fax</label></td>
								<td><input type="text" name = "fax"></td>
							</tr>
							<tr>
								<td><label>Responsable Etudiant</label></td>
								<td><input type="text" name = "res"></td>
							</tr>
							<tr>
								<td><label>Personne à contacter</label></td>
								<td><input type="text" name = "pers"></td>
							</tr>
						</table>
					</div>
				</fieldset>
				<fieldset>
					<div class = "left">
						<input type="submit" name = "Annuler" id = "ann">
					</div>
					<div class = "right">
						<input type="submit" name = "Valider" id = "val">
					</div>
				</fieldset>
			
		</form>
	</div>
</body>
</html>