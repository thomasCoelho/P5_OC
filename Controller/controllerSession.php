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

	function vueInscription(){
		try {
	    	$vue = new Vue('Inscription');
			$vue->generer(array());
		} 
		catch (Exception $e) {
		    echo $e->getMessage(), "\n";
		}
	}

	function inscription(){
		if (isset($_POST['email'], $_POST['passsword'], $_POST['pseudo'], $_POST['prenom'])) {
			$this->session->isEmailFree($email);
		}
	}



}