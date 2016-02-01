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
        $__internal_6a69af6f785a07b54c1642e66debc82d983b3abc09e89ed59776aeb896cb78d2 = $this->env->getExtension("native_profiler");
        $__internal_6a69af6f785a07b54c1642e66debc82d983b3abc09e89ed59776aeb896cb78d2->enter($__internal_6a69af6f785a07b54c1642e66debc82d983b3abc09e89ed59776aeb896cb78d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a69af6f785a07b54c1642e66debc82d983b3abc09e89ed59776aeb896cb78d2->leave($__internal_6a69af6f785a07b54c1642e66debc82d983b3abc09e89ed59776aeb896cb78d2_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_8ce5e709d7cf3617491743254848259d680f683fe82ae4d230a69e5b8a639a50 = $this->env->getExtension("native_profiler");
        $__internal_8ce5e709d7cf3617491743254848259d680f683fe82ae4d230a69e5b8a639a50->enter($__internal_8ce5e709d7cf3617491743254848259d680f683fe82ae4d230a69e5b8a639a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        echo $this->env->getExtension('routing')->getPath("fsp_validerconnexion");
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
        
        $__internal_8ce5e709d7cf3617491743254848259d680f683fe82ae4d230a69e5b8a639a50->leave($__internal_8ce5e709d7cf3617491743254848259d680f683fe82ae4d230a69e5b8a639a50_prof);

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
/*     {% if (message is defined)%}*/
/*       <div class="erreur">*/
/*        <ul>{{message}}</ul>*/
/*       </div>*/
/*     {% endif %}*/
/*     <form method="POST" action="{{path('fsp_validerconnexion')}}" class="formConnexion">*/
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
