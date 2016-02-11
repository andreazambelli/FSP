<?php

/* FSPBundle:Theme:cours.html.twig */
class __TwigTemplate_fdcae917394435b56f587e82106aa3be20245ed98161fc15951097370d80af5c extends Twig_Template
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
        $__internal_6011e44fda209c22bd3a3f9e0022a24cfc2874076efa8f001603f24a1733d3fe = $this->env->getExtension("native_profiler");
        $__internal_6011e44fda209c22bd3a3f9e0022a24cfc2874076efa8f001603f24a1733d3fe->enter($__internal_6011e44fda209c22bd3a3f9e0022a24cfc2874076efa8f001603f24a1733d3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:cours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6011e44fda209c22bd3a3f9e0022a24cfc2874076efa8f001603f24a1733d3fe->leave($__internal_6011e44fda209c22bd3a3f9e0022a24cfc2874076efa8f001603f24a1733d3fe_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_20d8d0c9cd6cafc11832ae547e84085d771ab3ebea1461664e27a631f67cb64e = $this->env->getExtension("native_profiler");
        $__internal_20d8d0c9cd6cafc11832ae547e84085d771ab3ebea1461664e27a631f67cb64e->enter($__internal_20d8d0c9cd6cafc11832ae547e84085d771ab3ebea1461664e27a631f67cb64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
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
            $context["image"] = $this->getAttribute($context["uneAnnonce"], "image", array());
            // line 14
            echo "
       <tr>
           <td class=\"titre\">";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\"><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
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
        
        $__internal_20d8d0c9cd6cafc11832ae547e84085d771ab3ebea1461664e27a631f67cb64e->leave($__internal_20d8d0c9cd6cafc11832ae547e84085d771ab3ebea1461664e27a631f67cb64e_prof);

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
        return array (  90 => 22,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
/*          {% set image   =  uneAnnonce.image %}*/
/* */
/*        <tr>*/
/*            <td class="titre">{{titre}}</td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="prenom">Par {{prenom}}</td>*/
/*            <td class="statut"><img src="{{asset('bundles/fsp/images/')}}{{image}}" id="statut"></img></td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>*/
/*      </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
