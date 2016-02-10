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
        $__internal_770f136809e4df64bc0579b722dfb868594f4f359894d2bc2892f208b594d887 = $this->env->getExtension("native_profiler");
        $__internal_770f136809e4df64bc0579b722dfb868594f4f359894d2bc2892f208b594d887->enter($__internal_770f136809e4df64bc0579b722dfb868594f4f359894d2bc2892f208b594d887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_770f136809e4df64bc0579b722dfb868594f4f359894d2bc2892f208b594d887->leave($__internal_770f136809e4df64bc0579b722dfb868594f4f359894d2bc2892f208b594d887_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_64c05550163c57aee0881f5ccd759aed3039c3a289bd834e063a39e815ef3e65 = $this->env->getExtension("native_profiler");
        $__internal_64c05550163c57aee0881f5ccd759aed3039c3a289bd834e063a39e815ef3e65->enter($__internal_64c05550163c57aee0881f5ccd759aed3039c3a289bd834e063a39e815ef3e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 34
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_64c05550163c57aee0881f5ccd759aed3039c3a289bd834e063a39e815ef3e65->leave($__internal_64c05550163c57aee0881f5ccd759aed3039c3a289bd834e063a39e815ef3e65_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_13791f85cd751d30e19664b1fbec00b723f450382ac33bb96204bc5d4cfd564a = $this->env->getExtension("native_profiler");
        $__internal_13791f85cd751d30e19664b1fbec00b723f450382ac33bb96204bc5d4cfd564a->enter($__internal_13791f85cd751d30e19664b1fbec00b723f450382ac33bb96204bc5d4cfd564a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
        
        $__internal_13791f85cd751d30e19664b1fbec00b723f450382ac33bb96204bc5d4cfd564a->leave($__internal_13791f85cd751d30e19664b1fbec00b723f450382ac33bb96204bc5d4cfd564a_prof);

    }

    // line 34
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_dc904d6b1fdb4843cbd82b77e46a4bb6dd250f606dee5f73f6f08bb98ffd1a6c = $this->env->getExtension("native_profiler");
        $__internal_dc904d6b1fdb4843cbd82b77e46a4bb6dd250f606dee5f73f6f08bb98ffd1a6c->enter($__internal_dc904d6b1fdb4843cbd82b77e46a4bb6dd250f606dee5f73f6f08bb98ffd1a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 35
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"Annonces\">
     <p>Annonces</p>
    </div>
      <table class =\"listeAnnonce\">
 
       ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 43
            echo "         ";
            $context["theme"] = $this->getAttribute($context["uneAnnonce"], "theme", array());
            // line 44
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 45
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 46
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 47
            echo "         ";
            $context["etat"] = $this->getAttribute($context["uneAnnonce"], "etat", array());
            // line 48
            echo "       
       <tr>
           <td class=\"theme\">";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
            echo "</td>
           <td class=\"titre\">";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\">Statut : ";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </table>
   </div>
  </div>
";
        
        $__internal_dc904d6b1fdb4843cbd82b77e46a4bb6dd250f606dee5f73f6f08bb98ffd1a6c->leave($__internal_dc904d6b1fdb4843cbd82b77e46a4bb6dd250f606dee5f73f6f08bb98ffd1a6c_prof);

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
        return array (  177 => 57,  168 => 54,  164 => 53,  160 => 52,  156 => 51,  152 => 50,  148 => 48,  145 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  129 => 42,  120 => 35,  114 => 34,  103 => 30,  96 => 26,  89 => 22,  82 => 18,  75 => 14,  70 => 12,  63 => 8,  57 => 4,  51 => 3,  44 => 34,  42 => 3,  36 => 2,  11 => 1,);
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
/*       <table class ="listeAnnonce">*/
/*  */
/*        {% for uneAnnonce in lesAnnonces %}*/
/*          {% set theme  = uneAnnonce.theme %}*/
/*          {% set titre  = uneAnnonce.titre %}*/
/*          {% set date   =  uneAnnonce.date %}*/
/*          {% set prenom =  uneAnnonce.prenom %}*/
/*          {% set etat   =  uneAnnonce.etat %}*/
/*        */
/*        <tr>*/
/*            <td class="theme">{{theme}}</td>*/
/*            <td class="titre">{{titre}}</td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="prenom">Par {{prenom}}</td>*/
/*            <td class="statut">Statut : {{etat}}</td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
