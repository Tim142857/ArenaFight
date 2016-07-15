<?php

/* ArenaFightBundle::Accueil.html.twig */
class __TwigTemplate_a01a5e2c05eca37f502a8469ccfde1d5840363f7af309c2653ea7e91bb50cfc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle::Accueil.html.twig", 1);
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
        $__internal_97f7fc8122c38f5af75e6027eb51b11528cf62cfa39b82d5a635389262cde3da = $this->env->getExtension("native_profiler");
        $__internal_97f7fc8122c38f5af75e6027eb51b11528cf62cfa39b82d5a635389262cde3da->enter($__internal_97f7fc8122c38f5af75e6027eb51b11528cf62cfa39b82d5a635389262cde3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97f7fc8122c38f5af75e6027eb51b11528cf62cfa39b82d5a635389262cde3da->leave($__internal_97f7fc8122c38f5af75e6027eb51b11528cf62cfa39b82d5a635389262cde3da_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd9bab7719c13ad99810cbb9395ebeff81aa0a330b36358be9c927a291ed97a9 = $this->env->getExtension("native_profiler");
        $__internal_cd9bab7719c13ad99810cbb9395ebeff81aa0a330b36358be9c927a291ed97a9->enter($__internal_cd9bab7719c13ad99810cbb9395ebeff81aa0a330b36358be9c927a291ed97a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_cd9bab7719c13ad99810cbb9395ebeff81aa0a330b36358be9c927a291ed97a9->leave($__internal_cd9bab7719c13ad99810cbb9395ebeff81aa0a330b36358be9c927a291ed97a9_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Accueil.html.twig";
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
/* */
/* */
/* {% endblock %}*/
/* */
