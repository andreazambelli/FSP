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
        $__internal_73e462cc7a9332173d40e17b1e8ab95f6a77dc7845e2bd878a762d91414653b6 = $this->env->getExtension("native_profiler");
        $__internal_73e462cc7a9332173d40e17b1e8ab95f6a77dc7845e2bd878a762d91414653b6->enter($__internal_73e462cc7a9332173d40e17b1e8ab95f6a77dc7845e2bd878a762d91414653b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e462cc7a9332173d40e17b1e8ab95f6a77dc7845e2bd878a762d91414653b6->leave($__internal_73e462cc7a9332173d40e17b1e8ab95f6a77dc7845e2bd878a762d91414653b6_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_b3a966746ba4464ef25dd10c10afa93e7815c598d4ab2eac04cb565c84de3aa1 = $this->env->getExtension("native_profiler");
        $__internal_b3a966746ba4464ef25dd10c10afa93e7815c598d4ab2eac04cb565c84de3aa1->enter($__internal_b3a966746ba4464ef25dd10c10afa93e7815c598d4ab2eac04cb565c84de3aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        // line 12
        echo "\t
    <form method=\"POST\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fsp_connexion");
        echo "\" class=\"formConnexion\">
     <div class=\"connexion\">
          <input id=\"email\" type=\"text\" placeholder=\"E-mail *\"/>
          <input id=\"info\" type=\"password\" placeholder=\"Mot de passe *\"/>
          <input id=\"valider\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
          <input id=\"annuler\" type=\"reset\" value=\"Annuler\" name\"annuler\"/>
     </div>
    </form>
   </div>
  </div>
";
        
        $__internal_b3a966746ba4464ef25dd10c10afa93e7815c598d4ab2eac04cb565c84de3aa1->leave($__internal_b3a966746ba4464ef25dd10c10afa93e7815c598d4ab2eac04cb565c84de3aa1_prof);

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
        return array (  61 => 13,  58 => 12,  52 => 10,  49 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererConnexion">*/
/*      <p>Connexion</p>*/
/*     </div>*/
/*     {% if (message is defined)%}*/
/*       <div class="erreur">*/
/*        <ul>{{message}}</ul>*/
/*       </div>*/
/*     {% endif %}	*/
/*     <form method="POST" action="{{path('fsp_connexion')}}" class="formConnexion">*/
/*      <div class="connexion">*/
/*           <input id="email" type="text" placeholder="E-mail *"/>*/
/*           <input id="info" type="password" placeholder="Mot de passe *"/>*/
/*           <input id="valider" type="submit" value="Valider" name="valider"/>*/
/*           <input id="annuler" type="reset" value="Annuler" name"annuler"/>*/
/*      </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
