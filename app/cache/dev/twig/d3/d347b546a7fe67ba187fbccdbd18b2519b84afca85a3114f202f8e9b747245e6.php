<?php

/* FSPBundle:Theme:logement.html.twig */
class __TwigTemplate_94f33acf38a0889b6dfe7a11bc94b64c833d5d66668cae744ef40a8f4b522483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:Theme:logement.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fc48f6fa23832312090c1a028db935a9b9d9d9a0cffd8b5e71b4ae5b9ec3d34 = $this->env->getExtension("native_profiler");
        $__internal_7fc48f6fa23832312090c1a028db935a9b9d9d9a0cffd8b5e71b4ae5b9ec3d34->enter($__internal_7fc48f6fa23832312090c1a028db935a9b9d9d9a0cffd8b5e71b4ae5b9ec3d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:logement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc48f6fa23832312090c1a028db935a9b9d9d9a0cffd8b5e71b4ae5b9ec3d34->leave($__internal_7fc48f6fa23832312090c1a028db935a9b9d9d9a0cffd8b5e71b4ae5b9ec3d34_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_31d00ac958aa7febec31fd10917eef8747c10ccd9508a1616d84ffefaaf4d27f = $this->env->getExtension("native_profiler");
        $__internal_31d00ac958aa7febec31fd10917eef8747c10ccd9508a1616d84ffefaaf4d27f->enter($__internal_31d00ac958aa7febec31fd10917eef8747c10ccd9508a1616d84ffefaaf4d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"AnnoncesTheme\">
     <p>Annonces - Logement</p>
    </div>
   </div>
  </div>
";
        
        $__internal_31d00ac958aa7febec31fd10917eef8747c10ccd9508a1616d84ffefaaf4d27f->leave($__internal_31d00ac958aa7febec31fd10917eef8747c10ccd9508a1616d84ffefaaf4d27f_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:logement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="AnnoncesTheme">*/
/*      <p>Annonces - Logement</p>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
