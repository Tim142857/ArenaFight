<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8092c41198ced89545310648cb8b02897bd241b7c51365df986510c642c2e86a extends Twig_Template
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
        $__internal_0accdecaf57aec1cad9ee242400a679a908d2f19c31c65b73b371675a56bb777 = $this->env->getExtension("native_profiler");
        $__internal_0accdecaf57aec1cad9ee242400a679a908d2f19c31c65b73b371675a56bb777->enter($__internal_0accdecaf57aec1cad9ee242400a679a908d2f19c31c65b73b371675a56bb777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0accdecaf57aec1cad9ee242400a679a908d2f19c31c65b73b371675a56bb777->leave($__internal_0accdecaf57aec1cad9ee242400a679a908d2f19c31c65b73b371675a56bb777_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e326f85815cff26f4812583da1a154f83555d819b8d87575a89b7c5305728714 = $this->env->getExtension("native_profiler");
        $__internal_e326f85815cff26f4812583da1a154f83555d819b8d87575a89b7c5305728714->enter($__internal_e326f85815cff26f4812583da1a154f83555d819b8d87575a89b7c5305728714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e326f85815cff26f4812583da1a154f83555d819b8d87575a89b7c5305728714->leave($__internal_e326f85815cff26f4812583da1a154f83555d819b8d87575a89b7c5305728714_prof);

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
