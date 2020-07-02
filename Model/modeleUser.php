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

	public function isIdsFree($email, $name){
		$sql = "SELECT email_user, name_user FROM table_user WHERE email_user = ? OR name_user = ?";
		$idsFree = $this->executerRequete($sql, array($email, $name));
	}

	public function changePassword($password, $name){
		$sql = "UPDATE table_user SET email_password = ? WHERE name_user = ?";
		$newPass = $this->executerRequete($sql, array($password, $name));
	}
}