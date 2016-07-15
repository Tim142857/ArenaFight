<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_29506e42b2d5cc43c66b8559b31f84954b49589d880ca81e25192c0ca5ad8371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d143752852d62bbd41f5159f90a40eb8be5a4197394cf2a667ed7b7ed6a2bda1 = $this->env->getExtension("native_profiler");
        $__internal_d143752852d62bbd41f5159f90a40eb8be5a4197394cf2a667ed7b7ed6a2bda1->enter($__internal_d143752852d62bbd41f5159f90a40eb8be5a4197394cf2a667ed7b7ed6a2bda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d143752852d62bbd41f5159f90a40eb8be5a4197394cf2a667ed7b7ed6a2bda1->leave($__internal_d143752852d62bbd41f5159f90a40eb8be5a4197394cf2a667ed7b7ed6a2bda1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
