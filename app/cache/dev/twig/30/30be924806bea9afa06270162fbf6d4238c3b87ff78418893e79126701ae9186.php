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
        $__internal_74887a57a09166296bccebf9d0359cc69149dc98758d55fe8db387d4bed7dd66 = $this->env->getExtension("native_profiler");
        $__internal_74887a57a09166296bccebf9d0359cc69149dc98758d55fe8db387d4bed7dd66->enter($__internal_74887a57a09166296bccebf9d0359cc69149dc98758d55fe8db387d4bed7dd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:compte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74887a57a09166296bccebf9d0359cc69149dc98758d55fe8db387d4bed7dd66->leave($__internal_74887a57a09166296bccebf9d0359cc69149dc98758d55fe8db387d4bed7dd66_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_80782809cbab0e1df9dc8ca825b2850da5b54257ca871f774ac3b365e7f53eab = $this->env->getExtension("native_profiler");
        $__internal_80782809cbab0e1df9dc8ca825b2850da5b54257ca871f774ac3b365e7f53eab->enter($__internal_80782809cbab0e1df9dc8ca825b2850da5b54257ca871f774ac3b365e7f53eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
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
           <td class=\"titre\">";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</td>
           <td class=\"date\">Le ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\">Statut : ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
            echo "</td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </table>
     </div>
    </div>
";
        
        $__internal_80782809cbab0e1df9dc8ca825b2850da5b54257ca871f774ac3b365e7f53eab->leave($__internal_80782809cbab0e1df9dc8ca825b2850da5b54257ca871f774ac3b365e7f53eab_prof);

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
        return array (  101 => 28,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  60 => 15,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
/* */
/*      <table class ="listeAnnonce">*/
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
