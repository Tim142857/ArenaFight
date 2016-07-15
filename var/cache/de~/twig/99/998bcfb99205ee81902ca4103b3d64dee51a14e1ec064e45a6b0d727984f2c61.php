<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_daf1dcc1adc6e15fa77a4288265bc263d7c4a17a8a52dc36c0492f08f472477f extends Twig_Template
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
        $__internal_c014c55c6d71f50fa0fb77db84d2cce2ae0a1ff080453ada45a645997272f375 = $this->env->getExtension("native_profiler");
        $__internal_c014c55c6d71f50fa0fb77db84d2cce2ae0a1ff080453ada45a645997272f375->enter($__internal_c014c55c6d71f50fa0fb77db84d2cce2ae0a1ff080453ada45a645997272f375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c014c55c6d71f50fa0fb77db84d2cce2ae0a1ff080453ada45a645997272f375->leave($__internal_c014c55c6d71f50fa0fb77db84d2cce2ae0a1ff080453ada45a645997272f375_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18ff6f0f3639f4441e06f750f13ada7c4dfae1f7af04f26e44fde9fa9a3396db = $this->env->getExtension("native_profiler");
        $__internal_18ff6f0f3639f4441e06f750f13ada7c4dfae1f7af04f26e44fde9fa9a3396db->enter($__internal_18ff6f0f3639f4441e06f750f13ada7c4dfae1f7af04f26e44fde9fa9a3396db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_18ff6f0f3639f4441e06f750f13ada7c4dfae1f7af04f26e44fde9fa9a3396db->leave($__internal_18ff6f0f3639f4441e06f750f13ada7c4dfae1f7af04f26e44fde9fa9a3396db_prof);

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
