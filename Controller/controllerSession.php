<?php

require_once 'Model/modeleUser.php';
require_once 'Vue/vue.php';

class ControllerUser {

private $session;


	function __construct(){
		$this->session = new Session();
	}

	function vueConnection(){
		try {
	    	$vue = new Vue('Connexion');
			$vue->generer(array());
		} 
		catch (Exception $e) {
		    echo $e->getMessage(), "\n";
		}
	}

	function vueInscription($messageMail, $messagePseudo){
		try {
	    	$vue = new Vue('Inscription');
			$vue->generer(array('mail' => $messageMail, 'pseudo' => $messagePseudo));
		} 
		catch (Exception $e) {
		    echo $e->getMessage(), "\n";
		}
	}

	function inscription(){
		if (isset($_POST['email'], $_POST['password'], $_POST['pseudo'], $_POST['prenom'])) {
			$email = htmlspecialchars($_POST['email']);
			$pseudo = htmlspecialchars($_POST['pseudo']);
			if($this->session->isEmailFree($email) == true OR $this->session->isPseudoFree($pseudo) == true){
				if($this->session->isPseudoFree($pseudo) == true){
					$pseudoUse = "Ce pseudo est déjà utilisé";
				}
				if($this->session->isEmailFree($email)){
					$emailUse = "Cet E-mail est déjà utilisé, connectez-vous :)";
				}
				return $this->vueInscription($emailUse, $pseudoUse);
			} 
			else{
				$password = htmlspecialchars($_POST['password']);
				$prenom = htmlspecialchars($_POST['prenom']);
				$passwordHash = password_hash($password, PASSWORD_DEFAULT);
				$this->session->userSignIn($email, $prenom, $pseudo, $passwordHash);
		
			}
		}
	}



}