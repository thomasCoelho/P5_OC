<header id="header-connect">
	<img class="logo-connect" src="Content/images/logo.png">
</header>

<section id="section-liste-quizzs">
	<figure id="figure-quizzs">
		<img id="image-quizzs" src="Content/images/diegoQuizz.png">
		<div id="div-infobulle-quizzs">
			<p id="p-infobulle-quizzs">CHOISIS TON QUIZZ !</p>
			<span id="span-infobulle-quizzs"></span>
		</div>
	</figure>
	<?php 
		for ($i=0; $i < 6; $i++) { 
			if ($i%2) {
				?>
				<div>
				<?php foreach ($quizz as $quizzs): 
					?>
				<div class="div-liste-quizzs">
					<div class="div-quizzs"><p class="p-quizzs"><a href="index.php?action=playQuizz&id=<?php $quizzs['id_quizz']; ?>"><?php echo($quizzs['title_quizz']); ?></a></p></div>
					
				</div>
				<?php endforeach;
			}
		}
	?>
</div>
</section>
<footer>
	<img class="logo-footer" src="Content/images/logoFooter.svg">
</footer>
