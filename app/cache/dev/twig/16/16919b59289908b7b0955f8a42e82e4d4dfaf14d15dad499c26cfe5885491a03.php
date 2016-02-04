<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a6e62178e572702c60d7f282a7bc62c9a979983a4a7d412e52c62c6666397cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f3899045763d7349f2fb4dad2bf97ff562a3e2805e67277120cb36be2be7982 = $this->env->getExtension("native_profiler");
        $__internal_3f3899045763d7349f2fb4dad2bf97ff562a3e2805e67277120cb36be2be7982->enter($__internal_3f3899045763d7349f2fb4dad2bf97ff562a3e2805e67277120cb36be2be7982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3899045763d7349f2fb4dad2bf97ff562a3e2805e67277120cb36be2be7982->leave($__internal_3f3899045763d7349f2fb4dad2bf97ff562a3e2805e67277120cb36be2be7982_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e85dbff457431de8fe3f03092e9c8f88e22a11e5865229eca171a38d81825d4 = $this->env->getExtension("native_profiler");
        $__internal_3e85dbff457431de8fe3f03092e9c8f88e22a11e5865229eca171a38d81825d4->enter($__internal_3e85dbff457431de8fe3f03092e9c8f88e22a11e5865229eca171a38d81825d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e85dbff457431de8fe3f03092e9c8f88e22a11e5865229eca171a38d81825d4->leave($__internal_3e85dbff457431de8fe3f03092e9c8f88e22a11e5865229eca171a38d81825d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3668ed5b83639e39daeee0523c8a743d30bab022f3221b1aab2bdf90c87d023 = $this->env->getExtension("native_profiler");
        $__internal_e3668ed5b83639e39daeee0523c8a743d30bab022f3221b1aab2bdf90c87d023->enter($__internal_e3668ed5b83639e39daeee0523c8a743d30bab022f3221b1aab2bdf90c87d023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3668ed5b83639e39daeee0523c8a743d30bab022f3221b1aab2bdf90c87d023->leave($__internal_e3668ed5b83639e39daeee0523c8a743d30bab022f3221b1aab2bdf90c87d023_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_942907b43547de044fa3f4143ab635bfb974c47364c9def6a2c2ff1c68f40c2b = $this->env->getExtension("native_profiler");
        $__internal_942907b43547de044fa3f4143ab635bfb974c47364c9def6a2c2ff1c68f40c2b->enter($__internal_942907b43547de044fa3f4143ab635bfb974c47364c9def6a2c2ff1c68f40c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_942907b43547de044fa3f4143ab635bfb974c47364c9def6a2c2ff1c68f40c2b->leave($__internal_942907b43547de044fa3f4143ab635bfb974c47364c9def6a2c2ff1c68f40c2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
