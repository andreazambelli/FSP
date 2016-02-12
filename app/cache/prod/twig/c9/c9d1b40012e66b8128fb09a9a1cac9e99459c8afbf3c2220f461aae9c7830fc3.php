<?php

/* FSPBundle:User:connexion.html.twig */
class __TwigTemplate_c4ba63784867449b5aaf2b2f917dc52a882e04e3bfdafdc734bae3ef7eb9ba6a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</ul>
      </div>
    ";
        }
        // line 13
        echo "\t
    <form method=\"POST\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fsp_validerconnexion");
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
        return array (  56 => 14,  53 => 13,  47 => 11,  43 => 10,  40 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
/*     <form method="POST" action="{{path('fsp_validerconnexion')}}" class="formConnexion">*/
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
