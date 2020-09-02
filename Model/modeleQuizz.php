<?php

require_once 'Model/modele.php';

class Quizz extends Modele {

	public function createQuizz($title_quizz){
		$sql = "INSERT INTO quizz(title_quizz, creator_quizz) VALUES(?, 'createur')";
		$newQuizz = $this->executerRequete($sql, array($title_quizz));
	}

	public function readQuizzs(){
		$sql = "SELECT id_quizz, title_quizz FROM quizz LIMIT 6";
		$readQuizzs = $this->executerRequete($sql);
		return $readQuizzs;
	}

	public function readQuizz($id_quizz){
		$sql = "SELECT id_quizz, title_quizz FROM quizz WHERE id_quizz = ?";
		$readQuizz = $this->executerRequete($sql, array($id_quizz));
		if ($readQuizz->rowCount() == 1){
      		return $readQuizz->fetch();  
    	}
    	else{
      		throw new Exception("Aucun quizz ne correspond à l'identifiant '$id_quizz'");
    	}
	}

	public function editQuizz($title_quizz, $id_quizz){
		$sql = "UPDATE quizz SET title_quizz = ? WHERE id_quizz = ?";
		$newQuizz = $this->executerRequete($sql, array($title_quizz, $id_quizz));
	}

	public function deleteQuizz($id_quizz){
		$sql = "DELETE FROM quizz WHERE id_quizz = ?";
		$deleteQuizz = $this->executerRequete($sql, array($id_quizz));
	}


	public function createQuestion($id_quizz, $text_question, $point_question, $temps_question){
		$sql = "INSERT INTO question(id_quizz, text_question, point_question, temps_question) VALUES(?,?,?,?)";
		$newQuestion = $this->executerRequete($sql, array($id_quizz, $text_question, $point_question, $temps_question));
	}

	public function readQuestion($id_quizz){
		$sql = "SELECT id_question, text_question, point_question, temps_question FROM question WHERE id_quizz = ?";
		$readQuestion = $this->executerRequete($sql, array($id_quizz));
		return $readQuestion->fetch();
	}

	public function editQuestion($text_question, $point_question, $temps_question){
		$sql = "UPDATE question SET text_question = ?, point_question = ?, temps_question = ? WHERE id_question = ?";
      	$editQuestion = $this->executerRequete($sql, array($text_question, $point_question, $temps_question));
	}

	public function deleteQuestion($id_question){
		$sql = "DELETE FROM question WHERE id_question = ?";
		$deleteQuestion = $this->executerRequete($sql, array($id_question));
	}


	public function createPropositions($id_question, $prop1, $prop2, $prop3, $prop4){
		$sql = "INSERT INTO proposition_list(id_question, prop1, prop2, prop3, prop4) VALUES(?,?,?,?,?)";
		$newProposition = $this->executerRequete($sql, array($id_question, $prop1, $prop2, $prop3, $prop4));
	}

	public function readPropositions($id_question){
		$sql = "SELECT id_question, prop1, prop2, prop3, prop4 FROM proposition_list WHERE id_question = ?";
		$readPropositions = $this->executerRequete($sql, array($id_question));
		return $readPropositions;
	}

	public function editPropositions($prop1, $prop2, $prop3, $prop4, $id_reponse, $id_question){
		$sql = "UPDATE proposition_list SET prop1 = ?, prop2 = ?, prop3 = ?, prop4 = ?, id_reponse = ?) WHERE id_question = ?";
		$editProposition = $this->executerRequete($sql, array($prop1, $prop2, $prop3, $prop4, $id_reponse, $id_question));
	}

}