<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0f2ab3054044f255a4ad863818067312c17c03da1e142f11455e0c8c4581526b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_682c7b45c632ae39cf77532b8ee91cea1c1b61edc67077bbf03fcb075fd8a58b = $this->env->getExtension("native_profiler");
        $__internal_682c7b45c632ae39cf77532b8ee91cea1c1b61edc67077bbf03fcb075fd8a58b->enter($__internal_682c7b45c632ae39cf77532b8ee91cea1c1b61edc67077bbf03fcb075fd8a58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682c7b45c632ae39cf77532b8ee91cea1c1b61edc67077bbf03fcb075fd8a58b->leave($__internal_682c7b45c632ae39cf77532b8ee91cea1c1b61edc67077bbf03fcb075fd8a58b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c97cbc8b5b46ee26c4f243be8bac2cef211c804ccbb1b4e10a89a8b3744d4a23 = $this->env->getExtension("native_profiler");
        $__internal_c97cbc8b5b46ee26c4f243be8bac2cef211c804ccbb1b4e10a89a8b3744d4a23->enter($__internal_c97cbc8b5b46ee26c4f243be8bac2cef211c804ccbb1b4e10a89a8b3744d4a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c97cbc8b5b46ee26c4f243be8bac2cef211c804ccbb1b4e10a89a8b3744d4a23->leave($__internal_c97cbc8b5b46ee26c4f243be8bac2cef211c804ccbb1b4e10a89a8b3744d4a23_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
