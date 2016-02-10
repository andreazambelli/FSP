<?php

/* FSPBundle:User:compte.html.twig */
class __TwigTemplate_b459cfc9cd6473c4b0dc49e687778454bc4fea577fce6349e1aac1daa7b70d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:compte.html.twig", 1);
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
        $__internal_9de634d5fb1efc29dd9ef11a195c049a6dbf1017e301fa39c2384af9955826f0 = $this->env->getExtension("native_profiler");
        $__internal_9de634d5fb1efc29dd9ef11a195c049a6dbf1017e301fa39c2384af9955826f0->enter($__internal_9de634d5fb1efc29dd9ef11a195c049a6dbf1017e301fa39c2384af9955826f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:compte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de634d5fb1efc29dd9ef11a195c049a6dbf1017e301fa39c2384af9955826f0->leave($__internal_9de634d5fb1efc29dd9ef11a195c049a6dbf1017e301fa39c2384af9955826f0_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_dc340cc59e2640232154ab202f4a98845be310e8c68850d2e89245da1f72898e = $this->env->getExtension("native_profiler");
        $__internal_dc340cc59e2640232154ab202f4a98845be310e8c68850d2e89245da1f72898e->enter($__internal_dc340cc59e2640232154ab202f4a98845be310e8c68850d2e89245da1f72898e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "    <div id=\"blocCentre\">
     <div id=\"contenu\">
      <div id=\"Compte\">
       <p>Mon Compte</p>
       <p>
\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
        echo "
       </p>
      </div> \t
      <table class =\"listeAnnonce\">
       ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 14
            echo "\t";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 15
            echo "\t";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 16
            echo "\t";
            $context["etat"] = $this->getAttribute($context["uneAnnonce"], "etat", array());
            // line 17
            echo "
       <tr>
\t   <td class=\"titre\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"statut\">Statut : ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </table>\t    
     </div>
    </div>
";
        
        $__internal_dc340cc59e2640232154ab202f4a98845be310e8c68850d2e89245da1f72898e->leave($__internal_dc340cc59e2640232154ab202f4a98845be310e8c68850d2e89245da1f72898e_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  58 => 13,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*     <div id="blocCentre">*/
/*      <div id="contenu">*/
/*       <div id="Compte">*/
/*        <p>Mon Compte</p>*/
/*        <p>*/
/* 	{{app.session.get('prenom')}}*/
/* 	{{app.session.get('nom')}}*/
/*        </p>*/
/*       </div> 	*/
/*       <table class ="listeAnnonce">*/
/*        {% for uneAnnonce in lesAnnonces %}*/
/* 	{% set titre = uneAnnonce.titre %}*/
/* 	{% set date  = uneAnnonce.date %}*/
/* 	{% set etat  = uneAnnonce.etat %}*/
/* */
/*        <tr>*/
/* 	   <td class="titre">{{titre}}</td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="statut">Statut : {{etat}}</td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>	    */
/*      </div>*/
/*     </div>*/
/* {% endblock %}*/
/*          */
/*     */
/* */
/* */
