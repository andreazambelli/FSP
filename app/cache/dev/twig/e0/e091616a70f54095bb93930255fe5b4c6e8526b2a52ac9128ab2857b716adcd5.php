<?php

/* FSPBundle:Theme:plan.html.twig */
class __TwigTemplate_696f912671f1d12cccfb0a553738ea06e6123960e69cd3ab97b739b20ed3fdb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:Theme:plan.html.twig", 1);
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
        $__internal_5953a2d63b9de5d26b4138da3b50253c11171bcd358f7805d0a0a80b7c165cb0 = $this->env->getExtension("native_profiler");
        $__internal_5953a2d63b9de5d26b4138da3b50253c11171bcd358f7805d0a0a80b7c165cb0->enter($__internal_5953a2d63b9de5d26b4138da3b50253c11171bcd358f7805d0a0a80b7c165cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:plan.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5953a2d63b9de5d26b4138da3b50253c11171bcd358f7805d0a0a80b7c165cb0->leave($__internal_5953a2d63b9de5d26b4138da3b50253c11171bcd358f7805d0a0a80b7c165cb0_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_7757bf5913b0284615f2246e9176fd7c7a4c7a58aadfa69d0c65b9789c364d63 = $this->env->getExtension("native_profiler");
        $__internal_7757bf5913b0284615f2246e9176fd7c7a4c7a58aadfa69d0c65b9789c364d63->enter($__internal_7757bf5913b0284615f2246e9176fd7c7a4c7a58aadfa69d0c65b9789c364d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
     <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44794.191209621626!2d4.388780477748646!3d45.43681932601929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1453996188061\" width=\"880\" height=\"500\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
   </div>
  </div>
";
        
        $__internal_7757bf5913b0284615f2246e9176fd7c7a4c7a58aadfa69d0c65b9789c364d63->leave($__internal_7757bf5913b0284615f2246e9176fd7c7a4c7a58aadfa69d0c65b9789c364d63_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:plan.html.twig";
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
/*      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44794.191209621626!2d4.388780477748646!3d45.43681932601929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1453996188061" width="880" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
