<?php

/* FSPBundle:Theme:cours.html.twig */
class __TwigTemplate_dc501023aebbca703605a454cef3414aeb19e55148799245165c4b46a0a04e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:Theme:cours.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle:User:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"AnnoncesTheme\">
     <p>Annonces - Cours</p>
    </div>
    <table class =\"listeAnnonce\">
       ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 10
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 11
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 12
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 13
            echo "         ";
            $context["etat"] = $this->getAttribute($context["uneAnnonce"], "etat", array());
            // line 14
            echo "
       <tr>
           <td class=\"titre\">";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : null), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : null), "html", null, true);
            echo "</td>
           <td class=\"statut\">Statut : ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : null), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </table>
     </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="AnnoncesTheme">*/
/*      <p>Annonces - Cours</p>*/
/*     </div>*/
/*     <table class ="listeAnnonce">*/
/*        {% for uneAnnonce in lesAnnonces %}*/
/*          {% set titre  = uneAnnonce.titre %}*/
/*          {% set date   =  uneAnnonce.date %}*/
/*          {% set prenom =  uneAnnonce.prenom %}*/
/*          {% set etat   =  uneAnnonce.etat %}*/
/* */
/*        <tr>*/
/*            <td class="titre">{{titre}}</td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="prenom">Par {{prenom}}</td>*/
/*            <td class="statut">Statut : {{etat}}</td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>*/
/*      </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
