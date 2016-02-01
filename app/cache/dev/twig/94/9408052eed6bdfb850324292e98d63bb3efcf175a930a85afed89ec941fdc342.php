<?php

/* base.html.twig */
class __TwigTemplate_d8ab9120af9a2d33a46ed842197be7536fc5d26cbff00c9ad3eb3140568c5c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c84cce98d373cae04dab4b57358b4eba725a645276d388f85153643217ed7141 = $this->env->getExtension("native_profiler");
        $__internal_c84cce98d373cae04dab4b57358b4eba725a645276d388f85153643217ed7141->enter($__internal_c84cce98d373cae04dab4b57358b4eba725a645276d388f85153643217ed7141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c84cce98d373cae04dab4b57358b4eba725a645276d388f85153643217ed7141->leave($__internal_c84cce98d373cae04dab4b57358b4eba725a645276d388f85153643217ed7141_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f0bef35a15425b0521727495f47c031ed173546955d0d87d34d44eaab1f2330 = $this->env->getExtension("native_profiler");
        $__internal_3f0bef35a15425b0521727495f47c031ed173546955d0d87d34d44eaab1f2330->enter($__internal_3f0bef35a15425b0521727495f47c031ed173546955d0d87d34d44eaab1f2330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3f0bef35a15425b0521727495f47c031ed173546955d0d87d34d44eaab1f2330->leave($__internal_3f0bef35a15425b0521727495f47c031ed173546955d0d87d34d44eaab1f2330_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae83da179ffc4f05582db3786fca231112e712a7d1f9f5cb5d0d3642d2ac27bd = $this->env->getExtension("native_profiler");
        $__internal_ae83da179ffc4f05582db3786fca231112e712a7d1f9f5cb5d0d3642d2ac27bd->enter($__internal_ae83da179ffc4f05582db3786fca231112e712a7d1f9f5cb5d0d3642d2ac27bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ae83da179ffc4f05582db3786fca231112e712a7d1f9f5cb5d0d3642d2ac27bd->leave($__internal_ae83da179ffc4f05582db3786fca231112e712a7d1f9f5cb5d0d3642d2ac27bd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_066884058f9da2139d34c97ae17be6b90330367dc6bce432135790b7c1780d4c = $this->env->getExtension("native_profiler");
        $__internal_066884058f9da2139d34c97ae17be6b90330367dc6bce432135790b7c1780d4c->enter($__internal_066884058f9da2139d34c97ae17be6b90330367dc6bce432135790b7c1780d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_066884058f9da2139d34c97ae17be6b90330367dc6bce432135790b7c1780d4c->leave($__internal_066884058f9da2139d34c97ae17be6b90330367dc6bce432135790b7c1780d4c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e332c9c0f7a5523c09dabdd9a7abc78ac353f806fb6f66574fb04da8bf963b6 = $this->env->getExtension("native_profiler");
        $__internal_7e332c9c0f7a5523c09dabdd9a7abc78ac353f806fb6f66574fb04da8bf963b6->enter($__internal_7e332c9c0f7a5523c09dabdd9a7abc78ac353f806fb6f66574fb04da8bf963b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e332c9c0f7a5523c09dabdd9a7abc78ac353f806fb6f66574fb04da8bf963b6->leave($__internal_7e332c9c0f7a5523c09dabdd9a7abc78ac353f806fb6f66574fb04da8bf963b6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
