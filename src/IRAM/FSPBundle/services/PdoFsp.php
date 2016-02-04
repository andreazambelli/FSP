<?php

namespace IRAM\FSPBundle\services;
use PDO;

class PdoFsp{   		
		private static $monPdo;
		private static $monPdoFsp=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	public function __construct($serveur,$bdd,$user,$mdp){
    	PdoFsp::$monPdo = new PDO($serveur.';'.$bdd, $user, $mdp); 
		PdoFsp::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoFsp::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoFsp = PdoGsb::getPdoFsp();
 
 * @return l'unique objet de la classe PdoFsp
 */
	public  static function getPdoFsp(){
		if(PdoFsp::$monPdoFsp==null){
			PdoFsp::$monPdoFsp= new PdoFsp();
		}
		return PdoFsp::$monPdoFsp;  
	}
/**
 * Retourne les informations d'un visiteur
 
 * @param $email
 * @param $mdp
 * @return l'id, le nom et le prénom sous la forme d'un tableau associatif 
*/
	public function getInfosUser($email,$mdp){
		$req = "select profil.email as email, profil.nom as nom, profil.prenom as prenom, profil.dateNaissance as dateNaissance, profil.pays as pays from profil where profil.email='$email' and profil.mdp='$mdp'";
		$rs = PdoFsp::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
}
?>	
