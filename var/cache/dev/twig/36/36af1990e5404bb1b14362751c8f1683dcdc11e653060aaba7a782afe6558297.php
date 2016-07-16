<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_efe80c7251c9130ed91a7c66d4cf38984d3b7d1b823cc42b28c5b897fb509f65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8006693a619362637b2c96859709c785542f428b976a07570e059eb25d4ff80a = $this->env->getExtension("native_profiler");
        $__internal_8006693a619362637b2c96859709c785542f428b976a07570e059eb25d4ff80a->enter($__internal_8006693a619362637b2c96859709c785542f428b976a07570e059eb25d4ff80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8006693a619362637b2c96859709c785542f428b976a07570e059eb25d4ff80a->leave($__internal_8006693a619362637b2c96859709c785542f428b976a07570e059eb25d4ff80a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aee70076c8e423abd96311d81ff990b8dc65460728fc8a74ef855d11fa2c770c = $this->env->getExtension("native_profiler");
        $__internal_aee70076c8e423abd96311d81ff990b8dc65460728fc8a74ef855d11fa2c770c->enter($__internal_aee70076c8e423abd96311d81ff990b8dc65460728fc8a74ef855d11fa2c770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_aee70076c8e423abd96311d81ff990b8dc65460728fc8a74ef855d11fa2c770c->leave($__internal_aee70076c8e423abd96311d81ff990b8dc65460728fc8a74ef855d11fa2c770c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
