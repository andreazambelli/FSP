<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoFsp qui contiendra l'unique instance de la classe
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
class PdoFsp{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=FSP';   		
      	private static $user='root' ;    		
      	private static $mdp='root' ;	
		private static $monPdo;
		private static $monPdoFsp=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	PdoFsp::$monPdo = new PDO(PdoFsp::$serveur.';'.PdoFsp::$bdd, PdoFsp::$user, PdoFsp::$mdp); 
		PdoFsp::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoFsp::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
 
 * @return l'unique objet de la classe PdoGsb
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
	public function getInfosUser($email, $mdp){
		$req = "select profil.email as email, profil.nom as nom, profil.prenom as prenom from profil 
		where profil.email='$email' and profil.mdp='$mdp'";
		$rs = PdoFsp::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
}
?>	
