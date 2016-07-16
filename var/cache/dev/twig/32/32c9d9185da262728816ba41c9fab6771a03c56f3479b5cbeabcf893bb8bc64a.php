<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6314f1c242a4655e88c76b0613225a4f6e3174e6aaa119687d9bf57aa7ac297d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3e0d6763cbf941c42214163ce19f1cb858f5276cd38f05e8fc1e25dda0d41a62 = $this->env->getExtension("native_profiler");
        $__internal_3e0d6763cbf941c42214163ce19f1cb858f5276cd38f05e8fc1e25dda0d41a62->enter($__internal_3e0d6763cbf941c42214163ce19f1cb858f5276cd38f05e8fc1e25dda0d41a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e0d6763cbf941c42214163ce19f1cb858f5276cd38f05e8fc1e25dda0d41a62->leave($__internal_3e0d6763cbf941c42214163ce19f1cb858f5276cd38f05e8fc1e25dda0d41a62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_491a9d88e08002535a61353468d671214886df760872ef9f890e5bb7cffab9ee = $this->env->getExtension("native_profiler");
        $__internal_491a9d88e08002535a61353468d671214886df760872ef9f890e5bb7cffab9ee->enter($__internal_491a9d88e08002535a61353468d671214886df760872ef9f890e5bb7cffab9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_491a9d88e08002535a61353468d671214886df760872ef9f890e5bb7cffab9ee->leave($__internal_491a9d88e08002535a61353468d671214886df760872ef9f890e5bb7cffab9ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
