<header id="header-connect">
	<img class="logo-connect" src="Content/images/logo.png">
</header>

<section id="section-connect">
	<div id="div-connection-connect">
		<h2 class="h2-connect">DÉMARREZ LA SESSION</h2>
		<form id="form-connect" action="index.php?action=connectionTraitement" method="post">
			<label class="label-connect" for="email">E-MAIL</label>
			<input class="input-connect" type="email" name="email">
			<label class="label-connect" for="password">MOT DE PASSE</label>
			<input class="input-connect" type="password" name="password">
			<input id="submit-connect" class="bouton-connect" type="submit" value="SE CONNECTER">
		</form>
	</div>
	<div id="div-inscription-connect">
		<h2 class="h2-connect" id="h2-inscription-connect">INSCRIVEZ-VOUS</h2>
		<p class="p-inscription-connect">Si vous n'avez pas encore de compte d'utilisateur de let’splay.com, utilisez cette option pour accéder au formulaire</p>
		<a href="index.php?action=Inscription" id="a-inscription-connect" class="bouton-connect">S'INSCRIRE</a>
	</div>
</section>

<footer>
	<ul id="ul-connect">
		<li class="li-connect"><a href="index.php?action=Accueil">ACCUEIL</a></li>
		<li class="li-connect"><a href="index.php?action=Quizzs">JOUER</a></li>
		<li class="li-connect"><a href="index.php?action=creerQuizz">CRÉER</a></li>
	</ul>
</footer>