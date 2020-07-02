<?php

require_once 'Model/modele.php';

class Session extends Modele {

	public function adminIds($email){
		$sql = "SELECT password_user FROM table_user WHERE email_user = ?";
	    $idConnect = $this->executerRequete($sql, array($email));
	    $varConnect = $idConnect->fetch();
	    return $varConnect['password_user'];
	}
}