<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5b7b2f1b056df9a9442b887807d2565d7f0bf6cc5bfc35417c84360607f86735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_89d076b072fa2b49a40361bb6733a4fdfcc5c882aed5ada319f411ce5208c44a = $this->env->getExtension("native_profiler");
        $__internal_89d076b072fa2b49a40361bb6733a4fdfcc5c882aed5ada319f411ce5208c44a->enter($__internal_89d076b072fa2b49a40361bb6733a4fdfcc5c882aed5ada319f411ce5208c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d076b072fa2b49a40361bb6733a4fdfcc5c882aed5ada319f411ce5208c44a->leave($__internal_89d076b072fa2b49a40361bb6733a4fdfcc5c882aed5ada319f411ce5208c44a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19ed44dbded0bb8b37fb4ac7546bf08e81d6916517d88e7ad5ee01992914b2ad = $this->env->getExtension("native_profiler");
        $__internal_19ed44dbded0bb8b37fb4ac7546bf08e81d6916517d88e7ad5ee01992914b2ad->enter($__internal_19ed44dbded0bb8b37fb4ac7546bf08e81d6916517d88e7ad5ee01992914b2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_19ed44dbded0bb8b37fb4ac7546bf08e81d6916517d88e7ad5ee01992914b2ad->leave($__internal_19ed44dbded0bb8b37fb4ac7546bf08e81d6916517d88e7ad5ee01992914b2ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
