<?php

require_once 'Model/modeleQuizz.php';
require_once 'Vue/vue.php';

class ControllerQuizz {

	private $quizz;


	function __construct(){
		$this->quizz = new Quizz();
	}

	//Affichage des vue creerQuizz et CreerQuestion 
	function vueCreerQuestion(){
		try {
	    	$vue = new Vue('CreerQuestion');
			$vue->generer(array('question' => $this->quizz->readQuestion(1)));
		} 
		catch (Exception $e) {
		    echo $e->getMessage(), "\n";
		}
	}
	
	function vueCreerQuizz(){
		try {
	    	$vue = new Vue('CreerQuizz');
			$vue->generer(array());
		} 
		catch (Exception $e) {
		    echo $e->getMessage(), "\n";
		}
	}

	//insert du titre du quizz via vueCreerQuizz
	function createQuizz(){
		if (isset($_POST['title-quizz'])) {
			$title_quizz = $_POST['title-quizz'];
			$this->quizz->createQuizz($title_quizz);
		}
	}


	function createQuestion(){
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
			$this->quizz->createQuestion(1 ,$text_question, $point_question, $temps_question);
			$this->quizz->createPropositions($id_question, $prop1, $prop2, $prop3, $prop4);
		}
	}

	function readQuizz(){
		if (isset($_GET['id'])) {
			$id_quizz = $_GET['id'];
			$quizz = $this->quizz->readQuizz($id_quizz);
				try {
					$vue = new Vue('PlayQuizz');
					$vue->generer(array('quizz' => $quizz));
				} 
				catch (Exception $e) {
				    echo $e->getMessage(), "\n";
				}
			}
		else{
			$quizz = $this->quizz->readQuizzs();
			try {
				$vue = new Vue('Quizzs');
				$vue->generer(array('quizz' => $quizz));
			} 
			catch (Exception $e) {
				   echo $e->getMessage(), "\n";
			}
		}
	}


}