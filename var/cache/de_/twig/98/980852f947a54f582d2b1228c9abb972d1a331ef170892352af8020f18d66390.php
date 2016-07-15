<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_92ae604d4b60c98e8827063d0a11d6b359bb91700fcb9b5961888740e5e98a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ace778f2e4e4f322570be86c10e203b1d5644eb521224677486af4dd22531c7c = $this->env->getExtension("native_profiler");
        $__internal_ace778f2e4e4f322570be86c10e203b1d5644eb521224677486af4dd22531c7c->enter($__internal_ace778f2e4e4f322570be86c10e203b1d5644eb521224677486af4dd22531c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace778f2e4e4f322570be86c10e203b1d5644eb521224677486af4dd22531c7c->leave($__internal_ace778f2e4e4f322570be86c10e203b1d5644eb521224677486af4dd22531c7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e976da52ab2a933b8796add6bc264edfbc26a32afe06e37747dd605ccab7e2b9 = $this->env->getExtension("native_profiler");
        $__internal_e976da52ab2a933b8796add6bc264edfbc26a32afe06e37747dd605ccab7e2b9->enter($__internal_e976da52ab2a933b8796add6bc264edfbc26a32afe06e37747dd605ccab7e2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e976da52ab2a933b8796add6bc264edfbc26a32afe06e37747dd605ccab7e2b9->leave($__internal_e976da52ab2a933b8796add6bc264edfbc26a32afe06e37747dd605ccab7e2b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
