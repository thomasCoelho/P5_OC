<?php
require_once 'Controller/controllerQuizz.php';
require_once 'Controller/controllerAccueil.php';
require_once 'Controller/controllerSession.php';
require_once 'Model/modeleUser.php';
require_once 'Vue/vue.php';

class Routeur {

  private $ctrlQuizz;
  private $ctrlAccueil;
  private $ctrlConnection;


  public function __construct() {
   
    if (isset($_GET['action'])){

      //Vue Accueil
      if ($_GET['action'] == 'Accueil') {
        $this->ctrlAccueil = new ControllerAccueil();
        $this->ctrlAccueil->getAccueil();
      }

      if ($_GET['action'] == 'Quizzs') {
        $this->ctrlQuizz = new ControllerQuizz();
        $this->ctrlQuizz->readQuizz();
      }

      //Afficher 1 quizz 
      if ($_GET['action'] == 'playQuizz') {
        $this->ctrlQuizz = new ControllerQuizz();
        $this->ctrlQuizz->readQuizz();
      }

      //Vue creerQuizz
      if ($_GET['action'] == 'creerQuizz') {
        $this->ctrlQuizz = new ControllerQuizz();
        $this->ctrlQuizz->vueCreerQuizz();
      }

      //Insert titre quizz
      if ($_GET['action'] == 'creerQuizzTraitement') {
        $this->ctrlQuizz = new ControllerQuizz();
        $this->ctrlQuizz->createQuizz();
        return $this->ctrlQuizz->vueCreerQuestion();
      }


      //Vue creerQuestion
      if ($_GET['action'] == 'creerQuestion') {
        $this->ctrlQuizz = new ControllerQuizz();
        $this->ctrlQuizz->vueCreerQuestion();
      }

      //Traitement form creation question
      if ($_GET['action'] == 'creerQuestionTraitement') {
        $this->ctrlQuizz = new ControllerQuizz();
        $this->ctrlQuizz->createQuestion();
        return $this->ctrlQuizz->vueCreerQuestion();
      }

      if ($_GET['action'] == 'Connection') {
        $this->ctrlConnection = new ControllerUser();
        $this->ctrlConnection->vueConnection();
      }

      if ($_GET['action'] == 'Inscription') {
        $this->ctrlConnection = new ControllerUser();
        $this->ctrlConnection->vueInscription(null, null);
      }

      if ($_GET['action'] == 'inscriptionTraitement') {
        $this->ctrlConnection = new ControllerUser();
        $this->ctrlAccueil = new ControllerAccueil(); 
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];       
        $this->ctrlConnection->inscription();

      }



    }
  }
}
