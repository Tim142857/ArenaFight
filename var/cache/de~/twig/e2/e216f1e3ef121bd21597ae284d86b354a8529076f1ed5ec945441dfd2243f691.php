<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_432119101c8bc1561455388c5b835faf96d33a7629a787ac332a3b9faecd424e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_6a38f2cca9234e4a83e299097eab8f3492c1f723199d92d78c927c165ef89162 = $this->env->getExtension("native_profiler");
        $__internal_6a38f2cca9234e4a83e299097eab8f3492c1f723199d92d78c927c165ef89162->enter($__internal_6a38f2cca9234e4a83e299097eab8f3492c1f723199d92d78c927c165ef89162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a38f2cca9234e4a83e299097eab8f3492c1f723199d92d78c927c165ef89162->leave($__internal_6a38f2cca9234e4a83e299097eab8f3492c1f723199d92d78c927c165ef89162_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0d73839fc523ed812086535f75417b511a96985bd7a4209680234fbf7ff184f = $this->env->getExtension("native_profiler");
        $__internal_f0d73839fc523ed812086535f75417b511a96985bd7a4209680234fbf7ff184f->enter($__internal_f0d73839fc523ed812086535f75417b511a96985bd7a4209680234fbf7ff184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f0d73839fc523ed812086535f75417b511a96985bd7a4209680234fbf7ff184f->leave($__internal_f0d73839fc523ed812086535f75417b511a96985bd7a4209680234fbf7ff184f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
