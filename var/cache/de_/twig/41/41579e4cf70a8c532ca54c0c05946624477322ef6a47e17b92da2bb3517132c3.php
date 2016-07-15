<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a0e6c2f9a2c39823de684ba3516c91a0ed0fdccc10177f2ff22726cdfde93220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1f23f6fc546559c17e6f96e6989d0c956fcde12ee94d480130265244a04bf748 = $this->env->getExtension("native_profiler");
        $__internal_1f23f6fc546559c17e6f96e6989d0c956fcde12ee94d480130265244a04bf748->enter($__internal_1f23f6fc546559c17e6f96e6989d0c956fcde12ee94d480130265244a04bf748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f23f6fc546559c17e6f96e6989d0c956fcde12ee94d480130265244a04bf748->leave($__internal_1f23f6fc546559c17e6f96e6989d0c956fcde12ee94d480130265244a04bf748_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4921f2d8fc8dd036de9e862884516561f0d32018320ff9c321cc370eaf16f42c = $this->env->getExtension("native_profiler");
        $__internal_4921f2d8fc8dd036de9e862884516561f0d32018320ff9c321cc370eaf16f42c->enter($__internal_4921f2d8fc8dd036de9e862884516561f0d32018320ff9c321cc370eaf16f42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4921f2d8fc8dd036de9e862884516561f0d32018320ff9c321cc370eaf16f42c->leave($__internal_4921f2d8fc8dd036de9e862884516561f0d32018320ff9c321cc370eaf16f42c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
