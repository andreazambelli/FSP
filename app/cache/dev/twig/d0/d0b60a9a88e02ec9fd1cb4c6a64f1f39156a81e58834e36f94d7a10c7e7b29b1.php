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
        $__internal_52d88a26925b6ab0fc820bc5fc42a077ee32abe638313768926585b8729cfc85 = $this->env->getExtension("native_profiler");
        $__internal_52d88a26925b6ab0fc820bc5fc42a077ee32abe638313768926585b8729cfc85->enter($__internal_52d88a26925b6ab0fc820bc5fc42a077ee32abe638313768926585b8729cfc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d88a26925b6ab0fc820bc5fc42a077ee32abe638313768926585b8729cfc85->leave($__internal_52d88a26925b6ab0fc820bc5fc42a077ee32abe638313768926585b8729cfc85_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9036c484de81f7b5bfccf8f19cf67ac86101336d728a63b64814953fd271f2d = $this->env->getExtension("native_profiler");
        $__internal_b9036c484de81f7b5bfccf8f19cf67ac86101336d728a63b64814953fd271f2d->enter($__internal_b9036c484de81f7b5bfccf8f19cf67ac86101336d728a63b64814953fd271f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 34
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_b9036c484de81f7b5bfccf8f19cf67ac86101336d728a63b64814953fd271f2d->leave($__internal_b9036c484de81f7b5bfccf8f19cf67ac86101336d728a63b64814953fd271f2d_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_387eb6ca11f68426888a0423abf99528f0455ce45b6b46b595a56c26d355ce97 = $this->env->getExtension("native_profiler");
        $__internal_387eb6ca11f68426888a0423abf99528f0455ce45b6b46b595a56c26d355ce97->enter($__internal_387eb6ca11f68426888a0423abf99528f0455ce45b6b46b595a56c26d355ce97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
        
        $__internal_387eb6ca11f68426888a0423abf99528f0455ce45b6b46b595a56c26d355ce97->leave($__internal_387eb6ca11f68426888a0423abf99528f0455ce45b6b46b595a56c26d355ce97_prof);

    }

    // line 34
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_a6317fad0cbc4d5a8947dccad5be720735c47796b07bf76f0ec800dce9fccb55 = $this->env->getExtension("native_profiler");
        $__internal_a6317fad0cbc4d5a8947dccad5be720735c47796b07bf76f0ec800dce9fccb55->enter($__internal_a6317fad0cbc4d5a8947dccad5be720735c47796b07bf76f0ec800dce9fccb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 35
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"Annonces\">
     <p>Annonces</p>
    </div>
      <table class =\"listeAnnonce\">
       <tr>
           <th class=\"theme\">Theme</th>
           <th class=\"titre\">Titre</th>
           <th class=\"info\">Info</th>
       </tr>
 
       ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 48
            echo "         ";
            $context["theme"] = $this->getAttribute($context["uneAnnonce"], "theme", array());
            // line 49
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 50
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 51
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 52
            echo "         ";
            $context["etat"] = $this->getAttribute($context["uneAnnonce"], "etat", array());
            // line 53
            echo "       
       <tr>
           <td>";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
            echo "</td>
           <td>";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td>Le ";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td>Par ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td>Statut : ";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "      </table>
   </div>
  </div>
";
        
        $__internal_a6317fad0cbc4d5a8947dccad5be720735c47796b07bf76f0ec800dce9fccb55->leave($__internal_a6317fad0cbc4d5a8947dccad5be720735c47796b07bf76f0ec800dce9fccb55_prof);

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
        return array (  182 => 62,  173 => 59,  169 => 58,  165 => 57,  161 => 56,  157 => 55,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 48,  134 => 47,  120 => 35,  114 => 34,  103 => 30,  96 => 26,  89 => 22,  82 => 18,  75 => 14,  70 => 12,  63 => 8,  57 => 4,  51 => 3,  44 => 34,  42 => 3,  36 => 2,  11 => 1,);
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
/*        <tr>*/
/*            <th class="theme">Theme</th>*/
/*            <th class="titre">Titre</th>*/
/*            <th class="info">Info</th>*/
/*        </tr>*/
/*  */
/*        {% for uneAnnonce in lesAnnonces %}*/
/*          {% set theme  = uneAnnonce.theme %}*/
/*          {% set titre  = uneAnnonce.titre %}*/
/*          {% set date   =  uneAnnonce.date %}*/
/*          {% set prenom =  uneAnnonce.prenom %}*/
/*          {% set etat   =  uneAnnonce.etat %}*/
/*        */
/*        <tr>*/
/*            <td>{{theme}}</td>*/
/*            <td>{{titre}}</td>*/
/*            <td>Le {{date}}</td>*/
/*            <td>Par {{prenom}}</td>*/
/*            <td>Statut : {{etat}}</td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
