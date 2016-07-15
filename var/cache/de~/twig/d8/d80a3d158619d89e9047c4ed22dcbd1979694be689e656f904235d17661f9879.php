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
        $__internal_6f55a299be4b9a5fe8c23391f7d2bbc1712f3f9aa8ee72718b6a2ff631c4f51b = $this->env->getExtension("native_profiler");
        $__internal_6f55a299be4b9a5fe8c23391f7d2bbc1712f3f9aa8ee72718b6a2ff631c4f51b->enter($__internal_6f55a299be4b9a5fe8c23391f7d2bbc1712f3f9aa8ee72718b6a2ff631c4f51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f55a299be4b9a5fe8c23391f7d2bbc1712f3f9aa8ee72718b6a2ff631c4f51b->leave($__internal_6f55a299be4b9a5fe8c23391f7d2bbc1712f3f9aa8ee72718b6a2ff631c4f51b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ebe36335e210f2b167c55810e83715dd802b0e58f9b5f6640cdd52d58b6b6ae = $this->env->getExtension("native_profiler");
        $__internal_9ebe36335e210f2b167c55810e83715dd802b0e58f9b5f6640cdd52d58b6b6ae->enter($__internal_9ebe36335e210f2b167c55810e83715dd802b0e58f9b5f6640cdd52d58b6b6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9ebe36335e210f2b167c55810e83715dd802b0e58f9b5f6640cdd52d58b6b6ae->leave($__internal_9ebe36335e210f2b167c55810e83715dd802b0e58f9b5f6640cdd52d58b6b6ae_prof);

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
