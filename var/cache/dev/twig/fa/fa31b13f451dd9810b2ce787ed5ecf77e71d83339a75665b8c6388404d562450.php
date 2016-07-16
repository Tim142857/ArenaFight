<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_224ba5b26cbe8a9b93446c1718602f6e4628283531c2b07d88d2dd775d5b9008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_61f68f482b0cd633cda02887f889362918d97a09fb1380760adcf1801195334a = $this->env->getExtension("native_profiler");
        $__internal_61f68f482b0cd633cda02887f889362918d97a09fb1380760adcf1801195334a->enter($__internal_61f68f482b0cd633cda02887f889362918d97a09fb1380760adcf1801195334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f68f482b0cd633cda02887f889362918d97a09fb1380760adcf1801195334a->leave($__internal_61f68f482b0cd633cda02887f889362918d97a09fb1380760adcf1801195334a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_053a83fc617a1605b20d1186417c06dc6ca907245181483dd896efd7ff627223 = $this->env->getExtension("native_profiler");
        $__internal_053a83fc617a1605b20d1186417c06dc6ca907245181483dd896efd7ff627223->enter($__internal_053a83fc617a1605b20d1186417c06dc6ca907245181483dd896efd7ff627223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_053a83fc617a1605b20d1186417c06dc6ca907245181483dd896efd7ff627223->leave($__internal_053a83fc617a1605b20d1186417c06dc6ca907245181483dd896efd7ff627223_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
