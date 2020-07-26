	<link rel="stylesheet" type="text/css" href="../Content/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Marvel:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<header id="header-connect">
	<img class="logo-connect" src="../Content/images/logo.png">
</header>

<section id="section-liste-quizzs">
	<figure id="figure-quizzs">
		<img id="image-quizzs" src="../Content/images/diegoQuizz.png">
		<div id="div-infobulle-quizzs">
			<p id="p-infobulle-quizzs">CHOISIS TON QUIZZ !</p>
			<span id="span-infobulle-quizzs"></span>
		</div>
	</figure>
	<?php 
		for ($i=0; $i < 6; $i++) { 
			if ($i%2) {
				?>
				<div class="div-liste-quizzs">
					<div class="div-quizzs"><p class="p-quizzs">QUIZZ N°</p></div>
					<div class="div-quizzs"><p class="p-quizzs">QUIZZ N°</p></div>
				</div>
				<?php
			}
		}
	?>
</section>
<footer>
	<img class="logo-footer" src="../Content/images/logoFooter.svg">
</footer>
<?php
phpinfo();
?>