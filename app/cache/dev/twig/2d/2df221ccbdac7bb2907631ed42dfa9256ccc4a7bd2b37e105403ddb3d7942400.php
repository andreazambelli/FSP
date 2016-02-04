<?php

/* FSPBundle:User:ajouter.html.twig */
class __TwigTemplate_14b4ec88307aed1ef7dd965591947d55859abe25d81d4fb1ce4df5e6761da986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:ajouter.html.twig", 1);
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
        $__internal_5103ac0bce5041bab020f753c34d9f4a0c4af87c908a6e9ff9acc8038ff40b35 = $this->env->getExtension("native_profiler");
        $__internal_5103ac0bce5041bab020f753c34d9f4a0c4af87c908a6e9ff9acc8038ff40b35->enter($__internal_5103ac0bce5041bab020f753c34d9f4a0c4af87c908a6e9ff9acc8038ff40b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5103ac0bce5041bab020f753c34d9f4a0c4af87c908a6e9ff9acc8038ff40b35->leave($__internal_5103ac0bce5041bab020f753c34d9f4a0c4af87c908a6e9ff9acc8038ff40b35_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_531e8f9d8d92bb118a752a304be0525070e11d70be8e2d915a94b59c7a912bba = $this->env->getExtension("native_profiler");
        $__internal_531e8f9d8d92bb118a752a304be0525070e11d70be8e2d915a94b59c7a912bba->enter($__internal_531e8f9d8d92bb118a752a304be0525070e11d70be8e2d915a94b59c7a912bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <p>Ajouter une annonce</p>
    </div>
   </div>
  </div>
";
        
        $__internal_531e8f9d8d92bb118a752a304be0525070e11d70be8e2d915a94b59c7a912bba->leave($__internal_531e8f9d8d92bb118a752a304be0525070e11d70be8e2d915a94b59c7a912bba_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:ajouter.html.twig";
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
/*     <div id="gererAnnonces">*/
/*      <p>Ajouter une annonce</p>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
