<?php

require_once 'Model/modele.php';

class Session extends Modele {

	public function userConnect($email){
		$sql = "SELECT password_user FROM user WHERE email_user = ?";
	    $idConnect = $this->executerRequete($sql, array($email));
	    $varConnect = $idConnect->fetch();
	    return $varConnect['password_user'];
	}

	public function userSignIn($email, $prenom, $pseudo, $password){
		$sql = "INSERT INTO user(email_user, prenom_user, pseudo_user, password_user) VALUES(?,?,?,?)";
		$signIn = $this->executerRequete($sql, array($email, $prenom, $pseudo, $password));
	}

	public function isEmailFree($email){
		$sql = "SELECT email_user FROM user WHERE email_user =?";
		$idsFree = $this->executerRequete($sql, array($email));
		return $idsFree->fetch();
	}

	public function isPseudoFree($pseudo){
		$sql = "SELECT pseudo_user FROM user WHERE pseudo_user = ?";
		$idsFree = $this->executerRequete($sql, array($pseudo));
		return $idsFree->fetch();
	}

	public function changePassword($password, $name){
		$sql = "UPDATE user SET password_user = ? WHERE name_user = ?";
		$newPass = $this->executerRequete($sql, array($password, $name));
	}
}