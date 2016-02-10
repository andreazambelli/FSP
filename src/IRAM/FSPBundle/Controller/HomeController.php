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
     return $this->render('FSPBundle::accueil.html.twig');
   }
}
