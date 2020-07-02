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
		$sql = "INSERT INTO table_user(email_user, name_user, password_user) VALUES(?,?,?)";
		$signIn = $this->executerRequete($sql, array($email, $name, $password));
	}
}