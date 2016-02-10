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
        $__internal_ed28bf0d8aed35ba7fbbd7f16dbf9e680138f4279bb41aee2cda6f3a7ee05ef4 = $this->env->getExtension("native_profiler");
        $__internal_ed28bf0d8aed35ba7fbbd7f16dbf9e680138f4279bb41aee2cda6f3a7ee05ef4->enter($__internal_ed28bf0d8aed35ba7fbbd7f16dbf9e680138f4279bb41aee2cda6f3a7ee05ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:cours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed28bf0d8aed35ba7fbbd7f16dbf9e680138f4279bb41aee2cda6f3a7ee05ef4->leave($__internal_ed28bf0d8aed35ba7fbbd7f16dbf9e680138f4279bb41aee2cda6f3a7ee05ef4_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_c34717240e1edc7517d4a2b5b6f4644dfebb5c7076b0204a3d19ad29199df634 = $this->env->getExtension("native_profiler");
        $__internal_c34717240e1edc7517d4a2b5b6f4644dfebb5c7076b0204a3d19ad29199df634->enter($__internal_c34717240e1edc7517d4a2b5b6f4644dfebb5c7076b0204a3d19ad29199df634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"AnnoncesTheme\">
     <p>Annonces - Cours</p>
    </div>
    <table class =\"listeAnnonce\">

       ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 11
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 12
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 13
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 14
            echo "         ";
            $context["etat"] = $this->getAttribute($context["uneAnnonce"], "etat", array());
            // line 15
            echo "
       <tr>
           <td class=\"titre\">";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\">Statut : ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "      </table>
     </div>
    </div>
";
        
        $__internal_c34717240e1edc7517d4a2b5b6f4644dfebb5c7076b0204a3d19ad29199df634->leave($__internal_c34717240e1edc7517d4a2b5b6f4644dfebb5c7076b0204a3d19ad29199df634_prof);

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
        return array (  90 => 23,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
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
/* */
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
