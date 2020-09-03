<?php

require_once 'Model/modeleUser.php';
require_once 'Vue/vue.php';

class ControllerUser {

private $session;


	function __construct(){
		$this->session = new Session();
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

	function vueConnection(){
		try {
	    	$vue = new Vue('Connexion');
			$vue->generer(array());
		} 
		catch (Exception $e) {
		    echo $e->getMessage(), "\n";
		}
	}

	function isIdsCorrect(){
		if(isset($_POST['email']) AND isset($_POST['password'])){
        	$email = htmlspecialchars($_POST['email']);
        	$password = htmlspecialchars($_POST['password']);
			if($email != null AND $password != null){
				$this->session->userConnect($email);
				$pseudoTest = $this->session->userConnect($email);
				$passSecure = htmlspecialchars($_POST['password']);
				$passok = password_verify($passSecure, $pseudoTest);
				if ($passok) {
			        $_SESSION['pseudo'] = 'pseudoCorrect';
			        header('Location:index.php?action=Accueil');			        
        		}
        		else{
           			header('Location:index.php?action=AdminConnect');
            		setcookie('wrongPass','Mauvais identifiants',time() + 15, null, null, false, true);
          		} 
	}}
}


}