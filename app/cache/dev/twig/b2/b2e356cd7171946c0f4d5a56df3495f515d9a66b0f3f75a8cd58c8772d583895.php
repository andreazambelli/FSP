<?php

/* FSPBundle:User:supprimer.html.twig */
class __TwigTemplate_38e0d5935f5391f3a81335046a070adaa40e841648a20221d238df25a78ffcb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:supprimer.html.twig", 1);
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
        $__internal_fbbbbc7861de6c1caf338c7e36bc6f8174cad11373e87e444f58bd6fed48d6f0 = $this->env->getExtension("native_profiler");
        $__internal_fbbbbc7861de6c1caf338c7e36bc6f8174cad11373e87e444f58bd6fed48d6f0->enter($__internal_fbbbbc7861de6c1caf338c7e36bc6f8174cad11373e87e444f58bd6fed48d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbbbbc7861de6c1caf338c7e36bc6f8174cad11373e87e444f58bd6fed48d6f0->leave($__internal_fbbbbc7861de6c1caf338c7e36bc6f8174cad11373e87e444f58bd6fed48d6f0_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_010383b75fda01faad93c0c0bf099f6c3435fbcb60c45f79c81b8bfe81766401 = $this->env->getExtension("native_profiler");
        $__internal_010383b75fda01faad93c0c0bf099f6c3435fbcb60c45f79c81b8bfe81766401->enter($__internal_010383b75fda01faad93c0c0bf099f6c3435fbcb60c45f79c81b8bfe81766401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <p>Supprimer une annonce</p>
    </div>
   </div>
  </div>
";
        
        $__internal_010383b75fda01faad93c0c0bf099f6c3435fbcb60c45f79c81b8bfe81766401->leave($__internal_010383b75fda01faad93c0c0bf099f6c3435fbcb60c45f79c81b8bfe81766401_prof);

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
/* {% extends "FSPBundle::accueil.html.twig" %}*/
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
