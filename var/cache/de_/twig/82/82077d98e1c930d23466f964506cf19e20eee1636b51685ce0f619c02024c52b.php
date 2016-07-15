<?php

/* ArenaFightBundle::Authentification.html.twig */
class __TwigTemplate_5c6cc6cf8302de64bb776ea6849a830af6a26646d788d58275b7a50c409815bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle::Layout.html.twig", "ArenaFightBundle::Authentification.html.twig", 1);
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
        $__internal_7caf6fe21fde9fbbee39f77a219568edbb150bb02167fb486724faa7d3cf4b7b = $this->env->getExtension("native_profiler");
        $__internal_7caf6fe21fde9fbbee39f77a219568edbb150bb02167fb486724faa7d3cf4b7b->enter($__internal_7caf6fe21fde9fbbee39f77a219568edbb150bb02167fb486724faa7d3cf4b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle::Authentification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7caf6fe21fde9fbbee39f77a219568edbb150bb02167fb486724faa7d3cf4b7b->leave($__internal_7caf6fe21fde9fbbee39f77a219568edbb150bb02167fb486724faa7d3cf4b7b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a1bcaa4ed50fe75886278292f50371b927f81edea87d7cb4614692cef5a5f34 = $this->env->getExtension("native_profiler");
        $__internal_6a1bcaa4ed50fe75886278292f50371b927f81edea87d7cb4614692cef5a5f34->enter($__internal_6a1bcaa4ed50fe75886278292f50371b927f81edea87d7cb4614692cef5a5f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   

";
        
        $__internal_6a1bcaa4ed50fe75886278292f50371b927f81edea87d7cb4614692cef5a5f34->leave($__internal_6a1bcaa4ed50fe75886278292f50371b927f81edea87d7cb4614692cef5a5f34_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle::Authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle::Layout.html.twig" %}*/
/* {% block body %}   */
/* */
/* {% endblock %}*/
/* */
