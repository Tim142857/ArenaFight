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
        $__internal_264a4a29e2a1df114cd60706fb1d9db153aac550b2b767e777b69e3ef20479ea = $this->env->getExtension("native_profiler");
        $__internal_264a4a29e2a1df114cd60706fb1d9db153aac550b2b767e777b69e3ef20479ea->enter($__internal_264a4a29e2a1df114cd60706fb1d9db153aac550b2b767e777b69e3ef20479ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_264a4a29e2a1df114cd60706fb1d9db153aac550b2b767e777b69e3ef20479ea->leave($__internal_264a4a29e2a1df114cd60706fb1d9db153aac550b2b767e777b69e3ef20479ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80622dddcaeaa403c5c0a9ff83c40d2b5ca71bccf4fc971243c001d30eecad9b = $this->env->getExtension("native_profiler");
        $__internal_80622dddcaeaa403c5c0a9ff83c40d2b5ca71bccf4fc971243c001d30eecad9b->enter($__internal_80622dddcaeaa403c5c0a9ff83c40d2b5ca71bccf4fc971243c001d30eecad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_80622dddcaeaa403c5c0a9ff83c40d2b5ca71bccf4fc971243c001d30eecad9b->leave($__internal_80622dddcaeaa403c5c0a9ff83c40d2b5ca71bccf4fc971243c001d30eecad9b_prof);

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
