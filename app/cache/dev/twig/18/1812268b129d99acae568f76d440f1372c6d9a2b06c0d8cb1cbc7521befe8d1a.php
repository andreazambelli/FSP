<?php

/* FSPBundle::layout.html.twig */
class __TwigTemplate_c949815def2fdc19a6db8c6ad7434f75875a221f26f137a95c85e933a7d892ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blocGauche' => array($this, 'block_blocGauche'),
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47fc8b6effe7ec1a931c29d75f21fb49e0c7bb0ddbc8d2339379884298026e06 = $this->env->getExtension("native_profiler");
        $__internal_47fc8b6effe7ec1a931c29d75f21fb49e0c7bb0ddbc8d2339379884298026e06->enter($__internal_47fc8b6effe7ec1a931c29d75f21fb49e0c7bb0ddbc8d2339379884298026e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<head>
   <title>FSP - Foreign Student Platform</title>
   <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
   <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
</head>

<body>
  <div id=\"page\">
    <div id=\"entete\">
     <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fsp_accueil");
        echo "\"><img src=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/FSP.png"), "html", null, true);
        echo "\" id=\"logoFSP\" alt=\"FSP - Foreign Student Platform\" title=\"FSP - Foreign Student Platform\"/></a>
     <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/france.png"), "html", null, true);
        echo "\" id=\"drapeauFR\" alt=\"Français\" title=\"Français\" />
     <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/GB.png"), "html", null, true);
        echo "\" id=\"drapeauGB\" alt=\"Anglais\" title=\"Anglais\" />
     <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/chine.png"), "html", null, true);
        echo "\" id=\"drapeauCH\" alt=\"Chinois\" title=\"Chinois\" />
     </div>
     <div id=\"menuTheme\">
      <ul id=\"menuListAccueil\">
      <li>
      <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/maison.png"), "html", null, true);
        echo "\" id=\"logement\" title=\"Logement\"/>
      <a title=\"Logement\">Logement</a>
      </li>
      <li>
      <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/cours.png"), "html", null, true);
        echo "\" id=\"cours\" title=\"Cours\"/>
      <a title=\"Cours\">Cours</a>
      </li>
      <li>
      <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/evenement.png"), "html", null, true);
        echo "\" id=\"evenement\" title=\"Evénement\"/>
      <a title=\"Evenement\">Evénement</a>
      </li>
      <li>
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/culture.png"), "html", null, true);
        echo "\" id=\"culture\" title=\"Culture\"/>
      <a title=\"Culture\">Culture</a>
      </li>
      <li>
      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/plan.png"), "html", null, true);
        echo "\" id=\"plan\" title=\"Plan\"/>
      <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fsp_plan");
        echo "\" class=\"plan\" title=\"Plan\">Plan</a>
      </li>
      </ul>
     </div>
       ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    <div id=\"footer\">
     <div id=\"séparation\"></div>
     <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/iram.png"), "html", null, true);
        echo "\" id=\"logoIRAM\" alt=\"IRAM\" title=\"IRAM\" />
     <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/UJM.png"), "html", null, true);
        echo "\" id=\"logoUJM\" alt=\"UJM\" title=\"UJM\" />
     <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/cilec.png"), "html", null, true);
        echo "\" id=\"logoCILEC\" alt=\"CILEC\" title=\"CILEC\" />
     <div id=\"mention\">
     <p> &copy 2016 IRAM - Tous Droits Réservés - Mentions Légales
     </p>
     </div>
    </div>
  </div>
</body>
</html>

";
        
        $__internal_47fc8b6effe7ec1a931c29d75f21fb49e0c7bb0ddbc8d2339379884298026e06->leave($__internal_47fc8b6effe7ec1a931c29d75f21fb49e0c7bb0ddbc8d2339379884298026e06_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e0b1fce23f67549bd9bdcf85faaebe70913fb08ddb2c71fc8e53042f79b976a = $this->env->getExtension("native_profiler");
        $__internal_4e0b1fce23f67549bd9bdcf85faaebe70913fb08ddb2c71fc8e53042f79b976a->enter($__internal_4e0b1fce23f67549bd9bdcf85faaebe70913fb08ddb2c71fc8e53042f79b976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "          ";
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 44
        echo "          ";
        $this->displayBlock('blocCentre', $context, $blocks);
        // line 46
        echo "       ";
        
        $__internal_4e0b1fce23f67549bd9bdcf85faaebe70913fb08ddb2c71fc8e53042f79b976a->leave($__internal_4e0b1fce23f67549bd9bdcf85faaebe70913fb08ddb2c71fc8e53042f79b976a_prof);

    }

    // line 42
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_341f7a9260ca8c66974ec88b40d669c0d925886396886d7d7fe7e7e3118ee1a8 = $this->env->getExtension("native_profiler");
        $__internal_341f7a9260ca8c66974ec88b40d669c0d925886396886d7d7fe7e7e3118ee1a8->enter($__internal_341f7a9260ca8c66974ec88b40d669c0d925886396886d7d7fe7e7e3118ee1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

        // line 43
        echo "          ";
        
        $__internal_341f7a9260ca8c66974ec88b40d669c0d925886396886d7d7fe7e7e3118ee1a8->leave($__internal_341f7a9260ca8c66974ec88b40d669c0d925886396886d7d7fe7e7e3118ee1a8_prof);

    }

    // line 44
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_a04973ce57e71b81ccedd2ba44894fc4364752e1ac0f285c6904676775f6174e = $this->env->getExtension("native_profiler");
        $__internal_a04973ce57e71b81ccedd2ba44894fc4364752e1ac0f285c6904676775f6174e->enter($__internal_a04973ce57e71b81ccedd2ba44894fc4364752e1ac0f285c6904676775f6174e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 45
        echo "          ";
        
        $__internal_a04973ce57e71b81ccedd2ba44894fc4364752e1ac0f285c6904676775f6174e->leave($__internal_a04973ce57e71b81ccedd2ba44894fc4364752e1ac0f285c6904676775f6174e_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 45,  166 => 44,  159 => 43,  153 => 42,  146 => 46,  143 => 44,  140 => 42,  134 => 41,  116 => 51,  112 => 50,  108 => 49,  104 => 47,  102 => 41,  95 => 37,  91 => 36,  84 => 32,  77 => 28,  70 => 24,  63 => 20,  55 => 15,  51 => 14,  47 => 13,  41 => 12,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <head>*/
/*    <title>FSP - Foreign Student Platform</title>*/
/*    <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*    <link href="{{ asset('bundles/fsp/styles/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/* </head>*/
/* */
/* <body>*/
/*   <div id="page">*/
/*     <div id="entete">*/
/*      <a href="{{path('fsp_accueil')}}"><img src=" {{ asset('bundles/fsp/images/FSP.png') }}" id="logoFSP" alt="FSP - Foreign Student Platform" title="FSP - Foreign Student Platform"/></a>*/
/*      <img src="{{ asset('bundles/fsp/images/france.png')}}" id="drapeauFR" alt="Français" title="Français" />*/
/*      <img src="{{ asset('bundles/fsp/images/GB.png')}}" id="drapeauGB" alt="Anglais" title="Anglais" />*/
/*      <img src="{{ asset('bundles/fsp/images/chine.png')}}" id="drapeauCH" alt="Chinois" title="Chinois" />*/
/*      </div>*/
/*      <div id="menuTheme">*/
/*       <ul id="menuListAccueil">*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/maison.png')}}" id="logement" title="Logement"/>*/
/*       <a title="Logement">Logement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/cours.png')}}" id="cours" title="Cours"/>*/
/*       <a title="Cours">Cours</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/evenement.png')}}" id="evenement" title="Evénement"/>*/
/*       <a title="Evenement">Evénement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/culture.png')}}" id="culture" title="Culture"/>*/
/*       <a title="Culture">Culture</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/plan.png')}}" id="plan" title="Plan"/>*/
/*       <a href="{{path('fsp_plan')}}" class="plan" title="Plan">Plan</a>*/
/*       </li>*/
/*       </ul>*/
/*      </div>*/
/*        {% block body%}*/
/*           {% block blocGauche %}*/
/*           {% endblock %}*/
/*           {% block blocCentre %}*/
/*           {% endblock %}*/
/*        {% endblock %}*/
/*     <div id="footer">*/
/*      <div id="séparation"></div>*/
/*      <img src="{{ asset('bundles/fsp/images/iram.png')}}" id="logoIRAM" alt="IRAM" title="IRAM" />*/
/*      <img src="{{ asset('bundles/fsp/images/UJM.png')}}" id="logoUJM" alt="UJM" title="UJM" />*/
/*      <img src="{{ asset('bundles/fsp/images/cilec.png')}}" id="logoCILEC" alt="CILEC" title="CILEC" />*/
/*      <div id="mention">*/
/*      <p> &copy 2016 IRAM - Tous Droits Réservés - Mentions Légales*/
/*      </p>*/
/*      </div>*/
/*     </div>*/
/*   </div>*/
/* </body>*/
/* </html>*/
/* */
/* */
