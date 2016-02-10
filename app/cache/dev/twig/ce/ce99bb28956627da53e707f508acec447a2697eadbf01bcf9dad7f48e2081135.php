<?php

/* FSPBundle:User:inscription.html.twig */
class __TwigTemplate_9631ff6192622da61b3015de9e3134212542461a0055371e38019181c7d165c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:inscription.html.twig", 1);
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
        $__internal_03f83a38da302eaf6e700955d773f0895eadb544351edfbfda79fb3994518741 = $this->env->getExtension("native_profiler");
        $__internal_03f83a38da302eaf6e700955d773f0895eadb544351edfbfda79fb3994518741->enter($__internal_03f83a38da302eaf6e700955d773f0895eadb544351edfbfda79fb3994518741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f83a38da302eaf6e700955d773f0895eadb544351edfbfda79fb3994518741->leave($__internal_03f83a38da302eaf6e700955d773f0895eadb544351edfbfda79fb3994518741_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_11adbbb523e2db66665c2830e0dc3f531d334a0f7b459980078fda53be113823 = $this->env->getExtension("native_profiler");
        $__internal_11adbbb523e2db66665c2830e0dc3f531d334a0f7b459980078fda53be113823->enter($__internal_11adbbb523e2db66665c2830e0dc3f531d334a0f7b459980078fda53be113823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
    <div id=\"gererInscription\">
     <p>Inscription</p>
    </div>
    <form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fsp_validerinscription");
        echo "\" class=\"formInscription\">
      <div class=\"inscription\">
       <input id=\"nom\" type=\"text\" name=\"nom\" placeholder=\"Nom *\"/>
       <input id=\"info\" type=\"text\" name=\"prenom\" placeholder=\"Prénom *\"/>
       <input id=\"info\" type=\"text\" name=\"dateNaissance\" placeholder=\"Date de Naissance *\"/>
       <input id=\"info\" type=\"text\" name=\"pays\" placeholder=\"Pays *\"/>
       <input id=\"info\" type=\"text\" name=\"email\" placeholder=\"E-mail *\"/>
       <input id=\"info\" type=\"password\" name=\"mdp\" placeholder=\"Mot de Passe *\"/>
       <input id=\"validerIns\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
       <input id=\"annulerIns\" type=\"reset\" value=\"Annuler\" name=\"annuler\"/>
      </div>
    </form>
   </div>
  </div>
";
        
        $__internal_11adbbb523e2db66665c2830e0dc3f531d334a0f7b459980078fda53be113823->leave($__internal_11adbbb523e2db66665c2830e0dc3f531d334a0f7b459980078fda53be113823_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*     <div id="gererInscription">*/
/*      <p>Inscription</p>*/
/*     </div>*/
/*     <form method="POST" action="{{path('fsp_validerinscription')}}" class="formInscription">*/
/*       <div class="inscription">*/
/*        <input id="nom" type="text" name="nom" placeholder="Nom *"/>*/
/*        <input id="info" type="text" name="prenom" placeholder="Prénom *"/>*/
/*        <input id="info" type="text" name="dateNaissance" placeholder="Date de Naissance *"/>*/
/*        <input id="info" type="text" name="pays" placeholder="Pays *"/>*/
/*        <input id="info" type="text" name="email" placeholder="E-mail *"/>*/
/*        <input id="info" type="password" name="mdp" placeholder="Mot de Passe *"/>*/
/*        <input id="validerIns" type="submit" value="Valider" name="valider"/>*/
/*        <input id="annulerIns" type="reset" value="Annuler" name="annuler"/>*/
/*       </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
