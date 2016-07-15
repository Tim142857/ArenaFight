<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0304621bda79c2e2bd8001209eab80130aa531cd09c8ef7245bb03dca4144990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3608ed900b5ad327f5faf5e5a05f16ddb948b4ab17a00eefe43af3fc5ffeb483 = $this->env->getExtension("native_profiler");
        $__internal_3608ed900b5ad327f5faf5e5a05f16ddb948b4ab17a00eefe43af3fc5ffeb483->enter($__internal_3608ed900b5ad327f5faf5e5a05f16ddb948b4ab17a00eefe43af3fc5ffeb483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3608ed900b5ad327f5faf5e5a05f16ddb948b4ab17a00eefe43af3fc5ffeb483->leave($__internal_3608ed900b5ad327f5faf5e5a05f16ddb948b4ab17a00eefe43af3fc5ffeb483_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7cfd4fb045f58439d80ca6f64edd75c7b8cb5c71a4f77ee0c1c602f94bb3a9a = $this->env->getExtension("native_profiler");
        $__internal_f7cfd4fb045f58439d80ca6f64edd75c7b8cb5c71a4f77ee0c1c602f94bb3a9a->enter($__internal_f7cfd4fb045f58439d80ca6f64edd75c7b8cb5c71a4f77ee0c1c602f94bb3a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f7cfd4fb045f58439d80ca6f64edd75c7b8cb5c71a4f77ee0c1c602f94bb3a9a->leave($__internal_f7cfd4fb045f58439d80ca6f64edd75c7b8cb5c71a4f77ee0c1c602f94bb3a9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
