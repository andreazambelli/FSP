<?php

/* FSPBundle:User:connexion.html.twig */
class __TwigTemplate_4b9be68a8f6c5adffa3274ee25b7cd5317d633b7ee2fa6705dd9ad631d695dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:connexion.html.twig", 1);
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
        $__internal_f830882eedd4acd5ebec723e554f41e885b1c5af0afbc5179785ce0da438cd60 = $this->env->getExtension("native_profiler");
        $__internal_f830882eedd4acd5ebec723e554f41e885b1c5af0afbc5179785ce0da438cd60->enter($__internal_f830882eedd4acd5ebec723e554f41e885b1c5af0afbc5179785ce0da438cd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f830882eedd4acd5ebec723e554f41e885b1c5af0afbc5179785ce0da438cd60->leave($__internal_f830882eedd4acd5ebec723e554f41e885b1c5af0afbc5179785ce0da438cd60_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_0a0e90ce0beb882894c58b890510294de557dcc242484fb9d29ccba823e87144 = $this->env->getExtension("native_profiler");
        $__internal_0a0e90ce0beb882894c58b890510294de557dcc242484fb9d29ccba823e87144->enter($__internal_0a0e90ce0beb882894c58b890510294de557dcc242484fb9d29ccba823e87144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
    <div id=\"gererConnexion\">
     <p>Connexion</p>
    </div>
    ";
        // line 8
        if (array_key_exists("message", $context)) {
            // line 9
            echo "      <div class=\"erreur\">
         <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/erreur.png"), "html", null, true);
            echo "\" class=\"erreurLogo\"></img>
       <ul>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul>
      </div>
    ";
        }
        // line 13
        echo "\t
    <form method=\"POST\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fsp_valider_connection");
        echo "\" class=\"formConnexion\">
     <div class=\"connexion\">
          <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"E-mail *\"/>
          <input id=\"info\" type=\"password\" name=\"mdp\" placeholder=\"Mot de passe *\"/>
          <input id=\"valider\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
          <input id=\"annuler\" type=\"reset\" value=\"Annuler\" name\"annuler\"/>
     </div>
    </form>
   </div>
  </div>
";
        
        $__internal_0a0e90ce0beb882894c58b890510294de557dcc242484fb9d29ccba823e87144->leave($__internal_0a0e90ce0beb882894c58b890510294de557dcc242484fb9d29ccba823e87144_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  56 => 11,  52 => 10,  49 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*     <div id="gererConnexion">*/
/*      <p>Connexion</p>*/
/*     </div>*/
/*     {% if(message is defined)%}*/
/*       <div class="erreur">*/
/*          <img src="{{asset('bundles/fsp/images/erreur.png')}}" class="erreurLogo"></img>*/
/*        <ul>{{message}}</ul>*/
/*       </div>*/
/*     {% endif %}	*/
/*     <form method="POST" action="{{path('fsp_valider_connection')}}" class="formConnexion">*/
/*      <div class="connexion">*/
/*           <input id="email" type="text" name="email" placeholder="E-mail *"/>*/
/*           <input id="info" type="password" name="mdp" placeholder="Mot de passe *"/>*/
/*           <input id="valider" type="submit" value="Valider" name="valider"/>*/
/*           <input id="annuler" type="reset" value="Annuler" name"annuler"/>*/
/*      </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
