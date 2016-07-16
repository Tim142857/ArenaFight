<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5ee963080eff10a9ebc838c2a8f04bf38861313cd6ebeb43b0e2a31b4acf0e4b extends Twig_Template
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
        $__internal_f6d5025c5effbe004aaf1b3d2ece9853bc875124954d2f0398c9af8aa8c5364e = $this->env->getExtension("native_profiler");
        $__internal_f6d5025c5effbe004aaf1b3d2ece9853bc875124954d2f0398c9af8aa8c5364e->enter($__internal_f6d5025c5effbe004aaf1b3d2ece9853bc875124954d2f0398c9af8aa8c5364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d5025c5effbe004aaf1b3d2ece9853bc875124954d2f0398c9af8aa8c5364e->leave($__internal_f6d5025c5effbe004aaf1b3d2ece9853bc875124954d2f0398c9af8aa8c5364e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8db382f10251caabf60e44a5997de28e51003a69015f2c75b205e2337788047f = $this->env->getExtension("native_profiler");
        $__internal_8db382f10251caabf60e44a5997de28e51003a69015f2c75b205e2337788047f->enter($__internal_8db382f10251caabf60e44a5997de28e51003a69015f2c75b205e2337788047f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8db382f10251caabf60e44a5997de28e51003a69015f2c75b205e2337788047f->leave($__internal_8db382f10251caabf60e44a5997de28e51003a69015f2c75b205e2337788047f_prof);

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
