<?php

/* FSPBundle::accueil.html.twig */
class __TwigTemplate_82090e632a465ab82bf44fcae20f59bdc0aa8d2c3c05b9e8084558b89fdd89a3 extends Twig_Template
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
        $__internal_1a8b51e592ffe4eb12d693b565577cf330f17c57ebac22927d4df6f01d0fe8dc = $this->env->getExtension("native_profiler");
        $__internal_1a8b51e592ffe4eb12d693b565577cf330f17c57ebac22927d4df6f01d0fe8dc->enter($__internal_1a8b51e592ffe4eb12d693b565577cf330f17c57ebac22927d4df6f01d0fe8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a8b51e592ffe4eb12d693b565577cf330f17c57ebac22927d4df6f01d0fe8dc->leave($__internal_1a8b51e592ffe4eb12d693b565577cf330f17c57ebac22927d4df6f01d0fe8dc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_715de41fd843e1f437ff100f43c3d8a2c0167064d412c20f8cce71aaaf2d7f6b = $this->env->getExtension("native_profiler");
        $__internal_715de41fd843e1f437ff100f43c3d8a2c0167064d412c20f8cce71aaaf2d7f6b->enter($__internal_715de41fd843e1f437ff100f43c3d8a2c0167064d412c20f8cce71aaaf2d7f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 15
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_715de41fd843e1f437ff100f43c3d8a2c0167064d412c20f8cce71aaaf2d7f6b->leave($__internal_715de41fd843e1f437ff100f43c3d8a2c0167064d412c20f8cce71aaaf2d7f6b_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_1e9da494d1df2b0dc70cdc60278227052f3f9d26bba87946a7c48eef07cc5996 = $this->env->getExtension("native_profiler");
        $__internal_1e9da494d1df2b0dc70cdc60278227052f3f9d26bba87946a7c48eef07cc5996->enter($__internal_1e9da494d1df2b0dc70cdc60278227052f3f9d26bba87946a7c48eef07cc5996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
        
        $__internal_1e9da494d1df2b0dc70cdc60278227052f3f9d26bba87946a7c48eef07cc5996->leave($__internal_1e9da494d1df2b0dc70cdc60278227052f3f9d26bba87946a7c48eef07cc5996_prof);

    }

    // line 15
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_0c23ea13772d5a01f1d4f78e3385751afb6b72a4b29c921ffcfde86aeaa33506 = $this->env->getExtension("native_profiler");
        $__internal_0c23ea13772d5a01f1d4f78e3385751afb6b72a4b29c921ffcfde86aeaa33506->enter($__internal_0c23ea13772d5a01f1d4f78e3385751afb6b72a4b29c921ffcfde86aeaa33506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        
        $__internal_0c23ea13772d5a01f1d4f78e3385751afb6b72a4b29c921ffcfde86aeaa33506->leave($__internal_0c23ea13772d5a01f1d4f78e3385751afb6b72a4b29c921ffcfde86aeaa33506_prof);

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
        return array (  89 => 16,  83 => 15,  72 => 11,  65 => 7,  60 => 5,  57 => 4,  51 => 3,  44 => 15,  42 => 3,  36 => 2,  11 => 1,);
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
