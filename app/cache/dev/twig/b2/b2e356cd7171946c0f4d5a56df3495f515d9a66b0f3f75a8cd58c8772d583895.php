<?php

/* FSPBundle:User:supprimer.html.twig */
class __TwigTemplate_38e0d5935f5391f3a81335046a070adaa40e841648a20221d238df25a78ffcb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:supprimer.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle:User:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e04bba1c00fbc9044e345b6a8aadcc6ed85c8a37fb9368aee12ec5ba6ced459 = $this->env->getExtension("native_profiler");
        $__internal_4e04bba1c00fbc9044e345b6a8aadcc6ed85c8a37fb9368aee12ec5ba6ced459->enter($__internal_4e04bba1c00fbc9044e345b6a8aadcc6ed85c8a37fb9368aee12ec5ba6ced459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e04bba1c00fbc9044e345b6a8aadcc6ed85c8a37fb9368aee12ec5ba6ced459->leave($__internal_4e04bba1c00fbc9044e345b6a8aadcc6ed85c8a37fb9368aee12ec5ba6ced459_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_e0684d2ed43178c9d35dbe8fdd6349938c8ce3ddc368cdc471a4b7b3abb5b7ea = $this->env->getExtension("native_profiler");
        $__internal_e0684d2ed43178c9d35dbe8fdd6349938c8ce3ddc368cdc471a4b7b3abb5b7ea->enter($__internal_e0684d2ed43178c9d35dbe8fdd6349938c8ce3ddc368cdc471a4b7b3abb5b7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <p>Supprimer une annonce</p>
    </div>
   </div>
  </div>
";
        
        $__internal_e0684d2ed43178c9d35dbe8fdd6349938c8ce3ddc368cdc471a4b7b3abb5b7ea->leave($__internal_e0684d2ed43178c9d35dbe8fdd6349938c8ce3ddc368cdc471a4b7b3abb5b7ea_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:supprimer.html.twig";
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
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*      <p>Supprimer une annonce</p>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
