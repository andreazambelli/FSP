<?php
namespace IRAM\FSPBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ThemeController extends Controller
{
 public function logementAction()
 {
  return $this->render('FSPBundle:Theme:logement.html.twig');
 }

 public function coursAction()
 {
  return $this->render('FSPBundle:Theme:cours.html.twig');
 }

 public function evenementAction()
 {
  return $this->render('FSPBundle:Theme:evenement.html.twig');
 }

 public function cultureAction() 
 {
  return $this->render('FSPBundle:Theme:culture.html.twig');
 }

 public function planAction()
 {
  return $this->render('FSPBundle:Theme:plan.html.twig');
 }
}
