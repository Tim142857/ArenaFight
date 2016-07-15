<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_400ba1df97f77c1d8821c4f583cca6b6b8bbc522a95a6dd69b44936be3dc7a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c7ec2d9a32ba9f005abce0b0d4994452127b4d7f54d71c73f233ee924dd81240 = $this->env->getExtension("native_profiler");
        $__internal_c7ec2d9a32ba9f005abce0b0d4994452127b4d7f54d71c73f233ee924dd81240->enter($__internal_c7ec2d9a32ba9f005abce0b0d4994452127b4d7f54d71c73f233ee924dd81240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ec2d9a32ba9f005abce0b0d4994452127b4d7f54d71c73f233ee924dd81240->leave($__internal_c7ec2d9a32ba9f005abce0b0d4994452127b4d7f54d71c73f233ee924dd81240_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5091481a179af4af65c3f072f15bcd1cde9937c71598d41dff58bed5b29f8b66 = $this->env->getExtension("native_profiler");
        $__internal_5091481a179af4af65c3f072f15bcd1cde9937c71598d41dff58bed5b29f8b66->enter($__internal_5091481a179af4af65c3f072f15bcd1cde9937c71598d41dff58bed5b29f8b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5091481a179af4af65c3f072f15bcd1cde9937c71598d41dff58bed5b29f8b66->leave($__internal_5091481a179af4af65c3f072f15bcd1cde9937c71598d41dff58bed5b29f8b66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
