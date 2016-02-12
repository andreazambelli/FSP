<?php

/* FSPBundle:User:accueilConnecte.html.twig */
class __TwigTemplate_c8639de6f5fc1e2e56e8b1b8c31a37f3d4586aab28930762331259271164d435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:layout.html.twig", "FSPBundle:User:accueilConnecte.html.twig", 1);
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
        $__internal_aea91ec31b008f2e28c7d1d911c280e2db25adb7792eb957902c9d586aaafb6c = $this->env->getExtension("native_profiler");
        $__internal_aea91ec31b008f2e28c7d1d911c280e2db25adb7792eb957902c9d586aaafb6c->enter($__internal_aea91ec31b008f2e28c7d1d911c280e2db25adb7792eb957902c9d586aaafb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:accueilConnecte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea91ec31b008f2e28c7d1d911c280e2db25adb7792eb957902c9d586aaafb6c->leave($__internal_aea91ec31b008f2e28c7d1d911c280e2db25adb7792eb957902c9d586aaafb6c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fcf81b4b578ae3e7a7bab5c7c29997d6200fb44f4ed0c53e1e43ae7a4e079b5 = $this->env->getExtension("native_profiler");
        $__internal_5fcf81b4b578ae3e7a7bab5c7c29997d6200fb44f4ed0c53e1e43ae7a4e079b5->enter($__internal_5fcf81b4b578ae3e7a7bab5c7c29997d6200fb44f4ed0c53e1e43ae7a4e079b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 44
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_5fcf81b4b578ae3e7a7bab5c7c29997d6200fb44f4ed0c53e1e43ae7a4e079b5->leave($__internal_5fcf81b4b578ae3e7a7bab5c7c29997d6200fb44f4ed0c53e1e43ae7a4e079b5_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_db83909461952e4ec2cb5e89896cc2b149f3db96f2d3074804b442d3ae17f6a4 = $this->env->getExtension("native_profiler");
        $__internal_db83909461952e4ec2cb5e89896cc2b149f3db96f2d3074804b442d3ae17f6a4->enter($__internal_db83909461952e4ec2cb5e89896cc2b149f3db96f2d3074804b442d3ae17f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
        
        $__internal_db83909461952e4ec2cb5e89896cc2b149f3db96f2d3074804b442d3ae17f6a4->leave($__internal_db83909461952e4ec2cb5e89896cc2b149f3db96f2d3074804b442d3ae17f6a4_prof);

    }

    // line 44
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_fc02e7341e8b82acbe11a35c86f22fad770f91d8f362b3f0353577d658e4f63c = $this->env->getExtension("native_profiler");
        $__internal_fc02e7341e8b82acbe11a35c86f22fad770f91d8f362b3f0353577d658e4f63c->enter($__internal_fc02e7341e8b82acbe11a35c86f22fad770f91d8f362b3f0353577d658e4f63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 45
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"Annonces\">
     <p>Annonces</p>
    </div>
     <table class =\"listeAnnonce\">
 
       ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 53
            echo "         ";
            $context["theme"] = $this->getAttribute($context["uneAnnonce"], "theme", array());
            // line 54
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 55
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 56
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 57
            echo "         ";
            $context["etat"] = $this->getAttribute($context["uneAnnonce"], "etat", array());
            // line 58
            echo "       
       <tr>
           <td class=\"theme\">";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
            echo "</td>
           <td class=\"titre\">";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\">Statut : ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "      </table>
   </div>
  </div>
";
        
        $__internal_fc02e7341e8b82acbe11a35c86f22fad770f91d8f362b3f0353577d658e4f63c->leave($__internal_fc02e7341e8b82acbe11a35c86f22fad770f91d8f362b3f0353577d658e4f63c_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:accueilConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 67,  188 => 64,  184 => 63,  180 => 62,  176 => 61,  172 => 60,  168 => 58,  165 => 57,  162 => 56,  159 => 55,  156 => 54,  153 => 53,  149 => 52,  140 => 45,  134 => 44,  123 => 40,  116 => 36,  109 => 32,  102 => 28,  97 => 26,  91 => 23,  85 => 19,  79 => 17,  77 => 16,  70 => 12,  63 => 8,  57 => 4,  51 => 3,  44 => 44,  42 => 3,  36 => 2,  11 => 1,);
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
/*      <table class ="listeAnnonce">*/
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
