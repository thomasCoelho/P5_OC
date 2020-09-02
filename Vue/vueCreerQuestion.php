<header id="header-connect">
	<a href="index.php?action=Accueil"><img class="logo-connect" src="Content/images/logo.png"></a>
	<a id="a-header-creer-quizz">TERMINE</a>
</header>

<section id="section-creer-quizz">
	<div id="re">
	<div id="div-gabarit">
	 	<?php
	 	for ($i=0; $i < 10 ; $i++) { 
	 		?>
	 		<figure class="figure-gabarit">
	 			<img class="img-gabarit" src="Content/images/gabarit.png">
	 			<span class="span-gabarit">question numero</span>
	 		</figure>
	 		<?php
	 	}
	 	?></div>
	 		 
	</div>
	<div id="div-form">
		<form id="form-quizz" action="index.php?action=creerQuestionTraitement" method="post">
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
							" value="500">
							<label class="form-question-label-points" id="form-question-label-points-1" for="question-points">500</label>
						</div>
						<div class="div-input-label-points">
							<input class="form-question-points" type="radio" name="form-question-points" id="form-question-label-points-2" value="1000" checked>
							<label class="form-question-label-points" id="form-question-label-points-2" for="question-points">1000</label>
						</div>
						<div class="div-input-label-points">
							<input class="form-question-points" type="radio" name="form-question-points" id="form-question-label-points-3" value="2000">
							<label class="form-question-label-points" id="form-question-label-points-3" for="question-points"><span class="span-form-points">2000</span></label>
						</div>
					</div>
				</div>
			</div>
			<div id="div-form-reponse">
				<div class="div-form-reponse-input">
					<div class="div-form-input-radio">
						<input class="form-input-reponse" type="text" name="reponse1" placeholder="Réponse 1">
						<input class="form-radio-reponse" type="radio" for="reponse" name="reponse">
					</div>
					<div class="div-form-input-radio">
						<input class="form-input-reponse" type="text" name="reponse2" placeholder="Réponse 2">
						<input class="form-radio-reponse" type="radio" for="reponse" name="reponse">
					</div>
				</div>
				<div class="div-form-reponse-input">
					<div class="div-form-input-radio">
						<input class="form-input-reponse" type="text" name="reponse3" placeholder="Réponse 3">
						<input class="form-radio-reponse" type="radio" for="reponse" name="reponse">
					</div>
					<div class="div-form-input-radio">
						<input class="form-input-reponse" type="text" name="reponse4" placeholder="Réponse 4">
						<input class="form-radio-reponse" type="radio" for="reponse" name="reponse">
					</div>
					<input type="hidden" name="id-question" value="<?php echo($question['id_question']); ?>">
				</div>
			</div>
			<input id="submit-question" type="submit" value="Ajouter une question">
		</form>
	</div>
</section>

<footer>
	<img class="logo-footer" src="Content/images/logoFooter.svg">
</footer>
