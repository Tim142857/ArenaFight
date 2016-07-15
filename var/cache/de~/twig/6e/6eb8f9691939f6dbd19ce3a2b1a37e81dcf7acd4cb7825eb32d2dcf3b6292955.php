<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_de4619649b10fc5fff26752b1b0f963098b7c3f033de0f82c1f6d654bf911659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_ca986e7c65fe8c4a0558d438779f902b4bedcd7a31e32dcaaa996a5deaf521a5 = $this->env->getExtension("native_profiler");
        $__internal_ca986e7c65fe8c4a0558d438779f902b4bedcd7a31e32dcaaa996a5deaf521a5->enter($__internal_ca986e7c65fe8c4a0558d438779f902b4bedcd7a31e32dcaaa996a5deaf521a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca986e7c65fe8c4a0558d438779f902b4bedcd7a31e32dcaaa996a5deaf521a5->leave($__internal_ca986e7c65fe8c4a0558d438779f902b4bedcd7a31e32dcaaa996a5deaf521a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7db45746aca2b47787a44621a67db4b992ca4e00b3a43f1122ced266705d44fa = $this->env->getExtension("native_profiler");
        $__internal_7db45746aca2b47787a44621a67db4b992ca4e00b3a43f1122ced266705d44fa->enter($__internal_7db45746aca2b47787a44621a67db4b992ca4e00b3a43f1122ced266705d44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_7db45746aca2b47787a44621a67db4b992ca4e00b3a43f1122ced266705d44fa->leave($__internal_7db45746aca2b47787a44621a67db4b992ca4e00b3a43f1122ced266705d44fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
