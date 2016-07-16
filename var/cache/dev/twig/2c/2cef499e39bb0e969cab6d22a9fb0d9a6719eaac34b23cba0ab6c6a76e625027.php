<?php

/* @ArenaFight/Joueur/Combat.html.twig */
class __TwigTemplate_a592467bc018ae0b0e8d4f5c92e58d4467275c5f91824111e06980e4ebf97541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "@ArenaFight/Joueur/Combat.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fb479699baf42a921345ec47d7bbb57e86d13b0027c3c51a5c23f93c92039de = $this->env->getExtension("native_profiler");
        $__internal_9fb479699baf42a921345ec47d7bbb57e86d13b0027c3c51a5c23f93c92039de->enter($__internal_9fb479699baf42a921345ec47d7bbb57e86d13b0027c3c51a5c23f93c92039de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArenaFight/Joueur/Combat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb479699baf42a921345ec47d7bbb57e86d13b0027c3c51a5c23f93c92039de->leave($__internal_9fb479699baf42a921345ec47d7bbb57e86d13b0027c3c51a5c23f93c92039de_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_576894b053a104d0c42e3baf81d7440c983620abfdc90484da984f41ca989aaa = $this->env->getExtension("native_profiler");
        $__internal_576894b053a104d0c42e3baf81d7440c983620abfdc90484da984f41ca989aaa->enter($__internal_576894b053a104d0c42e3baf81d7440c983620abfdc90484da984f41ca989aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Page des combats
";
        
        $__internal_576894b053a104d0c42e3baf81d7440c983620abfdc90484da984f41ca989aaa->leave($__internal_576894b053a104d0c42e3baf81d7440c983620abfdc90484da984f41ca989aaa_prof);

    }

    public function getTemplateName()
    {
        return "@ArenaFight/Joueur/Combat.html.twig";
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
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/*     Page des combats*/
/* {% endblock %}*/
/* */
