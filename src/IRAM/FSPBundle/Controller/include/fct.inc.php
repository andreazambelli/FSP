<?php
/** 
 * Fonctions pour l'application GSB
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 */
 /**
 * Teste si un quelconque visiteur est connecté
 * @return vrai ou faux 
 */
function estConnecte(){
  return isset($_SESSION['emailUser']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur
 
 * @param $email 
 * @param $nom
 * @param $prenom
 */
function connecter($email,$nom,$prenom,$dateNaissance,$pays){
	$_SESSION['emailUser']= $email; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
	$_SESSION['dateNaissance']= $dateNaissance;
	$_SESSION['pays']= $pays;
}
/**
 * Détruit la session active
 */
function deconnecter(){
	session_destroy();
}

?>
