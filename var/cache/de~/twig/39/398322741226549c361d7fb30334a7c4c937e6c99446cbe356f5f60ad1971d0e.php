<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8f36ddbbf75550c192692849e18340319e3e80e9fb28cf6463c5e7f0d907c2bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba92ad88b1c2940b385aa3b3fa606d7792c856892c781fb0f9484e631f506497 = $this->env->getExtension("native_profiler");
        $__internal_ba92ad88b1c2940b385aa3b3fa606d7792c856892c781fb0f9484e631f506497->enter($__internal_ba92ad88b1c2940b385aa3b3fa606d7792c856892c781fb0f9484e631f506497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba92ad88b1c2940b385aa3b3fa606d7792c856892c781fb0f9484e631f506497->leave($__internal_ba92ad88b1c2940b385aa3b3fa606d7792c856892c781fb0f9484e631f506497_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_670b8c7fa1591877eda5c9535a18cf683fdfe5416f40aebbbfdcc272327bb33a = $this->env->getExtension("native_profiler");
        $__internal_670b8c7fa1591877eda5c9535a18cf683fdfe5416f40aebbbfdcc272327bb33a->enter($__internal_670b8c7fa1591877eda5c9535a18cf683fdfe5416f40aebbbfdcc272327bb33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_670b8c7fa1591877eda5c9535a18cf683fdfe5416f40aebbbfdcc272327bb33a->leave($__internal_670b8c7fa1591877eda5c9535a18cf683fdfe5416f40aebbbfdcc272327bb33a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
