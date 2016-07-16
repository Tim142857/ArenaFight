<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_3223a1ffcac702034f0aba5572cbce08bd407223b6712c70a10def652eead136 extends Twig_Template
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
        $__internal_5d5ee6a72ce24941f18e31636f0f06b88f7d1bd968072e9abef18ebc8c492d68 = $this->env->getExtension("native_profiler");
        $__internal_5d5ee6a72ce24941f18e31636f0f06b88f7d1bd968072e9abef18ebc8c492d68->enter($__internal_5d5ee6a72ce24941f18e31636f0f06b88f7d1bd968072e9abef18ebc8c492d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5ee6a72ce24941f18e31636f0f06b88f7d1bd968072e9abef18ebc8c492d68->leave($__internal_5d5ee6a72ce24941f18e31636f0f06b88f7d1bd968072e9abef18ebc8c492d68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a94d7351c86de3408fa2d89967cb13c61967a021f7c6b26e0d4b0a4d4b64738 = $this->env->getExtension("native_profiler");
        $__internal_6a94d7351c86de3408fa2d89967cb13c61967a021f7c6b26e0d4b0a4d4b64738->enter($__internal_6a94d7351c86de3408fa2d89967cb13c61967a021f7c6b26e0d4b0a4d4b64738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6a94d7351c86de3408fa2d89967cb13c61967a021f7c6b26e0d4b0a4d4b64738->leave($__internal_6a94d7351c86de3408fa2d89967cb13c61967a021f7c6b26e0d4b0a4d4b64738_prof);

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
