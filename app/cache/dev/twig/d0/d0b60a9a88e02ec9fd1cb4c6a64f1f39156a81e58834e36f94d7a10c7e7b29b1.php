<?php

/* FSPBundle::accueil.html.twig */
class __TwigTemplate_82090e632a465ab82bf44fcae20f59bdc0aa8d2c3c05b9e8084558b89fdd89a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::layout.html.twig", "FSPBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blocGauche' => array($this, 'block_blocGauche'),
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceb384704d5636746b5a30e91a1e9978781c331f8bede0c9d8a9ead37ea28944 = $this->env->getExtension("native_profiler");
        $__internal_ceb384704d5636746b5a30e91a1e9978781c331f8bede0c9d8a9ead37ea28944->enter($__internal_ceb384704d5636746b5a30e91a1e9978781c331f8bede0c9d8a9ead37ea28944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb384704d5636746b5a30e91a1e9978781c331f8bede0c9d8a9ead37ea28944->leave($__internal_ceb384704d5636746b5a30e91a1e9978781c331f8bede0c9d8a9ead37ea28944_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_204baf03a18d47a58faedc1f59ac91e0221ceaa07dfde3258d7b7e7f784ca01f = $this->env->getExtension("native_profiler");
        $__internal_204baf03a18d47a58faedc1f59ac91e0221ceaa07dfde3258d7b7e7f784ca01f->enter($__internal_204baf03a18d47a58faedc1f59ac91e0221ceaa07dfde3258d7b7e7f784ca01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 34
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_204baf03a18d47a58faedc1f59ac91e0221ceaa07dfde3258d7b7e7f784ca01f->leave($__internal_204baf03a18d47a58faedc1f59ac91e0221ceaa07dfde3258d7b7e7f784ca01f_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_01cbe4d828ca124fc3a721a4cf07021ce9a91c9f5d4fff34f2be7657d7c75d98 = $this->env->getExtension("native_profiler");
        $__internal_01cbe4d828ca124fc3a721a4cf07021ce9a91c9f5d4fff34f2be7657d7c75d98->enter($__internal_01cbe4d828ca124fc3a721a4cf07021ce9a91c9f5d4fff34f2be7657d7c75d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

        // line 4
        echo "  <div id=\"blocGauche\">
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
        echo "\" id=\"user\"</img></div>
    <div id=\"connexion\">
      <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fsp_connexion");
        echo "\" alt=\"Connexion\" title=\"Connexion\">Connexion</a>
    </div>
    <div id=\"barreV\"></div>
    <div id=\"inscription\">
      <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fsp_inscription");
        echo "\" alt=\"S'inscrire\" title=\"S'inscrire\">S'inscrire</a>
    </div>
    <div id=\"barreH2\"></div>
    <div id=\"ajouterAnnonce\">
      <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fsp_ajouter");
        echo "\" alt=\"Ajouter une annonce\" title=\"Ajouter une annonce\">Ajouter une annonce</a>
    </div>
    <div id=\"barreH3\"></div>
    <div id=\"modifierAnnonce\">
      <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fsp_modifier");
        echo "\" alt=\"Modifier une annonce\" title=\"Modifier une annonce\">Modifier une annonce</a>
    </div>
    <div id=\"barreH4\"></div>
    <div id=\"supprimerAnnonce\">
      <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fsp_supprimer");
        echo "\" alt=\"Supprimer une annonce\" title=\"Supprimer une annonce\">Supprimer une annonce</a>
    </div>
  </div>
";
        
        $__internal_01cbe4d828ca124fc3a721a4cf07021ce9a91c9f5d4fff34f2be7657d7c75d98->leave($__internal_01cbe4d828ca124fc3a721a4cf07021ce9a91c9f5d4fff34f2be7657d7c75d98_prof);

    }

    // line 34
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_350de7ec3bd411b3d9908b355cfec7387a1eb3a7705c9fb3bea1498675a0bcbe = $this->env->getExtension("native_profiler");
        $__internal_350de7ec3bd411b3d9908b355cfec7387a1eb3a7705c9fb3bea1498675a0bcbe->enter($__internal_350de7ec3bd411b3d9908b355cfec7387a1eb3a7705c9fb3bea1498675a0bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 35
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"Annonces\">
     <p>Annonces</p>
    </div>
   </div>
  </div>
";
        
        $__internal_350de7ec3bd411b3d9908b355cfec7387a1eb3a7705c9fb3bea1498675a0bcbe->leave($__internal_350de7ec3bd411b3d9908b355cfec7387a1eb3a7705c9fb3bea1498675a0bcbe_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  114 => 34,  103 => 30,  96 => 26,  89 => 22,  82 => 18,  75 => 14,  70 => 12,  63 => 8,  57 => 4,  51 => 3,  44 => 34,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* {% block blocGauche %}*/
/*   <div id="blocGauche">*/
/*     <form class="form">*/
/* 	<div class="recherche">*/
/* 		<input type="text" name="keyword" placeholder="Recherche"/>*/
/* 		<button><img src="{{asset('bundles/fsp/images/search.png')}}" id="search"</img></button>*/
/* 	</div>*/
/*     </form>*/
/*     <div id="barreH1"></div>*/
/*     <div><img src="{{asset('bundles/fsp/images/user.png')}}" id="user"</img></div>*/
/*     <div id="connexion">*/
/*       <a href="{{path('fsp_connexion')}}" alt="Connexion" title="Connexion">Connexion</a>*/
/*     </div>*/
/*     <div id="barreV"></div>*/
/*     <div id="inscription">*/
/*       <a href="{{path('fsp_inscription')}}" alt="S'inscrire" title="S'inscrire">S'inscrire</a>*/
/*     </div>*/
/*     <div id="barreH2"></div>*/
/*     <div id="ajouterAnnonce">*/
/*       <a href="{{path('fsp_ajouter')}}" alt="Ajouter une annonce" title="Ajouter une annonce">Ajouter une annonce</a>*/
/*     </div>*/
/*     <div id="barreH3"></div>*/
/*     <div id="modifierAnnonce">*/
/*       <a href="{{path('fsp_modifier')}}" alt="Modifier une annonce" title="Modifier une annonce">Modifier une annonce</a>*/
/*     </div>*/
/*     <div id="barreH4"></div>*/
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
