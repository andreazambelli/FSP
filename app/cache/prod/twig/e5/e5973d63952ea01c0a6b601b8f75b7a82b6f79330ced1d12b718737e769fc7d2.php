<?php

/* FSPBundle:User:layout.html.twig */
class __TwigTemplate_c26867229bcc423148b942e6340329c50ef3bc7383614b47c7c252364968444a extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fsp_accueil_connecte");
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
      <ul id=\"menuList\">
      <li>
      <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/maison.png"), "html", null, true);
        echo "\" id=\"logement\" title=\"Logement\"/>
      <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fsp_logement");
        echo "\" title=\"Logement\">Logement</a>
      </li>
      <li>
      <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/cours.png"), "html", null, true);
        echo "\" id=\"cours\" title=\"Cours\"/>
      <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fsp_cours");
        echo "\" title=\"Cours\">Cours</a>
      </li>
      <li>
      <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/evenement.png"), "html", null, true);
        echo "\" id=\"evenement\" title=\"Evénement\"/>
      <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fsp_evenement");
        echo "\" title=\"Evenement\">Evénement</a>
      </li>
      <li>
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/notredame.png"), "html", null, true);
        echo "\" id=\"culture\" title=\"Culture\"/>
      <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fsp_culture");
        echo "\" title=\"Culture\">Culture</a>
      </li>
      <li>
      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/planbis.png"), "html", null, true);
        echo "\" id=\"plan\" title=\"Plan\"/>
      <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fsp_plan");
        echo "\" title=\"Plan\">Plan</a>
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
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "          ";
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 44
        echo "          ";
        $this->displayBlock('blocCentre', $context, $blocks);
        // line 46
        echo "       ";
    }

    // line 42
    public function block_blocGauche($context, array $blocks = array())
    {
        // line 43
        echo "          ";
    }

    // line 44
    public function block_blocCentre($context, array $blocks = array())
    {
        // line 45
        echo "          ";
    }

    public function getTemplateName()
    {
        return "FSPBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 45,  160 => 44,  156 => 43,  153 => 42,  149 => 46,  146 => 44,  143 => 42,  140 => 41,  125 => 51,  121 => 50,  117 => 49,  113 => 47,  111 => 41,  104 => 37,  100 => 36,  94 => 33,  90 => 32,  84 => 29,  80 => 28,  74 => 25,  70 => 24,  64 => 21,  60 => 20,  52 => 15,  48 => 14,  44 => 13,  38 => 12,  28 => 5,  22 => 1,);
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
/*      <a href="{{path('fsp_accueil_connecte')}}"><img src=" {{ asset('bundles/fsp/images/FSP.png') }}" id="logoFSP" alt="FSP - Foreign Student Platform" title="FSP - Foreign Student Platform"/></a>*/
/*      <img src="{{ asset('bundles/fsp/images/france.png')}}" id="drapeauFR" alt="Français" title="Français" />*/
/*      <img src="{{ asset('bundles/fsp/images/GB.png')}}" id="drapeauGB" alt="Anglais" title="Anglais" />*/
/*      <img src="{{ asset('bundles/fsp/images/chine.png')}}" id="drapeauCH" alt="Chinois" title="Chinois" />*/
/*      </div>*/
/*      <div id="menuTheme">*/
/*       <ul id="menuList">*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/maison.png')}}" id="logement" title="Logement"/>*/
/*       <a href="{{path('fsp_logement')}}" title="Logement">Logement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/cours.png')}}" id="cours" title="Cours"/>*/
/*       <a href="{{path('fsp_cours')}}" title="Cours">Cours</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/evenement.png')}}" id="evenement" title="Evénement"/>*/
/*       <a href="{{path('fsp_evenement')}}" title="Evenement">Evénement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/notredame.png')}}" id="culture" title="Culture"/>*/
/*       <a href="{{path('fsp_culture')}}" title="Culture">Culture</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/planbis.png')}}" id="plan" title="Plan"/>*/
/*       <a href="{{path('fsp_plan')}}" title="Plan">Plan</a>*/
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
