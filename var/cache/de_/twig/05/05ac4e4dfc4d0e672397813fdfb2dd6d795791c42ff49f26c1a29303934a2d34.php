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
        $__internal_6dedfe4fe95e2ccd391dde554b0b7f2662bd361786bd8590db7016791fa1eeeb = $this->env->getExtension("native_profiler");
        $__internal_6dedfe4fe95e2ccd391dde554b0b7f2662bd361786bd8590db7016791fa1eeeb->enter($__internal_6dedfe4fe95e2ccd391dde554b0b7f2662bd361786bd8590db7016791fa1eeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6dedfe4fe95e2ccd391dde554b0b7f2662bd361786bd8590db7016791fa1eeeb->leave($__internal_6dedfe4fe95e2ccd391dde554b0b7f2662bd361786bd8590db7016791fa1eeeb_prof);

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
