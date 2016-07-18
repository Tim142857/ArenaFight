<?php

/* ArenaFightBundle:Joueur:Joueur_Profil.html.twig */
class __TwigTemplate_3c2492665cfe5de48ce4e990f284020f04c981c6abe4f5881729080e81ead74d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Joueur:Layout.html.twig", "ArenaFightBundle:Joueur:Joueur_Profil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Joueur:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fda4ab2f510cbc3df2f785ae9a44143457c7b70ca12cfeb577176b76dc2caa6a = $this->env->getExtension("native_profiler");
        $__internal_fda4ab2f510cbc3df2f785ae9a44143457c7b70ca12cfeb577176b76dc2caa6a->enter($__internal_fda4ab2f510cbc3df2f785ae9a44143457c7b70ca12cfeb577176b76dc2caa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Joueur:Joueur_Profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda4ab2f510cbc3df2f785ae9a44143457c7b70ca12cfeb577176b76dc2caa6a->leave($__internal_fda4ab2f510cbc3df2f785ae9a44143457c7b70ca12cfeb577176b76dc2caa6a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bbf057352d5e2ca98ea070606be139b39102cf9e4904a88e2e280004e849726 = $this->env->getExtension("native_profiler");
        $__internal_5bbf057352d5e2ca98ea070606be139b39102cf9e4904a88e2e280004e849726->enter($__internal_5bbf057352d5e2ca98ea070606be139b39102cf9e4904a88e2e280004e849726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "getUsername", array(), "method"), "html", null, true);
        echo "</h2>

    <p>argent:";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "getArgent", array(), "method"), "html", null, true);
        echo "</p>
    <p>nb de persos:";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "getPersonnages", array(), "method")), "html", null, true);
        echo "</p>

";
        
        $__internal_5bbf057352d5e2ca98ea070606be139b39102cf9e4904a88e2e280004e849726->leave($__internal_5bbf057352d5e2ca98ea070606be139b39102cf9e4904a88e2e280004e849726_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Joueur:Joueur_Profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  48 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Joueur:Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <h2>{{ joueur.getUsername() }}</h2>*/
/* */
/*     <p>argent:{{ joueur.getArgent() }}</p>*/
/*     <p>nb de persos:{{ joueur.getPersonnages()|length }}</p>*/
/* */
/* {% endblock %}*/
/* */
