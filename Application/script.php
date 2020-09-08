<?php 

require_once '../Model/modele.php';

if (isset($_POST['form-question-title'], $_POST['form-question-time'], $_POST['form-question-points'], $_POST['reponse'], $_POST['reponse1'], $_POST['reponse2'], $_POST['reponse3'], $_POST['reponse4']) AND strlen($_POST['form-question-title']) != 0) {
			$id_question = $_POST['id-question'];
			$text_question = htmlspecialchars($_POST['form-question-title']);
			$point_question = $_POST['form-question-points'];
			$temps_question = $_POST['form-question-time'];
			$reponse = $_POST['reponse'];
			$prop1 = $_POST['reponse1'];
			$prop2 = $_POST['reponse2'];
			$prop3 = $_POST['reponse3'];
			$prop4 = $_POST['reponse4'];

			echo "true";
			return true;
			?>
			<script>console.log("true");</script>
			<?php

		$sql = "INSERT INTO question(id_quizz, text_question, point_question, temps_question) VALUES(1 ,'".$text_question."', '".$point_question."', '".$temps_question."')";
		$newQuestion = $this->executerRequete($sql);
	}else{
			echo "false";
			return false;
	}
?>
<script>console.log("test");</script>