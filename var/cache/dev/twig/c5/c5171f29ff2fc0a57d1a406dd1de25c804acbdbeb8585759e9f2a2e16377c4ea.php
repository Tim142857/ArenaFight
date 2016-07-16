<?php

/* ArenaFightBundle:Visitor:AccueilVisitor.html.twig */
class __TwigTemplate_62d18f50be2095f05e8ec8763bdbe49d0f0a87739363c63628874be610093247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ArenaFightBundle:Visitor:LayoutVisitor.html.twig", "ArenaFightBundle:Visitor:AccueilVisitor.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArenaFightBundle:Visitor:LayoutVisitor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2565bf0a52cc61fe5d6b0e96df8d5293d93e5022a6c01fea171d4f124e02ef55 = $this->env->getExtension("native_profiler");
        $__internal_2565bf0a52cc61fe5d6b0e96df8d5293d93e5022a6c01fea171d4f124e02ef55->enter($__internal_2565bf0a52cc61fe5d6b0e96df8d5293d93e5022a6c01fea171d4f124e02ef55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ArenaFightBundle:Visitor:AccueilVisitor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2565bf0a52cc61fe5d6b0e96df8d5293d93e5022a6c01fea171d4f124e02ef55->leave($__internal_2565bf0a52cc61fe5d6b0e96df8d5293d93e5022a6c01fea171d4f124e02ef55_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e6a3789b79fac305dec939a04af041ae72b415ac5db7da5a97373680414cc7f = $this->env->getExtension("native_profiler");
        $__internal_8e6a3789b79fac305dec939a04af041ae72b415ac5db7da5a97373680414cc7f->enter($__internal_8e6a3789b79fac305dec939a04af041ae72b415ac5db7da5a97373680414cc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

";
        
        $__internal_8e6a3789b79fac305dec939a04af041ae72b415ac5db7da5a97373680414cc7f->leave($__internal_8e6a3789b79fac305dec939a04af041ae72b415ac5db7da5a97373680414cc7f_prof);

    }

    public function getTemplateName()
    {
        return "ArenaFightBundle:Visitor:AccueilVisitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "ArenaFightBundle:Visitor:LayoutVisitor.html.twig" %}*/
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
/* */
