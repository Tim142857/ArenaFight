<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_a82b55d74430184f46daf9f438ec484c56ad77cc9fef71e2365eeae11d0f9f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_07882fa9752329ba145070aacc4db57ba9e91935448afb58125b72badbaafe3c = $this->env->getExtension("native_profiler");
        $__internal_07882fa9752329ba145070aacc4db57ba9e91935448afb58125b72badbaafe3c->enter($__internal_07882fa9752329ba145070aacc4db57ba9e91935448afb58125b72badbaafe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07882fa9752329ba145070aacc4db57ba9e91935448afb58125b72badbaafe3c->leave($__internal_07882fa9752329ba145070aacc4db57ba9e91935448afb58125b72badbaafe3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abfa70bf2bc326e55a25af3c1a35b3692cecebe8b08c1b6341c02a7b408a7e1a = $this->env->getExtension("native_profiler");
        $__internal_abfa70bf2bc326e55a25af3c1a35b3692cecebe8b08c1b6341c02a7b408a7e1a->enter($__internal_abfa70bf2bc326e55a25af3c1a35b3692cecebe8b08c1b6341c02a7b408a7e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_abfa70bf2bc326e55a25af3c1a35b3692cecebe8b08c1b6341c02a7b408a7e1a->leave($__internal_abfa70bf2bc326e55a25af3c1a35b3692cecebe8b08c1b6341c02a7b408a7e1a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
