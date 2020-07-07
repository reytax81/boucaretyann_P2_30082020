<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="coiffstyle.css">
	<title>liberty coiff</title>
</head>

<body>
	<header>
		<h1>salon de coiffure liberty coiff</h1>
		<h2>Femmes, Hommes, enfants</h2>
	</header>

	<nav>
		<ul>
			<li><a href="#">Acceuil</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">CV</a></li>
		</ul>
	</nav>

	<section>
		<aside>
			<h1>A propos de l'auteur</h1>
			<p>blablablabla</p>
		</aside>
		<article>
			<h1>je suis un grand coiffeur</h1>
			<p>blabla<strong>blabla</strong>bla</p>

			<p> Ceci est un paragraphe avant le tableau.</p>

			<table>
				<caption>liste de passagers</caption>
				<tr>
					<th>nom</th>
					<th>age</th>
					<th>pays</th>
				</tr>
				<tr>
					<td>carmen</td>
					<td>33 ans</td>
					<td>espagne</td>
				</tr>
				<tr>
					<td>tom</td>
					<td>28 ans </td>
					<td>etat-unis</td>
				</tr>

				<table>
					<caption>liste de passager</caption>
					<thead>
						<tr>
							<th>nom</th>
							<th>age</th>
							<th>pays</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>nom</th>
							<th>age</th>
							<th>pays</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<th>carmen</th>
							<th>33 ans</th>
							<th>espagne</th>
						</tr>
						<tr>
							<th>tom</th>
							<th>28 ans</th>
							<th>etats unis</th>
						</tr>
						<tr>
							<th>martine</th>
							<th>45 ans</th>
							<th>france</th>
						</tr>
						<tr>
							<th>francois</th>
							<th>62 ans</th>
							<th>italie</th>
						</tr>
						<tr>
							<th>eric</th>
							<th>20 ans</th>
							<th>suede</th>
						</tr>
					</tbody>
				</table>
				

			</table>
			<p>Ceci est un paragraphe apres le tableau.</p>



			<p>texte avant le formulaire</p>


			<form method="post" action="traitement.php">
				<fieldset>
					<legend>vos coordonnées</legend>
					<label for="nom">Quel est votre nom ?</label>
					<input type="text" name="nom" id="nom" />

					<label for="prenom">Quel est votre prénom</label>
					<input type="text" name="prénom" id="prénom" />

					<label for="email">votre email</label>
					<input type="text" name="email" id="email" required />
				</fieldset>

				<fieldset>
				<p>
					<label for="pseudo">votre pseudo</label> : <input type="text" name="pseudo" placeholder="ex:zozor" size="30" maxlength="10" id="pseudo" />
				<br />
				    <label for="pass">Votre mot de passe :</label>
				    <input type="password" name="pass" id="pass" />
				</p>
				<p>
					<label for="ameliorer">comment pensez-vous que je pourrais ameliorer mon site?</label><br />
					<textarea name="ameliorer" id="ameliorer"></textarea>
				</p>
				<input type="color" />
				<input type="date" />
				<input type="search" />
				<p>
					cochez les aliment que vous aimez :<br />
					<input type="checkbox" name="frite" id="frite" /> <label for="frite">frite</label><br />
					<input type="checkbox" name="viande" id="viande" /> <label for="viande">viande</label><br />
					<input type="checkbox" name="poisson" id="poisson" /> <label for="poisson">poisson</label>
				</p>
				<p>
					veuillez indiquez votre tranche d'age :<br />
				<input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">moins de 15 ans</label><br />
				<input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
				<input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
				<input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40"> plus de 40 ans</label>
			    </p>

			    <p>
			    	<label for="pays">Dans quel pays habitez-vous ?</label><br />
			    	<select name="pays" id="pays">
			    	<optgroup label="europe">
			    		<option value="france">France</option>
			    		<option value="espagne">Espagne</option>
			    		<option value="italie">Italie</option>
			    		<option value="portugal">Portugal</option>
			    		<option value="grece">grece</option>
			    	</optgroup>
			    	<optgroup label="amerique_du_nord">
			    		<option value="canada">canada</option>
			    		<option value="etat-unis">etat-unis</option>
			    		<option value="mexique">mexique</option>
			    	</optgroup>
			    	</select>
			    </p>


				<p>texte dans le formulaire</p>

			</fieldset>
            <input type="submit" value="envoyer" />
			</form>

			<p>texte apres le formulaire</p>
			<audio src="kuroko.mp3" controls loop></audio>

			<audio controls>
				<source src="kuroko.mp3">
				<source src="kuroko.ogg">
			</audio>		




		</article>
	</section>

	<footer>
		<p>blablablablablablabla<br />
			<a href="#">Me contacter !</a></p>
	</footer>

</body>
</html>