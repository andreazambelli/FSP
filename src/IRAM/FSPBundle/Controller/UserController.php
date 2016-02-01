<?php

namespace IRAM\FSPBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdofsp.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoFsp;

class UserController extends Controller
{
 public function connexionAction()
 {
  return $this->render('FSPBundle:User:connexion.html.twig');
 }




 public function validerconnexionAction()
 {
     $session = $this->get('request')->getSession();
     $request = $this->get('request');
     $email = $request->request->get('email');
     $mdp = $request->request->get('mdp');
     $pdo = PdoFsp::getPdoFsp();
     $user = $pdo->getInfosUser($email,$mdp);
     if(!is_array($user)){
       return $this->render('FSPBundle:User:connexion.html.twig',array(
         'message'=>"Erreur d'email ou de mot de passe "));
     }
     else {
        $session->set('email',$user['email']);
        $session->set('nom',$user['nom']);
        $session->set('prenom',$user['prenom']);
	$session->set('dateNaissance',$user['dateNaissance']);
	$session->set('pays',$user['pays']);        
        return $this->render('FSPBundle::accueil.html.twig');
           }
  }  
 

 public function deconnexionAction()
 {
	$session = $this->get('request')->getSession();
	$session->clear();
	return $this->render('FSPBundle:User:connexion.html.twig');
 }
 public function inscriptionAction()
 {
  return $this->render('FSPBundle:User:inscription.html.twig');
 }

 public function ajouterAnnonceAction()
 {
  return $this->render('FSPBundle:User:ajouter.html.twig');
 }

 public function modifierAnnonceAction()
 {
  return $this->render('FSPBundle:User:modifier.html.twig');
 }

 public function supprimerAnnonceAction()
 {
  return $this->render('FSPBundle:User:supprimer.html.twig');
 }
}

