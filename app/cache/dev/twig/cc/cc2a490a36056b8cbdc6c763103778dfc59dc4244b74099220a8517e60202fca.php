<?php

/* FSPBundle:Theme:evenement.html.twig */
class __TwigTemplate_898fa2a1ff197d5717a7ad8f9cec1938c101fc3b0d52da702d1971451a4f0d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:Theme:evenement.html.twig", 1);
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
        $__internal_dbca34cdeff77709dcc9d94fa518fafa089affd9a43f26493836e401546c5d1c = $this->env->getExtension("native_profiler");
        $__internal_dbca34cdeff77709dcc9d94fa518fafa089affd9a43f26493836e401546c5d1c->enter($__internal_dbca34cdeff77709dcc9d94fa518fafa089affd9a43f26493836e401546c5d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:evenement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbca34cdeff77709dcc9d94fa518fafa089affd9a43f26493836e401546c5d1c->leave($__internal_dbca34cdeff77709dcc9d94fa518fafa089affd9a43f26493836e401546c5d1c_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_1b512e4ded818ce55e053e5991140a320587d4ae26ffc8e04b7d11479ff2294a = $this->env->getExtension("native_profiler");
        $__internal_1b512e4ded818ce55e053e5991140a320587d4ae26ffc8e04b7d11479ff2294a->enter($__internal_1b512e4ded818ce55e053e5991140a320587d4ae26ffc8e04b7d11479ff2294a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"AnnoncesThemeEvenement\">
     <p>Annonces - Evénement</p>
    </div>
   </div>
  </div>
";
        
        $__internal_1b512e4ded818ce55e053e5991140a320587d4ae26ffc8e04b7d11479ff2294a->leave($__internal_1b512e4ded818ce55e053e5991140a320587d4ae26ffc8e04b7d11479ff2294a_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:evenement.html.twig";
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
/*     <div id="AnnoncesThemeEvenement">*/
/*      <p>Annonces - Evénement</p>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
