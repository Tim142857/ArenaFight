<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_cb712863ed87738995b28f01189a1d5deb63ed43c6a44deb37079de0bca597f3 extends Twig_Template
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
        $__internal_2aad65c8d815600cd80c2d87e491897a046c6bf623da0a03233fa383d1a63741 = $this->env->getExtension("native_profiler");
        $__internal_2aad65c8d815600cd80c2d87e491897a046c6bf623da0a03233fa383d1a63741->enter($__internal_2aad65c8d815600cd80c2d87e491897a046c6bf623da0a03233fa383d1a63741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aad65c8d815600cd80c2d87e491897a046c6bf623da0a03233fa383d1a63741->leave($__internal_2aad65c8d815600cd80c2d87e491897a046c6bf623da0a03233fa383d1a63741_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_817e259515ff15a733ea7a85abe680c62a34aa780def01fcef4ecef77feaee39 = $this->env->getExtension("native_profiler");
        $__internal_817e259515ff15a733ea7a85abe680c62a34aa780def01fcef4ecef77feaee39->enter($__internal_817e259515ff15a733ea7a85abe680c62a34aa780def01fcef4ecef77feaee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_817e259515ff15a733ea7a85abe680c62a34aa780def01fcef4ecef77feaee39->leave($__internal_817e259515ff15a733ea7a85abe680c62a34aa780def01fcef4ecef77feaee39_prof);

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
