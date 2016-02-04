<?php

/* FSPBundle:Theme:logement.html.twig */
class __TwigTemplate_94f33acf38a0889b6dfe7a11bc94b64c833d5d66668cae744ef40a8f4b522483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:Theme:logement.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_974727d1ce27523c3988e6fb737057aa1467ceea7ac5d75481abcceb6b34df6c = $this->env->getExtension("native_profiler");
        $__internal_974727d1ce27523c3988e6fb737057aa1467ceea7ac5d75481abcceb6b34df6c->enter($__internal_974727d1ce27523c3988e6fb737057aa1467ceea7ac5d75481abcceb6b34df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:logement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_974727d1ce27523c3988e6fb737057aa1467ceea7ac5d75481abcceb6b34df6c->leave($__internal_974727d1ce27523c3988e6fb737057aa1467ceea7ac5d75481abcceb6b34df6c_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_30d9fce6e4321be91b6d4d9d0927cae9bf2986b7e9a7d5e7a922b173d365f4b8 = $this->env->getExtension("native_profiler");
        $__internal_30d9fce6e4321be91b6d4d9d0927cae9bf2986b7e9a7d5e7a922b173d365f4b8->enter($__internal_30d9fce6e4321be91b6d4d9d0927cae9bf2986b7e9a7d5e7a922b173d365f4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"AnnoncesTheme\">
     <p>Annonces - Logement</p>
    </div>
     <table class =\"listeAnnonce\">
       <tr>
           <th class=\"titre\">Titre</th>
           <th class=\"info\">Info</th>
       </tr>

       ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 15
            echo "         ";
            $context["theme"] = $this->getAttribute($context["uneAnnonce"], "theme", array());
            // line 16
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 17
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 18
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 19
            echo "         ";
            $context["etat"] = $this->getAttribute($context["uneAnnonce"], "etat", array());
            // line 20
            echo "
       <tr>
           <td>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
            echo "</td>
           <td>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td>Le ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td>Par ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td>Statut : ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </table>
   </div>
  </div>
";
        
        $__internal_30d9fce6e4321be91b6d4d9d0927cae9bf2986b7e9a7d5e7a922b173d365f4b8->leave($__internal_30d9fce6e4321be91b6d4d9d0927cae9bf2986b7e9a7d5e7a922b173d365f4b8_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:logement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="AnnoncesTheme">*/
/*      <p>Annonces - Logement</p>*/
/*     </div>*/
/*      <table class ="listeAnnonce">*/
/*        <tr>*/
/*            <th class="titre">Titre</th>*/
/*            <th class="info">Info</th>*/
/*        </tr>*/
/* */
/*        {% for uneAnnonce in lesAnnonces %}*/
/*          {% set theme  = uneAnnonce.theme %}*/
/*          {% set titre  = uneAnnonce.titre %}*/
/*          {% set date   =  uneAnnonce.date %}*/
/*          {% set prenom =  uneAnnonce.prenom %}*/
/*          {% set etat   =  uneAnnonce.etat %}*/
/* */
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
/* */
