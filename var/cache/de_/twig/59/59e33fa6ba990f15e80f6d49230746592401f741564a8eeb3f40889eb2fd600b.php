<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1eddb73043ed1b17d5bdb61a9f7c8457373aea3a9902d5efc995cfa7bbc2006c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_7bc820550c3814819ba04ca860292d4c7d39ca6a612a511dca79d27d4cf709da = $this->env->getExtension("native_profiler");
        $__internal_7bc820550c3814819ba04ca860292d4c7d39ca6a612a511dca79d27d4cf709da->enter($__internal_7bc820550c3814819ba04ca860292d4c7d39ca6a612a511dca79d27d4cf709da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc820550c3814819ba04ca860292d4c7d39ca6a612a511dca79d27d4cf709da->leave($__internal_7bc820550c3814819ba04ca860292d4c7d39ca6a612a511dca79d27d4cf709da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_061d03eb9acf525f341805f89273f738acf9aa67dfc5ad869618f70950f071bc = $this->env->getExtension("native_profiler");
        $__internal_061d03eb9acf525f341805f89273f738acf9aa67dfc5ad869618f70950f071bc->enter($__internal_061d03eb9acf525f341805f89273f738acf9aa67dfc5ad869618f70950f071bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_061d03eb9acf525f341805f89273f738acf9aa67dfc5ad869618f70950f071bc->leave($__internal_061d03eb9acf525f341805f89273f738acf9aa67dfc5ad869618f70950f071bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
