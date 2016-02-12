<?php

/* FSPBundle:User:erreur.html.twig */
class __TwigTemplate_3e9893fb2371dabb951f850fc63efd2feff744a44196d905a30414baa9391655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:erreur.html.twig", 1);
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
        $__internal_b72eec335280e5761cb03e2bedbcecd2c472cb4dda44f1434e12cc8523cab992 = $this->env->getExtension("native_profiler");
        $__internal_b72eec335280e5761cb03e2bedbcecd2c472cb4dda44f1434e12cc8523cab992->enter($__internal_b72eec335280e5761cb03e2bedbcecd2c472cb4dda44f1434e12cc8523cab992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:erreur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72eec335280e5761cb03e2bedbcecd2c472cb4dda44f1434e12cc8523cab992->leave($__internal_b72eec335280e5761cb03e2bedbcecd2c472cb4dda44f1434e12cc8523cab992_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_67314f0c038c58865753014a4a9e3fd99ca9b637109844ebbe61b5c35682f017 = $this->env->getExtension("native_profiler");
        $__internal_67314f0c038c58865753014a4a9e3fd99ca9b637109844ebbe61b5c35682f017->enter($__internal_67314f0c038c58865753014a4a9e3fd99ca9b637109844ebbe61b5c35682f017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererConnexion\">
     <p>Connexion</p>
    </div>
    ";
        // line 8
        if (array_key_exists("message", $context)) {
            // line 9
            echo "      <div class=\"erreur\">
       <ul>";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul>
      </div>
    ";
        }
        // line 13
        echo "    <form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fsp_connexion");
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
        
        $__internal_67314f0c038c58865753014a4a9e3fd99ca9b637109844ebbe61b5c35682f017->leave($__internal_67314f0c038c58865753014a4a9e3fd99ca9b637109844ebbe61b5c35682f017_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 10,  49 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererConnexion">*/
/*      <p>Connexion</p>*/
/*     </div>*/
/*     {% if(message is defined)%}*/
/*       <div class="erreur">*/
/*        <ul>{{message}}</ul>*/
/*       </div>*/
/*     {% endif %}*/
/*     <form method="POST" action="{{path('fsp_connexion')}}" class="formConnexion">*/
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
