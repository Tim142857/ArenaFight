<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_0980af5574fe61b97611b88b12b9964ba70fdb1f41aeea94575fcdb5ba7e9c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_ebaafc290d084aa3dcf97b697eb70dee4be8da48e86b4a9323be60008de5eb57 = $this->env->getExtension("native_profiler");
        $__internal_ebaafc290d084aa3dcf97b697eb70dee4be8da48e86b4a9323be60008de5eb57->enter($__internal_ebaafc290d084aa3dcf97b697eb70dee4be8da48e86b4a9323be60008de5eb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebaafc290d084aa3dcf97b697eb70dee4be8da48e86b4a9323be60008de5eb57->leave($__internal_ebaafc290d084aa3dcf97b697eb70dee4be8da48e86b4a9323be60008de5eb57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db05c60d9f45b03003deb12b038eea115f64c006176d3977c518c2fdb1aeaad5 = $this->env->getExtension("native_profiler");
        $__internal_db05c60d9f45b03003deb12b038eea115f64c006176d3977c518c2fdb1aeaad5->enter($__internal_db05c60d9f45b03003deb12b038eea115f64c006176d3977c518c2fdb1aeaad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_db05c60d9f45b03003deb12b038eea115f64c006176d3977c518c2fdb1aeaad5->leave($__internal_db05c60d9f45b03003deb12b038eea115f64c006176d3977c518c2fdb1aeaad5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
