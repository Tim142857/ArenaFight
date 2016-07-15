<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8ebccab0665baf088b6244133e70707329826ab4060214eec5ed651e5ff997cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c42a2b71b5fc61bed079c0d3b6644312fd7b4c0449641990c7bdcdb62daaef56 = $this->env->getExtension("native_profiler");
        $__internal_c42a2b71b5fc61bed079c0d3b6644312fd7b4c0449641990c7bdcdb62daaef56->enter($__internal_c42a2b71b5fc61bed079c0d3b6644312fd7b4c0449641990c7bdcdb62daaef56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42a2b71b5fc61bed079c0d3b6644312fd7b4c0449641990c7bdcdb62daaef56->leave($__internal_c42a2b71b5fc61bed079c0d3b6644312fd7b4c0449641990c7bdcdb62daaef56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60df08f7bfc8996b6c72e712561e46db9d55665dd4b766867fe5c07f8ac8b389 = $this->env->getExtension("native_profiler");
        $__internal_60df08f7bfc8996b6c72e712561e46db9d55665dd4b766867fe5c07f8ac8b389->enter($__internal_60df08f7bfc8996b6c72e712561e46db9d55665dd4b766867fe5c07f8ac8b389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_60df08f7bfc8996b6c72e712561e46db9d55665dd4b766867fe5c07f8ac8b389->leave($__internal_60df08f7bfc8996b6c72e712561e46db9d55665dd4b766867fe5c07f8ac8b389_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
