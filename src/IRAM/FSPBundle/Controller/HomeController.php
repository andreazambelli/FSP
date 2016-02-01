<?php
namespace IRAM\FSPBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdofsp.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use PdoFsp;
class HomeController extends Controller
{
   public function accueilAction()
   {
    $session = $this->get('request')->getSession();
    if (estConnecte($session)){
    return $this->render('FSPBundle::accueil.html.twig');
   }
   else{
	return $this->render('FSPBundle::accueil.html.twig');
       }
   }

}
