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
        $__internal_3b45a77a9941e90aa75185dd20dd24c786c6cd03ac580dbb9c4cd7f3af04c115 = $this->env->getExtension("native_profiler");
        $__internal_3b45a77a9941e90aa75185dd20dd24c786c6cd03ac580dbb9c4cd7f3af04c115->enter($__internal_3b45a77a9941e90aa75185dd20dd24c786c6cd03ac580dbb9c4cd7f3af04c115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b45a77a9941e90aa75185dd20dd24c786c6cd03ac580dbb9c4cd7f3af04c115->leave($__internal_3b45a77a9941e90aa75185dd20dd24c786c6cd03ac580dbb9c4cd7f3af04c115_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_47dd792628e61a081825e6fbc796727683bcfdb19765104a5969402a983da89b = $this->env->getExtension("native_profiler");
        $__internal_47dd792628e61a081825e6fbc796727683bcfdb19765104a5969402a983da89b->enter($__internal_47dd792628e61a081825e6fbc796727683bcfdb19765104a5969402a983da89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererInscription\">
     <p>Inscription</p>
    </div>
    <form class=\"formInscription\">
      <div class=\"inscription\">
       <input id=\"nom\" type=\"text\" placeholder=\"Nom *\"/>
       <input id=\"info\" type=\"text\" placeholder=\"Prénom *\"/>
       <input id=\"info\" type=\"text\" placeholder=\"Date de Naissance *\"/>
       <input id=\"info\" type=\"text\" placeholder=\"Pays *\"/>
       <input id=\"info\" type=\"text\" placeholder=\"E-mail *\"/>
       <input id=\"info\" type=\"password\" placeholder=\"Mot de Passe *\"/>
       <input id=\"info\" type=\"password\" placeholder=\"Confirmation Mot de Passe *\"/>
       <input id=\"validerIns\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
       <input id=\"annulerIns\" type=\"reset\" value=\"Annuler\" name=\"annuler\"/>
      </div>
    </form>
   </div>
  </div>
";
        
        $__internal_47dd792628e61a081825e6fbc796727683bcfdb19765104a5969402a983da89b->leave($__internal_47dd792628e61a081825e6fbc796727683bcfdb19765104a5969402a983da89b_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererInscription">*/
/*      <p>Inscription</p>*/
/*     </div>*/
/*     <form class="formInscription">*/
/*       <div class="inscription">*/
/*        <input id="nom" type="text" placeholder="Nom *"/>*/
/*        <input id="info" type="text" placeholder="Prénom *"/>*/
/*        <input id="info" type="text" placeholder="Date de Naissance *"/>*/
/*        <input id="info" type="text" placeholder="Pays *"/>*/
/*        <input id="info" type="text" placeholder="E-mail *"/>*/
/*        <input id="info" type="password" placeholder="Mot de Passe *"/>*/
/*        <input id="info" type="password" placeholder="Confirmation Mot de Passe *"/>*/
/*        <input id="validerIns" type="submit" value="Valider" name="valider"/>*/
/*        <input id="annulerIns" type="reset" value="Annuler" name="annuler"/>*/
/*       </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
