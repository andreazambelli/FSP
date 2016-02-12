<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'fsp_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\HomeController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_accueil_connecte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil-connecte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_logement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::logementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces-logement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_cours' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::coursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces-cours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_evenement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::evenementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces-evenements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_culture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::cultureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces-culture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_plan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::planAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_validerconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validerconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validerconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_deconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_validerinscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validerinscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validerinscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::compteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mon-compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::ajouterAnnonceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter-annonce',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_modifier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::modifierAnnonceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifier-annonce',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fsp_supprimer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::supprimerAnnonceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer-annonce',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
