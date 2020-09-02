<header id="header-connect">
	<a href="index.php?action=Accueil"><img class="logo-connect" src="Content/images/logo.png"></a>
</header>

<section id="section-inscription">
	<h2 id="h2-inscription">INSCRIVEZ VOS INFORMATIONS PERSONNELLES</h2>
	<form id="form-inscription" action="index.php?action=inscriptionTraitement" method="post">
		<label class="label-inscription" for="pseudo">PRENOM</label>
		<input class="input-inscription" type="text" name="prenom">
		<label class="label-inscription" for="nom">PSEUDO</label>
		<input class="input-inscription" type="text" name="pseudo">
		<label class="label-inscription" for="email">E-MAIL</label>
		<input class="input-inscription" type="email" name="email">
		<label class="label-inscription" for="password">MOT DE PASSE</label>
		<input class="input-inscription" type="password" name="password">		
		<input id="submit-inscription" type="submit" value="ENREGISTRER">
	</form>
</section>

<footer>
	<ul id="ul-connect">
		<li class="li-connect"><a href="index.php?action=Accueil">ACCUEIL</a></li>
		<li class="li-connect"><a href="index.php?action=Quizzs">JOUER</a></li>
		<li class="li-connect"><a href="index.php?action=creerQuizz">CRÉER</a></li>
	</ul>
</footer>