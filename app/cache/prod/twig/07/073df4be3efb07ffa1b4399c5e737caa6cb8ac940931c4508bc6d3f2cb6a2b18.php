<?php

/* FSPBundle::accueil.html.twig */
class __TwigTemplate_727ea13d646eb0c8c3c8115cce9015f7fbb639eaa3b1812916e262be68eee074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::layout.html.twig", "FSPBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blocGauche' => array($this, 'block_blocGauche'),
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 15
        $this->displayBlock('blocCentre', $context, $blocks);
    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"blocGauche\">
    <div><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/user.png"), "html", null, true);
        echo "\" id=\"userAccueil\"</img></div>
    <div id=\"connexion\">
      <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fsp_connexion");
        echo "\" alt=\"Connexion\" title=\"Connexion\">Connexion</a>
    </div>
    <div id=\"barreV\"></div>
    <div id=\"inscription\">
      <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fsp_inscription");
        echo "\" alt=\"S'inscrire\" title=\"S'inscrire\">S'inscrire</a>
    </div>
  </div>
";
    }

    // line 15
    public function block_blocCentre($context, array $blocks = array())
    {
        // line 16
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
    <p>
       Bienvenue sur la site de la plateforme d'annonces pour étudiants étrangers arrivant en France.</br>
Pour accéder aux différents thèmes, il vous faut être connecté: grâce à cette inscription, vous pourrez être au courant des différents cours, évènements de la ville mais aussi des annonces pour les logements.</br>
Vous pourrez également contribuer à répondre à ses annonces par des commentaires.</br>
Alors, inscrivez-vous et bonne continuation sur le site !
    </p>
   </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "FSPBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  65 => 15,  57 => 11,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  35 => 15,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* {% block blocGauche %}*/
/*   <div id="blocGauche">*/
/*     <div><img src="{{asset('bundles/fsp/images/user.png')}}" id="userAccueil"</img></div>*/
/*     <div id="connexion">*/
/*       <a href="{{path('fsp_connexion')}}" alt="Connexion" title="Connexion">Connexion</a>*/
/*     </div>*/
/*     <div id="barreV"></div>*/
/*     <div id="inscription">*/
/*       <a href="{{path('fsp_inscription')}}" alt="S'inscrire" title="S'inscrire">S'inscrire</a>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*     <p>*/
/*        Bienvenue sur la site de la plateforme d'annonces pour étudiants étrangers arrivant en France.</br>*/
/* Pour accéder aux différents thèmes, il vous faut être connecté: grâce à cette inscription, vous pourrez être au courant des différents cours, évènements de la ville mais aussi des annonces pour les logements.</br>*/
/* Vous pourrez également contribuer à répondre à ses annonces par des commentaires.</br>*/
/* Alors, inscrivez-vous et bonne continuation sur le site !*/
/*     </p>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
