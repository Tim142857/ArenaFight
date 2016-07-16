<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ad1e106de6740110e6a414a2e6d8bae2ea8d40e930678af6d78447e12ad71f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f1a7224eac879a534564755039d7daf8ac027ec265faffcb32d30e9c6b608834 = $this->env->getExtension("native_profiler");
        $__internal_f1a7224eac879a534564755039d7daf8ac027ec265faffcb32d30e9c6b608834->enter($__internal_f1a7224eac879a534564755039d7daf8ac027ec265faffcb32d30e9c6b608834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a7224eac879a534564755039d7daf8ac027ec265faffcb32d30e9c6b608834->leave($__internal_f1a7224eac879a534564755039d7daf8ac027ec265faffcb32d30e9c6b608834_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25e3d3424fb70cffccc4810d8f0094fb6512500646722e9a4e186683ed561e9f = $this->env->getExtension("native_profiler");
        $__internal_25e3d3424fb70cffccc4810d8f0094fb6512500646722e9a4e186683ed561e9f->enter($__internal_25e3d3424fb70cffccc4810d8f0094fb6512500646722e9a4e186683ed561e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_25e3d3424fb70cffccc4810d8f0094fb6512500646722e9a4e186683ed561e9f->leave($__internal_25e3d3424fb70cffccc4810d8f0094fb6512500646722e9a4e186683ed561e9f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
