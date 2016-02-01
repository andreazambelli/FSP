<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_356dc434f1b04f885bc56714a01f9a1c3d267a0d6f6388a41b9914ffc09c594e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ef09084942345aaf63bce009b339669acc6fbdd1f69ede9575e0f454d443acc = $this->env->getExtension("native_profiler");
        $__internal_8ef09084942345aaf63bce009b339669acc6fbdd1f69ede9575e0f454d443acc->enter($__internal_8ef09084942345aaf63bce009b339669acc6fbdd1f69ede9575e0f454d443acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef09084942345aaf63bce009b339669acc6fbdd1f69ede9575e0f454d443acc->leave($__internal_8ef09084942345aaf63bce009b339669acc6fbdd1f69ede9575e0f454d443acc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ec2bed9e9044b3e9f7fe50b2ca6b2c6a16db4f03dde9d164710cae2636568ce = $this->env->getExtension("native_profiler");
        $__internal_2ec2bed9e9044b3e9f7fe50b2ca6b2c6a16db4f03dde9d164710cae2636568ce->enter($__internal_2ec2bed9e9044b3e9f7fe50b2ca6b2c6a16db4f03dde9d164710cae2636568ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ec2bed9e9044b3e9f7fe50b2ca6b2c6a16db4f03dde9d164710cae2636568ce->leave($__internal_2ec2bed9e9044b3e9f7fe50b2ca6b2c6a16db4f03dde9d164710cae2636568ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c070a66879954f9514beb08a552c472be2a1a9d16aa4f3e63f4fd6ce434ec2a = $this->env->getExtension("native_profiler");
        $__internal_5c070a66879954f9514beb08a552c472be2a1a9d16aa4f3e63f4fd6ce434ec2a->enter($__internal_5c070a66879954f9514beb08a552c472be2a1a9d16aa4f3e63f4fd6ce434ec2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c070a66879954f9514beb08a552c472be2a1a9d16aa4f3e63f4fd6ce434ec2a->leave($__internal_5c070a66879954f9514beb08a552c472be2a1a9d16aa4f3e63f4fd6ce434ec2a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c83bc7212682345665ddb9b594323202572ab089c699e68244c59af2fe000977 = $this->env->getExtension("native_profiler");
        $__internal_c83bc7212682345665ddb9b594323202572ab089c699e68244c59af2fe000977->enter($__internal_c83bc7212682345665ddb9b594323202572ab089c699e68244c59af2fe000977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c83bc7212682345665ddb9b594323202572ab089c699e68244c59af2fe000977->leave($__internal_c83bc7212682345665ddb9b594323202572ab089c699e68244c59af2fe000977_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
