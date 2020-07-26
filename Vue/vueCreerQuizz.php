
	<link rel="stylesheet" type="text/css" href="../Content/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Marvel:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<header id="header-connect">
	<img class="logo-connect" src="../Content/images/logo.png">
	<a id="a-header-creer-quizz">TERMINE</a>
</header>

<section id="section-creer-quizz">
	<div id="re">
	<div id="div-gabarit">
	 	<?php
	 	for ($i=0; $i < 10 ; $i++) { 
	 		?>
	 		<figure class="figure-gabarit">
	 			<img class="img-gabarit" src="../Content/images/gabarit.png">
	 			<span class="span-gabarit">question numero</span>
	 		</figure>
	 		<?php
	 	}
	 	?></div>
	 	<bouton id="fd">AJOUTER UNE QUESTION</bouton>	 
	</div>
	<div id="div-form">
		<form id="form-quizz">
			<input id="form-question-title" type="text" name="form-question-title" placeholder="CLIQUEZ POUR ECRIRE VOTRE QUESTION">
			<div id="div-parameter-form-quizz">
				<div id="div-parameter-form-time">
					<p id="p-question-time">INSCRIVEZ LE TEMPS</p>
					<input id="form-question-time" type="text" name="form-question-time" value="20">
					<p id="p-form-time">secondes</p>
				</div>
				<div id="fieldset-parameter-form-points">
					<p id="p-question-points">CHOISISSEZ UN NOMBRE DE POINTS</p>
					<div id="div-container-input-label-points">
						<div class="div-input-label-points">
							<input class="form-question-points" type="radio" name="form-question-points" id="form-question-label-points-1
							">
							<label class="form-question-label-points" id="form-question-label-points-1" for="question-points">500</label>
						</div>
						<div class="div-input-label-points">
							<input class="form-question-points" type="radio" name="form-question-points" id="form-question-label-points-2" checked>
							<label class="form-question-label-points" id="form-question-label-points-2" for="question-points">1000</label>
						</div>
						<div class="div-input-label-points">
							<input class="form-question-points" type="radio" name="form-question-points" id="form-question-label-points-3">
							<label class="form-question-label-points" id="form-question-label-points-3" for="question-points"><span class="span-form-points">2000</span></label>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
