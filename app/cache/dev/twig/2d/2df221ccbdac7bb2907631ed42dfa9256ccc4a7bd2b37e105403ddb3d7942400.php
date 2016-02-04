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
        $__internal_d461780c1513dd066bcc38f1fc203811db6626ea150bbcc1dceb0e00593448a3 = $this->env->getExtension("native_profiler");
        $__internal_d461780c1513dd066bcc38f1fc203811db6626ea150bbcc1dceb0e00593448a3->enter($__internal_d461780c1513dd066bcc38f1fc203811db6626ea150bbcc1dceb0e00593448a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d461780c1513dd066bcc38f1fc203811db6626ea150bbcc1dceb0e00593448a3->leave($__internal_d461780c1513dd066bcc38f1fc203811db6626ea150bbcc1dceb0e00593448a3_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_f2087f1df801ee47defa00e5f30931dc89b977b921a8ac1a21518e10eb4c1e2a = $this->env->getExtension("native_profiler");
        $__internal_f2087f1df801ee47defa00e5f30931dc89b977b921a8ac1a21518e10eb4c1e2a->enter($__internal_f2087f1df801ee47defa00e5f30931dc89b977b921a8ac1a21518e10eb4c1e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <p>Ajouter une annonce</p>
    </div>
   </div>
  </div>
";
        
        $__internal_f2087f1df801ee47defa00e5f30931dc89b977b921a8ac1a21518e10eb4c1e2a->leave($__internal_f2087f1df801ee47defa00e5f30931dc89b977b921a8ac1a21518e10eb4c1e2a_prof);

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
