<?php

require_once 'Model/modele.php';

class Session extends Modele {

	public function userConnect($email){
		$sql = "SELECT password_user FROM table_user WHERE email_user = ?";
	    $idConnect = $this->executerRequete($sql, array($email));
	    $varConnect = $idConnect->fetch();
	    return $varConnect['password_user'];
	}

	public function userSignIn($email, $name, $password){
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO table_user(email_user, name_user, password_user) VALUES(?,?,?)";
		$signIn = $this->executerRequete($sql, array($email, $name, $passwordHash));
	}

	public function isEmailFree($email){
		$sql = "SELECT email_user FROM table_user WHERE email_user =?";
		$idsFree = $this->executerRequete($sql, array($email));
		return $idsFree;
	}

	public function isPseudoFree($pseudo){
		$sql = "SELECT pseudo_user FROM table_user WHERE pseudo_user = ?";
		$idsFree = $this->executerRequete($sql, array($pseudo));
		return $idsFree;
	}

	public function changePassword($password, $name){
		$sql = "UPDATE table_user SET password_user = ? WHERE name_user = ?";
		$newPass = $this->executerRequete($sql, array($password, $name));
	}
}