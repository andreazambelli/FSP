<?php

/* FSPBundle:User:modifier.html.twig */
class __TwigTemplate_c0c99436e18017604298f2c63e444928d884cc3f7bb8d353f0f9b9191a147bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:modifier.html.twig", 1);
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
        $__internal_9aec04c453a4c9a73ea95875b1836d168f1cafada24e3c3d59361d9877354ca7 = $this->env->getExtension("native_profiler");
        $__internal_9aec04c453a4c9a73ea95875b1836d168f1cafada24e3c3d59361d9877354ca7->enter($__internal_9aec04c453a4c9a73ea95875b1836d168f1cafada24e3c3d59361d9877354ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aec04c453a4c9a73ea95875b1836d168f1cafada24e3c3d59361d9877354ca7->leave($__internal_9aec04c453a4c9a73ea95875b1836d168f1cafada24e3c3d59361d9877354ca7_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_ab03d8e5a3640ecc333e903047ca390a4f5341ad701d60cf72e917095fb5b5c0 = $this->env->getExtension("native_profiler");
        $__internal_ab03d8e5a3640ecc333e903047ca390a4f5341ad701d60cf72e917095fb5b5c0->enter($__internal_ab03d8e5a3640ecc333e903047ca390a4f5341ad701d60cf72e917095fb5b5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <p>Modifier une annonce</p>
    </div>
   </div>
  </div>
";
        
        $__internal_ab03d8e5a3640ecc333e903047ca390a4f5341ad701d60cf72e917095fb5b5c0->leave($__internal_ab03d8e5a3640ecc333e903047ca390a4f5341ad701d60cf72e917095fb5b5c0_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:modifier.html.twig";
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
/*      <p>Modifier une annonce</p>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
