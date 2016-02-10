<?php

/* FSPBundle:User:accueil.html.twig */
class __TwigTemplate_2b1844afaeaf2a34db4ad11637702c4b013fb79b7b124f1a63d48aa9b9827336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:layout.html.twig", "FSPBundle:User:accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blocGauche' => array($this, 'block_blocGauche'),
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_947e5114864e12315004919f1e69e3859569817171853e9da025aeff65b18549 = $this->env->getExtension("native_profiler");
        $__internal_947e5114864e12315004919f1e69e3859569817171853e9da025aeff65b18549->enter($__internal_947e5114864e12315004919f1e69e3859569817171853e9da025aeff65b18549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_947e5114864e12315004919f1e69e3859569817171853e9da025aeff65b18549->leave($__internal_947e5114864e12315004919f1e69e3859569817171853e9da025aeff65b18549_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b27a3cc73c92aee671bf0ea6313d302e82c0f98d0d36607b119dd63d48e307d0 = $this->env->getExtension("native_profiler");
        $__internal_b27a3cc73c92aee671bf0ea6313d302e82c0f98d0d36607b119dd63d48e307d0->enter($__internal_b27a3cc73c92aee671bf0ea6313d302e82c0f98d0d36607b119dd63d48e307d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 44
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_b27a3cc73c92aee671bf0ea6313d302e82c0f98d0d36607b119dd63d48e307d0->leave($__internal_b27a3cc73c92aee671bf0ea6313d302e82c0f98d0d36607b119dd63d48e307d0_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_0f223b23b2d01ea26d743a279639145718af81016ee24712241cf0fe09befd1d = $this->env->getExtension("native_profiler");
        $__internal_0f223b23b2d01ea26d743a279639145718af81016ee24712241cf0fe09befd1d->enter($__internal_0f223b23b2d01ea26d743a279639145718af81016ee24712241cf0fe09befd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

        // line 4
        echo "  <div id=\"blocGaucheAccueil\">
    <form class=\"form\">
\t<div class=\"recherche\">
\t\t<input type=\"text\" name=\"keyword\" placeholder=\"Recherche\"/>
\t\t<button><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/search.png"), "html", null, true);
        echo "\" id=\"search\"</img></button>
\t</div>
    </form>
    <div id=\"barreH1\"></div>
    <div><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/user.png"), "html", null, true);
        echo "\" id=\"user\"</img>
    </div>
    <div id=\"compte\">
      <p>Bonjour 
          ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "prenom"), "method", true, true)) {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenom"), "method"), "html", null, true);
            echo "
          ";
        }
        // line 19
        echo "      </p>
    </div>
    <div id=\"barreH2\"></div>
     <div id=\"compteUser\">
      <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fsp_compte");
        echo "\" alt=\"Mon Compte\">Mon Compte</a>
     </div>
    <div id=\"barreVAccueil\"></div>
        <div><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/deconnexion.png"), "html", null, true);
        echo "\" id=\"deconnexion\"</img></div>
        <div id=\"decoLien\">
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fsp_deconnexion");
        echo "\" alt=\"Déconnexion\">Déconnexion</a>
        </div>
    <div id=\"barreH3Accueil\"></div>
    <div id=\"ajouterAnnonce\">
      <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fsp_ajouter");
        echo "\" alt=\"Ajouter une annonce\" title=\"Ajouter une annonce\">Ajouter une annonce</a>
    </div>
    <div id=\"barreH4Accueil\"></div>
    <div id=\"modifierAnnonce\">
      <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fsp_modifier");
        echo "\" alt=\"Modifier une annonce\" title=\"Modifier une annonce\">Modifier une annonce</a>
    </div>
    <div id=\"barreH5Accueil\"></div>
    <div id=\"supprimerAnnonce\">
      <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fsp_supprimer");
        echo "\" alt=\"Supprimer une annonce\" title=\"Supprimer une annonce\">Supprimer une annonce</a>
    </div>
  </div>
";
        
        $__internal_0f223b23b2d01ea26d743a279639145718af81016ee24712241cf0fe09befd1d->leave($__internal_0f223b23b2d01ea26d743a279639145718af81016ee24712241cf0fe09befd1d_prof);

    }

    // line 44
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_afc2d21adbf1b6181a214b4064fa1f7a564c0bb56aff3cf48e2aa6f2eb31c258 = $this->env->getExtension("native_profiler");
        $__internal_afc2d21adbf1b6181a214b4064fa1f7a564c0bb56aff3cf48e2aa6f2eb31c258->enter($__internal_afc2d21adbf1b6181a214b4064fa1f7a564c0bb56aff3cf48e2aa6f2eb31c258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 45
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"Annonces\">
     <p>Annonces</p>
    </div>
   </div>
  </div>
";
        
        $__internal_afc2d21adbf1b6181a214b4064fa1f7a564c0bb56aff3cf48e2aa6f2eb31c258->leave($__internal_afc2d21adbf1b6181a214b4064fa1f7a564c0bb56aff3cf48e2aa6f2eb31c258_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  134 => 44,  123 => 40,  116 => 36,  109 => 32,  102 => 28,  97 => 26,  91 => 23,  85 => 19,  79 => 17,  77 => 16,  70 => 12,  63 => 8,  57 => 4,  51 => 3,  44 => 44,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:layout.html.twig" %}*/
/* {% block body %}*/
/* {% block blocGauche %}*/
/*   <div id="blocGaucheAccueil">*/
/*     <form class="form">*/
/* 	<div class="recherche">*/
/* 		<input type="text" name="keyword" placeholder="Recherche"/>*/
/* 		<button><img src="{{asset('bundles/fsp/images/search.png')}}" id="search"</img></button>*/
/* 	</div>*/
/*     </form>*/
/*     <div id="barreH1"></div>*/
/*     <div><img src="{{asset('bundles/fsp/images/user.png')}}" id="user"</img>*/
/*     </div>*/
/*     <div id="compte">*/
/*       <p>Bonjour */
/*           {% if(app.session.get('prenom') is defined ) %}*/
/*             {{app.session.get('prenom')}}*/
/*           {% endif %}*/
/*       </p>*/
/*     </div>*/
/*     <div id="barreH2"></div>*/
/*      <div id="compteUser">*/
/*       <a href="{{path('fsp_compte')}}" alt="Mon Compte">Mon Compte</a>*/
/*      </div>*/
/*     <div id="barreVAccueil"></div>*/
/*         <div><img src="{{asset('bundles/fsp/images/deconnexion.png')}}" id="deconnexion"</img></div>*/
/*         <div id="decoLien">*/
/*         <a href="{{path('fsp_deconnexion')}}" alt="Déconnexion">Déconnexion</a>*/
/*         </div>*/
/*     <div id="barreH3Accueil"></div>*/
/*     <div id="ajouterAnnonce">*/
/*       <a href="{{path('fsp_ajouter')}}" alt="Ajouter une annonce" title="Ajouter une annonce">Ajouter une annonce</a>*/
/*     </div>*/
/*     <div id="barreH4Accueil"></div>*/
/*     <div id="modifierAnnonce">*/
/*       <a href="{{path('fsp_modifier')}}" alt="Modifier une annonce" title="Modifier une annonce">Modifier une annonce</a>*/
/*     </div>*/
/*     <div id="barreH5Accueil"></div>*/
/*     <div id="supprimerAnnonce">*/
/*       <a href="{{path('fsp_supprimer')}}" alt="Supprimer une annonce" title="Supprimer une annonce">Supprimer une annonce</a>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="Annonces">*/
/*      <p>Annonces</p>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
