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
        $__internal_c812b0fc69526ce00a0687628f94cf6ed8cffa539d35a557690a893fd5bc56e6 = $this->env->getExtension("native_profiler");
        $__internal_c812b0fc69526ce00a0687628f94cf6ed8cffa539d35a557690a893fd5bc56e6->enter($__internal_c812b0fc69526ce00a0687628f94cf6ed8cffa539d35a557690a893fd5bc56e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c812b0fc69526ce00a0687628f94cf6ed8cffa539d35a557690a893fd5bc56e6->leave($__internal_c812b0fc69526ce00a0687628f94cf6ed8cffa539d35a557690a893fd5bc56e6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a83451e3088b4f5fe7a45f651611340381a936b0d90556446676e8e79374179b = $this->env->getExtension("native_profiler");
        $__internal_a83451e3088b4f5fe7a45f651611340381a936b0d90556446676e8e79374179b->enter($__internal_a83451e3088b4f5fe7a45f651611340381a936b0d90556446676e8e79374179b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 44
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_a83451e3088b4f5fe7a45f651611340381a936b0d90556446676e8e79374179b->leave($__internal_a83451e3088b4f5fe7a45f651611340381a936b0d90556446676e8e79374179b_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_6ba470840ee2eef512f6058ab8a90e950f9a808f725153fc8e6cee0a87ba7606 = $this->env->getExtension("native_profiler");
        $__internal_6ba470840ee2eef512f6058ab8a90e950f9a808f725153fc8e6cee0a87ba7606->enter($__internal_6ba470840ee2eef512f6058ab8a90e950f9a808f725153fc8e6cee0a87ba7606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
        
        $__internal_6ba470840ee2eef512f6058ab8a90e950f9a808f725153fc8e6cee0a87ba7606->leave($__internal_6ba470840ee2eef512f6058ab8a90e950f9a808f725153fc8e6cee0a87ba7606_prof);

    }

    // line 44
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_f05ac1b33fe7f246af235b595a185e1cfeef9da89a3d95c4d9215c468ef1394f = $this->env->getExtension("native_profiler");
        $__internal_f05ac1b33fe7f246af235b595a185e1cfeef9da89a3d95c4d9215c468ef1394f->enter($__internal_f05ac1b33fe7f246af235b595a185e1cfeef9da89a3d95c4d9215c468ef1394f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 45
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"Annonces\">
     <p>Annonces</p>
    </div>
   <table class =\"listeAnnonce\">
       ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 52
            echo "        ";
            $context["imageTheme"] = $this->getAttribute($context["uneAnnonce"], "imageTheme", array());
            // line 53
            echo "\t";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 54
            echo "\t";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 55
            echo "        ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 56
            echo "\t";
            $context["image"] = $this->getAttribute($context["uneAnnonce"], "image", array());
            // line 57
            echo "
       <tr>
           <td class=\"theme\"><img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["imageTheme"]) ? $context["imageTheme"] : $this->getContext($context, "imageTheme")), "html", null, true);
            echo "\" id=\"theme\"></img></td>
\t   <td class=\"titre\">";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\"><img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "      </table>
    </div>
  </div>
";
        
        $__internal_f05ac1b33fe7f246af235b595a185e1cfeef9da89a3d95c4d9215c468ef1394f->leave($__internal_f05ac1b33fe7f246af235b595a185e1cfeef9da89a3d95c4d9215c468ef1394f_prof);

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
        return array (  198 => 66,  188 => 63,  184 => 62,  180 => 61,  176 => 60,  171 => 59,  167 => 57,  164 => 56,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  148 => 51,  140 => 45,  134 => 44,  123 => 40,  116 => 36,  109 => 32,  102 => 28,  97 => 26,  91 => 23,  85 => 19,  79 => 17,  77 => 16,  70 => 12,  63 => 8,  57 => 4,  51 => 3,  44 => 44,  42 => 3,  36 => 2,  11 => 1,);
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
/*    <table class ="listeAnnonce">*/
/*        {% for uneAnnonce in lesAnnonces %}*/
/*         {% set imageTheme = uneAnnonce.imageTheme %}*/
/* 	{% set titre      = uneAnnonce.titre %}*/
/* 	{% set date       = uneAnnonce.date %}*/
/*         {% set prenom     = uneAnnonce.prenom %}*/
/* 	{% set image      = uneAnnonce.image %}*/
/* */
/*        <tr>*/
/*            <td class="theme"><img src="{{asset('bundles/fsp/images/')}}{{imageTheme}}" id="theme"></img></td>*/
/* 	   <td class="titre">{{titre}}</td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="prenom">Par {{prenom}}</td>*/
/*            <td class="statut"><img src="{{asset('bundles/fsp/images/')}}{{image}}" id="statut"></img></td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
