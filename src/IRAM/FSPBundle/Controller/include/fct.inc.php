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
  return isset($_SESSION['email']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur
 
 * @param $email 
 * @param $nom
 * @param $prenom
 */
function connecter($email,$nom,$prenom,$dateNaissance,$pays){
	$_SESSION['email']= $email; 
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
/**
 * Transforme une date au format format anglais aaaa-mm-jj vers le format français jj/mm/aaaa 
 
 * @param $madate au format  aaaa-mm-jj
 * @return la date au format format français jj/mm/aaaa
*/
function dateAnglaisVersFrancais($Madate){
   @list($annee,$mois,$jour)=explode('-',$Madate);
   $date="$jour"."/".$mois."/".$annee;
   return $date;
}
?>
