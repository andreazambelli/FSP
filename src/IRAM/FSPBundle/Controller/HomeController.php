<?php
namespace IRAM\FSPBundle\Controller;
require_once("include/fct.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use PdoFsp;
class HomeController extends Controller
{
   public function accueilAction()
   {
    $session = $this->get('request')->getSession();
    $request = $this->get('request');
    $pdo = $this->get('fsp.pdo');
    $lesAnnonces = $pdo->getAnnonces();
    if (estConnecte($session)){
    return $this->render('FSPBundle:User:accueil.html.twig');
   }
   else{
	return $this->render('FSPBundle::accueil.html.twig', array('lesAnnonces'=>$lesAnnonces));
       }
   }

}
