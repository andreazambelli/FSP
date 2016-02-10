<?php
namespace IRAM\FSPBundle\services;
use PDO;

class PdoFsp{   		
		private static $monPdo;
		private static $monPdoFsp=null;
	
        public function __construct($serveur,$bdd,$user,$mdp){
    	PdoFsp::$monPdo = new PDO($serveur.';'.$bdd, $user, $mdp); 
		PdoFsp::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoFsp::$monPdo = null;
	}
	
        public  static function getPdoFsp(){
		if(PdoFsp::$monPdoFsp==null){
			PdoFsp::$monPdoFsp= new PdoFsp();
		}
		return PdoFsp::$monPdoFsp;  
	}


	public function getInfosUser($email,$mdp){
		$req = "select profil.email as email, profil.nom as nom, profil.prenom as prenom, profil.dateNaissance as dateNaissance, profil.pays as pays from profil where profil.email='$email' and profil.mdp='$mdp'";
		$rs = PdoFsp::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
      
        public function getAnnonces(){
                $req = "select annonce.titre as titre, annonce.date as date, annonce.contenu as contenu, profil.nom as nom, profil.prenom as prenom, etat.libelle as etat, theme.libelle as theme from annonce, profil, etat, theme where annonce.refidetat = etat.id and annonce.refemail = profil.email and annonce.refidtheme = theme.id";
                $rs = PdoFsp::$monPdo->query($req);
                $lesLignes = $rs->fetchAll();
                return $lesLignes;  
        }

        public function getAnnoncesThemes($theme){
                  $req = "select annonce.titre as titre, annonce.date as date, annonce.contenu as contenu, profil.nom as nom, profil.prenom as prenom, etat.libelle as etat, theme.libelle as theme from annonce, profil, etat, theme where annonce.refidetat = etat.id and annonce.refemail = profil.email and annonce.refidtheme = theme.id and theme.libelle = '$theme'";
                $rs = PdoFsp::$monPdo->query($req);
                $lesLignes = $rs->fetchAll();
                return $lesLignes;
        }
	public function getAnnoncesUser($email){
		 $req = "select annonce.titre as titre, annonce.date as date, theme.libelle as theme, etat.libelle as etat from annonce, theme, profil, etat where annonce.refemail = profil.email and profil.email = '$email' and annonce.refidtheme = theme.id and annonce.refidetat = etat.id";
		$rs = PdoFsp::$monPdo->query($req);
		$lesLignes = $rs->fetchAll();
		return $lesLignes;
	 }

	public function getCommentaireAnnonce($id){
		$req = "select commentaire.contenu as contenu, commentaire.date as date, profil.nom as nom, profil.prenom as prenom from commentaire, profil, annonce where commentaire.refemail = profil.email and commentaire.refidannonce = annonce.id and annonce.id = '$id'";
		$rs = PdoFsp::$monPdo->query($req);
		$lesLignes = $rs->fetchAll();
		return $lesLignes;
	}




}
?>	
