<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/accueil')) {
                // fsp_accueil
                if ($pathinfo === '/accueil') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\HomeController::accueilAction',  '_route' => 'fsp_accueil',);
                }

                // fsp_accueil_connecte
                if ($pathinfo === '/accueil-connecte') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::accueilAction',  '_route' => 'fsp_accueil_connecte',);
                }

            }

            if (0 === strpos($pathinfo, '/annonces-')) {
                // fsp_logement
                if ($pathinfo === '/annonces-logement') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::logementAction',  '_route' => 'fsp_logement',);
                }

                // fsp_cours
                if ($pathinfo === '/annonces-cours') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::coursAction',  '_route' => 'fsp_cours',);
                }

                // fsp_evenement
                if ($pathinfo === '/annonces-evenements') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::evenementAction',  '_route' => 'fsp_evenement',);
                }

                // fsp_culture
                if ($pathinfo === '/annonces-culture') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::cultureAction',  '_route' => 'fsp_culture',);
                }

                // fsp_plan
                if ($pathinfo === '/annonces-plan') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::planAction',  '_route' => 'fsp_plan',);
                }

            }

        }

        // fsp_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::connexionAction',  '_route' => 'fsp_connexion',);
        }

        // fsp_validerconnexion
        if ($pathinfo === '/validerconnexion') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validerconnexionAction',  '_route' => 'fsp_validerconnexion',);
        }

        // fsp_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::deconnexionAction',  '_route' => 'fsp_deconnexion',);
        }

        // fsp_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::inscriptionAction',  '_route' => 'fsp_inscription',);
        }

        // fsp_validerinscription
        if ($pathinfo === '/validerinscription') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validerinscriptionAction',  '_route' => 'fsp_validerinscription',);
        }

        // fsp_compte
        if ($pathinfo === '/mon-compte') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::compteAction',  '_route' => 'fsp_compte',);
        }

        // fsp_ajouter
        if ($pathinfo === '/ajouter-annonce') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::ajouterAnnonceAction',  '_route' => 'fsp_ajouter',);
        }

        // fsp_modifier
        if ($pathinfo === '/modifier-annonce') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::modifierAnnonceAction',  '_route' => 'fsp_modifier',);
        }

        // fsp_supprimer
        if ($pathinfo === '/supprimer-annonce') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::supprimerAnnonceAction',  '_route' => 'fsp_supprimer',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
