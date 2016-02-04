<?php

/* FSPBundle:User:accueil.html.twig */
class __TwigTemplate_2b1844afaeaf2a34db4ad11637702c4b013fb79b7b124f1a63d48aa9b9827336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::layout.html.twig", "FSPBundle:User:accueil.html.twig", 1);
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
        $__internal_7fbbf3dea5461b800ceff531c4b3d890cdddafac6b35484b0fd9d539cd658a8e = $this->env->getExtension("native_profiler");
        $__internal_7fbbf3dea5461b800ceff531c4b3d890cdddafac6b35484b0fd9d539cd658a8e->enter($__internal_7fbbf3dea5461b800ceff531c4b3d890cdddafac6b35484b0fd9d539cd658a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbbf3dea5461b800ceff531c4b3d890cdddafac6b35484b0fd9d539cd658a8e->leave($__internal_7fbbf3dea5461b800ceff531c4b3d890cdddafac6b35484b0fd9d539cd658a8e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a3a921f29bb30d582097db9fa2d46c043a2a222ae9e1ffd3408bab3c9b2c5e = $this->env->getExtension("native_profiler");
        $__internal_c7a3a921f29bb30d582097db9fa2d46c043a2a222ae9e1ffd3408bab3c9b2c5e->enter($__internal_c7a3a921f29bb30d582097db9fa2d46c043a2a222ae9e1ffd3408bab3c9b2c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 34
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_c7a3a921f29bb30d582097db9fa2d46c043a2a222ae9e1ffd3408bab3c9b2c5e->leave($__internal_c7a3a921f29bb30d582097db9fa2d46c043a2a222ae9e1ffd3408bab3c9b2c5e_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_6402002a57bd6bc3282df41b8be467851c62510f1f6c6f2092ae729972f86a32 = $this->env->getExtension("native_profiler");
        $__internal_6402002a57bd6bc3282df41b8be467851c62510f1f6c6f2092ae729972f86a32->enter($__internal_6402002a57bd6bc3282df41b8be467851c62510f1f6c6f2092ae729972f86a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
      <p>Bonjour </p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fsp_compte");
        echo "\" alt=\"Mon Compte\" title=\"Mon Compte\">
          ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "prenom"), "method", true, true)) {
            // line 16
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenom"), "method"), "html", null, true);
            echo "
          ";
        }
        // line 18
        echo "     </a>
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
        
        $__internal_6402002a57bd6bc3282df41b8be467851c62510f1f6c6f2092ae729972f86a32->leave($__internal_6402002a57bd6bc3282df41b8be467851c62510f1f6c6f2092ae729972f86a32_prof);

    }

    // line 34
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_280cfec937350fa94bc3eb5af06ee208b2d5b5b304532e5301edbae8edc88501 = $this->env->getExtension("native_profiler");
        $__internal_280cfec937350fa94bc3eb5af06ee208b2d5b5b304532e5301edbae8edc88501->enter($__internal_280cfec937350fa94bc3eb5af06ee208b2d5b5b304532e5301edbae8edc88501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 35
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"Annonces\">
     <p>Annonces</p>
    </div>
   </div>
  </div>
";
        
        $__internal_280cfec937350fa94bc3eb5af06ee208b2d5b5b304532e5301edbae8edc88501->leave($__internal_280cfec937350fa94bc3eb5af06ee208b2d5b5b304532e5301edbae8edc88501_prof);

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
        return array (  124 => 35,  118 => 34,  107 => 30,  100 => 26,  93 => 22,  87 => 18,  81 => 16,  79 => 15,  75 => 14,  70 => 12,  63 => 8,  57 => 4,  51 => 3,  44 => 34,  42 => 3,  36 => 2,  11 => 1,);
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
/*       <p>Bonjour </p><a href="{{path('fsp_compte')}}" alt="Mon Compte" title="Mon Compte">*/
/*           {% if(app.session.get('prenom') is defined ) %}*/
/*             {{app.session.get('prenom')}}*/
/*           {% endif %}*/
/*      </a>*/
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
