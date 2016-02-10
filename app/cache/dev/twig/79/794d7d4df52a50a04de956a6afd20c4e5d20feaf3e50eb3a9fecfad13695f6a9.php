<?php

/* FSPBundle:User:modifier.html.twig */
class __TwigTemplate_c0c99436e18017604298f2c63e444928d884cc3f7bb8d353f0f9b9191a147bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:modifier.html.twig", 1);
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
        $__internal_d5f5b77f54157eb7dc4ab31a321b7ae8e2f39a46dab93d8226f138b757979541 = $this->env->getExtension("native_profiler");
        $__internal_d5f5b77f54157eb7dc4ab31a321b7ae8e2f39a46dab93d8226f138b757979541->enter($__internal_d5f5b77f54157eb7dc4ab31a321b7ae8e2f39a46dab93d8226f138b757979541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f5b77f54157eb7dc4ab31a321b7ae8e2f39a46dab93d8226f138b757979541->leave($__internal_d5f5b77f54157eb7dc4ab31a321b7ae8e2f39a46dab93d8226f138b757979541_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_e607b3bb4582ff4c38aefa51ee2ac9755f432361fe7a8287b38804f0c70a1400 = $this->env->getExtension("native_profiler");
        $__internal_e607b3bb4582ff4c38aefa51ee2ac9755f432361fe7a8287b38804f0c70a1400->enter($__internal_e607b3bb4582ff4c38aefa51ee2ac9755f432361fe7a8287b38804f0c70a1400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <p>Modifier une annonce</p>
    </div>
   </div>
  </div>
";
        
        $__internal_e607b3bb4582ff4c38aefa51ee2ac9755f432361fe7a8287b38804f0c70a1400->leave($__internal_e607b3bb4582ff4c38aefa51ee2ac9755f432361fe7a8287b38804f0c70a1400_prof);

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
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
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
