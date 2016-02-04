<?php

/* FSPBundle:Theme:culture.html.twig */
class __TwigTemplate_eec553ae1cd7d5a1d787af7f10e29de9ca6de2c6af89d5724e94994017301af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:Theme:culture.html.twig", 1);
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
        $__internal_6baf71479a8c2aa72ed75a02a1e45dd094367758a9ba2e5b2607e7be2794ce7e = $this->env->getExtension("native_profiler");
        $__internal_6baf71479a8c2aa72ed75a02a1e45dd094367758a9ba2e5b2607e7be2794ce7e->enter($__internal_6baf71479a8c2aa72ed75a02a1e45dd094367758a9ba2e5b2607e7be2794ce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:culture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6baf71479a8c2aa72ed75a02a1e45dd094367758a9ba2e5b2607e7be2794ce7e->leave($__internal_6baf71479a8c2aa72ed75a02a1e45dd094367758a9ba2e5b2607e7be2794ce7e_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_b8489118987214b0502aaadd826c916dd0404d46cdbb60298e0a33c81e50cc6a = $this->env->getExtension("native_profiler");
        $__internal_b8489118987214b0502aaadd826c916dd0404d46cdbb60298e0a33c81e50cc6a->enter($__internal_b8489118987214b0502aaadd826c916dd0404d46cdbb60298e0a33c81e50cc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id =\"AnnoncesTheme\">
     <p>Annonces - Culture</p>
    </div>
   </div>
  </div>
";
        
        $__internal_b8489118987214b0502aaadd826c916dd0404d46cdbb60298e0a33c81e50cc6a->leave($__internal_b8489118987214b0502aaadd826c916dd0404d46cdbb60298e0a33c81e50cc6a_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:culture.html.twig";
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
/*     <div id ="AnnoncesTheme">*/
/*      <p>Annonces - Culture</p>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
