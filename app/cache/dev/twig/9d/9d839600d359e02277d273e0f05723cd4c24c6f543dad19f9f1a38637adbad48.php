<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_105384497a1b2f0d511da369dfc23fc93d9584c759d04f994c6d0fb97866d295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ff03619a5e024f6c4a387c7ddfbfaea86f2b1de64ee72d8c686ef74c7844d03 = $this->env->getExtension("native_profiler");
        $__internal_5ff03619a5e024f6c4a387c7ddfbfaea86f2b1de64ee72d8c686ef74c7844d03->enter($__internal_5ff03619a5e024f6c4a387c7ddfbfaea86f2b1de64ee72d8c686ef74c7844d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5ff03619a5e024f6c4a387c7ddfbfaea86f2b1de64ee72d8c686ef74c7844d03->leave($__internal_5ff03619a5e024f6c4a387c7ddfbfaea86f2b1de64ee72d8c686ef74c7844d03_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
