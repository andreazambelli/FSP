<?php
namespace IRAM\FSPBundle\Controller;
require_once("include/fct.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoFsp;

class ThemeController extends Controller
{
 public function logementAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $theme = 'logement';
  $lesAnnonces = $pdo->getAnnoncesThemes($theme);
  return $this->render('FSPBundle:Theme:logement.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function coursAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $theme = 'cours';
  $lesAnnonces = $pdo->getAnnoncesThemes($theme);
  return $this->render('FSPBundle:Theme:cours.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function evenementAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $theme = 'evenement';
  $lesAnnonces = $pdo->getAnnoncesThemes($theme);
  return $this->render('FSPBundle:Theme:evenement.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function cultureAction() 
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $theme = 'culture';
  $lesAnnonces = $pdo->getAnnoncesThemes($theme);
  return $this->render('FSPBundle:Theme:culture.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function planAction()
 {
  return $this->render('FSPBundle:Theme:plan.html.twig');
 }
}
