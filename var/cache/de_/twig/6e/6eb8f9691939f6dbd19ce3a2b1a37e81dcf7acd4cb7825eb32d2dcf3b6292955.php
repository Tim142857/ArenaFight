<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_de4619649b10fc5fff26752b1b0f963098b7c3f033de0f82c1f6d654bf911659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_9573447f0d65a976c5ce5b72139964d10bde452e1cb97b1d1b32a8277f60adc6 = $this->env->getExtension("native_profiler");
        $__internal_9573447f0d65a976c5ce5b72139964d10bde452e1cb97b1d1b32a8277f60adc6->enter($__internal_9573447f0d65a976c5ce5b72139964d10bde452e1cb97b1d1b32a8277f60adc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9573447f0d65a976c5ce5b72139964d10bde452e1cb97b1d1b32a8277f60adc6->leave($__internal_9573447f0d65a976c5ce5b72139964d10bde452e1cb97b1d1b32a8277f60adc6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db2ded227a7d711366ef07791e9019c4a8c18b75de3edbfea022397bec3d1933 = $this->env->getExtension("native_profiler");
        $__internal_db2ded227a7d711366ef07791e9019c4a8c18b75de3edbfea022397bec3d1933->enter($__internal_db2ded227a7d711366ef07791e9019c4a8c18b75de3edbfea022397bec3d1933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_db2ded227a7d711366ef07791e9019c4a8c18b75de3edbfea022397bec3d1933->leave($__internal_db2ded227a7d711366ef07791e9019c4a8c18b75de3edbfea022397bec3d1933_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
