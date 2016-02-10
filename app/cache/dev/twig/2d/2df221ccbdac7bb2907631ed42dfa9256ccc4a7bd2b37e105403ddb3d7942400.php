<?php

/* FSPBundle:User:ajouter.html.twig */
class __TwigTemplate_14b4ec88307aed1ef7dd965591947d55859abe25d81d4fb1ce4df5e6761da986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:ajouter.html.twig", 1);
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
        $__internal_699a60bfcfa7a2f47d915ad38a24ea740acbaeae7d0363060886c2c81f867943 = $this->env->getExtension("native_profiler");
        $__internal_699a60bfcfa7a2f47d915ad38a24ea740acbaeae7d0363060886c2c81f867943->enter($__internal_699a60bfcfa7a2f47d915ad38a24ea740acbaeae7d0363060886c2c81f867943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699a60bfcfa7a2f47d915ad38a24ea740acbaeae7d0363060886c2c81f867943->leave($__internal_699a60bfcfa7a2f47d915ad38a24ea740acbaeae7d0363060886c2c81f867943_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_147bcc08d02262de41309d9b9506bd2b29c72dccc8b10bc7b941861b140378c0 = $this->env->getExtension("native_profiler");
        $__internal_147bcc08d02262de41309d9b9506bd2b29c72dccc8b10bc7b941861b140378c0->enter($__internal_147bcc08d02262de41309d9b9506bd2b29c72dccc8b10bc7b941861b140378c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <p>Ajouter une annonce</p>
    </div>
   </div>
  </div>
";
        
        $__internal_147bcc08d02262de41309d9b9506bd2b29c72dccc8b10bc7b941861b140378c0->leave($__internal_147bcc08d02262de41309d9b9506bd2b29c72dccc8b10bc7b941861b140378c0_prof);

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
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
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
