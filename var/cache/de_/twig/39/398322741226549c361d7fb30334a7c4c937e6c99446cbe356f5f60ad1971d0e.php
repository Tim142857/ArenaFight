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
        $__internal_9d5cdf77ee3d57934c49332caf9efca2485f7644840f08b6334b1ab9f4137668 = $this->env->getExtension("native_profiler");
        $__internal_9d5cdf77ee3d57934c49332caf9efca2485f7644840f08b6334b1ab9f4137668->enter($__internal_9d5cdf77ee3d57934c49332caf9efca2485f7644840f08b6334b1ab9f4137668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d5cdf77ee3d57934c49332caf9efca2485f7644840f08b6334b1ab9f4137668->leave($__internal_9d5cdf77ee3d57934c49332caf9efca2485f7644840f08b6334b1ab9f4137668_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cac4e83f5c2ffbb1630641b10e7110b6b1e7f8d9c000bd924391a2873bff653c = $this->env->getExtension("native_profiler");
        $__internal_cac4e83f5c2ffbb1630641b10e7110b6b1e7f8d9c000bd924391a2873bff653c->enter($__internal_cac4e83f5c2ffbb1630641b10e7110b6b1e7f8d9c000bd924391a2873bff653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cac4e83f5c2ffbb1630641b10e7110b6b1e7f8d9c000bd924391a2873bff653c->leave($__internal_cac4e83f5c2ffbb1630641b10e7110b6b1e7f8d9c000bd924391a2873bff653c_prof);

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
